<?php

namespace App\Http\Livewire;

use App\Http\Requests\ProductRequest;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class Products extends Component
{

  use WithFileUploads;

  public  $id_product ,$products, $category_id, $name, $slug,
          $description, $price, $quantity, $image, $status;

  public $imageUrl;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    abort_if(auth()->user()->role_as != 1, 403);

    $categories = Category::all();

    $this->products = Product::all();

    return view('livewire.product.products', compact('categories'));
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
    // $this->category_id = $id;
    $this->category_id = $product->category->id;
    $this->name = $product->name;
    $this->slug = $product->slug;
    $this->description = $product->description;
    $this->image = $product->image;
    $this->status = $product->status;
    $this->openModal();
  }

  public function destroy()
  {
    $category = Category::where('id', $this->delete_id)->first();
    $category->delete();
  }


  public function store()
  {
    $rules = [
      'name' => 'required|string|max:255',
      'slug' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required|string',
      'quantity' => 'required|string',
      'status' => 'required',
      'category_id' => 'required',
    ];

    $this->validate($rules);

    // $category = Category::findOrFail($rules['category_id']);

    $product = [
      'name' => $this->name,
      'slug' => $this->slug,
      'description' => $this->description,
      'price' => $this->price,
      'quantity' => $this->quantity,
      'status' =>  $this->status == true ? '1':'0',
      'category_id' => $this->category_id
    ];

    Product::updateOrCreate(['id' => $this->id_product], $product);

    $this->closeModal();
    $this->cleanData();
  }


  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }
}
