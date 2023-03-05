<?php

namespace App\Http\Livewire;

use App\Http\Requests\ProductRequest;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Livewire\WithFileUploads;
use Stringable;

class Products extends Component
{

  use WithFileUploads;

  public  $products, $category_id, $name, $slug, $brand, $small_description,
          $description, $original_price, $selling_price, $quantity, $trending, $image,
          $meta_title, $meta_keyword, $meta_description, $status;

  public $imageUrl;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    abort_if(auth()->user()->role_as != 1, 403);

    $categories = Category::all();
    $brands = Brand::all();

    $this->products = Product::all();

    return view('livewire.product.products', compact('categories', 'brands'));
  }

  public function create()
  {
    $this->cleanData();
    $this->openModal();
    $categories = Category::all();
    $brands = Brand::all();
    return view('livewire.product.products', compact('categories', 'brands'));
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


  public function store(Request $request)
  {
    dd($request->all());
    $validatedData =  $this->validate([
        'category_id' => ['required', 'integer'],
        'name' => ['required', 'string', 'max:255'],
        'slug' => ['required', 'string', 'max:255'],
        'brand' => ['nullable', 'string'],
        'small_description' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'original_price' => ['required'],
        'selling_price' => ['required'],
        'quantity' => ['required'],
        'trending' => ['required'],
        'status' => ['required'],
        'meta_title' => ['required', 'string', 'max:255'],
        'meta_keyword' => ['required', 'string', 'max:255'],
        'meta_description' => ['required', 'string', 'max:255'],
      ]);

      dd($validatedData);

    $category = Category::finOrFail($validatedData['category_id']);


    $product = $category->products()->create([
      'category_id' => $validatedData['category_id'],
      'name' => $validatedData['name'],
      'slug' => Str::slug($validatedData['slug']),
      'brand' => $validatedData['brand'],
      'small_description' => $validatedData['small_description'],
      'description' => $validatedData['description'],
      'original_price' => $validatedData['original_price'],
      'selling_price' => $validatedData['selling_price'],
      'quantity' => $validatedData['quantity'],
      'trending' => $request->trending == true ? '1':'0',
      'status' =>  $request->status == true ? '1':'0',
      'meta_title' => $validatedData['meta_title'],
      'meta_keyword' => $validatedData['meta_keyword'],
      'meta_description' => $validatedData['meta_description'],
    ]);

    return $product->id;

    // Category::updateOrCreate(['id' => $this->id_category], $categoryData);

    // session()->flash(
    //   'message',
    //   $this->category_id ? '¡Actualización exitosa!' : '¡Registro exitoso!'
    // );

    $this->closeModal();
    $this->cleanData();
  }


  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }
}
