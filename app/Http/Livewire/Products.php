<?php

namespace App\Http\Livewire;

use App\Http\Requests\ProductRequest;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

use Livewire\WithFileUploads;

class Products extends Component
{

  use WithFileUploads;

  public  $products, $categories, $brands, $category_id, $name, $slug, $brand, $small_description,
          $description, $original_price, $selling_price, $quantity, $trending, $image,
          $meta_title, $meta_keyword, $meta_description, $status;

  public $imageUrl;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    abort_if(auth()->user()->role_as != 1, 403);

    $this->categories = Category::all();
    $this->brands = Brand::all();

    $this->products = Product::all();



    return view('livewire.product.products');
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
    $this->meta_title = $product->meta_title;
    $this->meta_keyword = $product->meta_keyword;
    $this->meta_description = $product->meta_description;
    $this->status = $product->status;
    $this->openModal();
  }

  public function destroy()
  {
    $category = Category::where('id', $this->delete_id)->first();
    $category->delete();
  }


  public function store(ProductRequest $request)
  {
    $validated = $request->validated();
    $category = Category::find($request->id_category);

    dd($category);

    $product = $category->products()->create([
      'category_id' => $this->category_id,
      'name' => $this->name,
      'slug' => $this->slug,
      'brand' => $this->brand,
      'small_description' => $this->small_description,
      'description' => $this->description,
      'original_price' => $this->original_price,
      'selling_price' => $this->selling_price,
      'quantity' => $this->quantity,
      'trending' => $this->trending,
      'status' => $this->status == true ? '1' : '0',
      'meta_title' => $this->meta_title,
      'meta_keyword' => $this->meta_keyword,
      'meta_description' => $this->meta_description,
    ]);

    // Category::updateOrCreate(['id' => $this->id_category], $categoryData);

    session()->flash(
      'message',
      $this->category_id ? '¡Actualización exitosa!' : '¡Registro exitoso!'
    );



    $this->closeModal();
    $this->cleanData();
  }


  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }
}
