<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Products extends Component
{

  use WithFileUploads;
  use WithPagination;

  public  $id_product, $category_id, $name, $slug,
    $description, $price, $quantity, $image, $status, $productImages;

  public $imageUrl;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    abort_if(auth()->user()->role_as != 1, 403);

    $products = Product::paginate(5);

    // $products = Product::all();

    $categories = Category::all();
    $images = ProductImage::all();


    return view('livewire.product.products', compact('categories', 'images', 'products'));
  }

  public function create()
  {
    $this->cleanData();
    $this->openModal();
  }

  public function openModal()
  {
    $this->resetValidation();
    $this->modal = true;
  }

  public function closeModal()
  {
    $this->modal = false;
  }

  public function cleanData()
  {
    $this->reset();
  }

  public function edit($id)
  {
    $product = Product::findOrFail($id);
    $this->id_product = $id;
    $this->category_id = $product->category->id;
    $this->name = $product->name;
    $this->slug = $product->slug;
    $this->description = $product->description;
    $this->price = $product->price;
    $this->quantity = $product->quantity;
    $this->image = $product->image;
    $this->status = $product->status;
    $this->openModal();
  }

  public function destroy()
  {
    $product = Product::where('id', $this->delete_id)->first();
    $product->delete();
  }


  public function store(Request $request)
  {
    $rules = [
      'name' => 'required|string|max:255',
      'slug' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required',
      'quantity' => 'required',
      'status' => 'required',
      'category_id' => 'required',
      'image' => 'array|min:1',
      'image.*' => 'image|max:5120',
    ];

    $this->validate($rules);

    // $category = Category::findOrFail($rules['category_id']);

    $product = [
      'name' => $this->name,
      'slug' => $this->slug,
      'description' => $this->description,
      'price' => $this->price,
      'quantity' => $this->quantity,
      'status' =>  $this->status == true ? '1' : '0',
      'category_id' => $this->category_id
    ];

    $product = Product::updateOrCreate(['id' => $this->id_product], $product);

    if ($this->image) {
      foreach ($this->image as $imageFile) {
        $extension = $imageFile->extension();
        $fileName = date('YmdHis') . '_' . rand(11111, 99999) . '.' . $extension;
        $imageFile->storeAs('public/', $fileName);
        $finalImageName = new ProductImage(['image' => $fileName]);
        $product->productImages()->save($finalImageName);
      }
    }

    $this->closeModal();
    $this->cleanData();
  }


  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }
}
