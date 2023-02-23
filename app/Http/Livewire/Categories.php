<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
  // Definimos una variable
  public $categories, $id_category, $name, $slug, $description, $image, $meta_title, $meta_keyword, $meta_description, $status;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    $this->categories = Category::all();
    return view('livewire.categories');
  }

  public function create()
  {
    $this->cleanData();
    $this->openModal();
  }

  public function openModal()
  {
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
    $this->status = $category->status;
    $this->openModal();

  }

  public function destroy()
  {
    $category = Category::where('id', $this->delete_id)->first();
    $category->delete();
  }



  public function store(){
    Category::updateOrCreate(['id'=>$this->id_category],
    [
      'name' => $this->name,
      'slug' => $this->slug,
      'description' => $this->description,
      'image' => $this->image,
      'meta_title' => $this->meta_title,
      'meta_keyword' => $this->meta_keyword,
      'meta_description' => $this->meta_description,
      'status' => $this->status
    ]);

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
