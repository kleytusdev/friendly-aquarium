<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Livewire\WithFileUploads;


class Categories extends Component
{
  // Definimos una variable
  use WithFileUploads;
  //use Exception;

  public $categories, $id_category, $name, $slug, $description, $image, $meta_title, $meta_keyword, $meta_description, $status;
  public $imageUrl;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    abort_if(auth()->user()->role_as != 1, 403);

    $this->categories = Category::all();
    return view('livewire.category.categories');
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
    $category = Category::findorFail($id);
    $this->id_category = $id;
    $this->name = $category->name;
    $this->slug = $category->slug;
    $this->description = $category->description;
    $this->image = $category->image;
    $this->meta_title = $category->meta_title;
    $this->meta_keyword = $category->meta_keyword;
    $this->meta_description = $category->meta_description;
    $this->status = $category->status == true ? '1' : '0';
    $this->openModal();
  }

  public function destroy()
  {
    $category = Category::where('id', $this->delete_id)->first();
    $category->delete();
  }


  public function store()
  {

    $validatedData = $this->validate([
      'name' => 'required|regex:/^[a-zA-Z]+$/',
      'slug' => 'required',
      'description' => 'required',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5120',
      'meta_title' => 'required',
      'meta_keyword' => 'required',
      'meta_description' => 'required',
      'status' => ''
    ]);

    $categoryData = [
      'name' => $this->name,
      'slug' => $this->slug,
      'description' => $this->description,
      'meta_title' => $this->meta_title,
      'meta_keyword' => $this->meta_keyword,
      'meta_description' => $this->meta_description,
      'status' => $this->status == true ? '1' : '0',
    ];

      if ($this->image) {
        $extension = $this->image->extension();
        $imageName = time().'.'.$extension;
        $this->image->storeAs('public', $imageName);
        $categoryData['image'] = $imageName;
        $this->imageUrl = $this->image->temporaryUrl();

      }

      Category::updateOrCreate(['id' => $this->id_category], $categoryData);

      session()->flash('message',
      $this->id_category ? '¡Actualización exitosa!' : '¡Registro exitoso!');

      $this->closeModal();
      $this->cleanData();
  }


  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }

}
