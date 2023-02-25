<?php

namespace App\Http\Livewire;

use App\Http\Requests\CategoryRequest;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class Categories extends Component
{
  // Definimos una variable
  use WithFileUploads;
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



  public function store(Request $request)
{
    $validatedData = $this->validate([
        'name' => 'required|regex:/^[a-zA-Z]+$/',
        'slug' => 'required',
        'description' => 'required',
        'image' => 'image|max:1024', // validar que es una imagen y su tamaño máximo
        'meta_title' => 'required',
        'meta_keyword' => 'required',
        'meta_description' => 'required',
        'status' => 'required'
    ]);
    // guardar la imagen cargada en el directorio de uploads
    // $imageName = '';
    // if ($this->image) {
    //     $imageName = time().'.'.$this->image->extension();
    //     $this->image->storeAs('public/uploads/category', $imageName);
    // }
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $ext = $file->getClientOriginalExtension();
      $filename = time().'.'.$ext;

      $file->move('uploads/category/', $filename);
      $image = $filename;
  } else {
      $image = $this->image; // asigna el valor actual de $this->image si no se cargó una imagen nueva
  }

  Category::updateOrCreate(
      ['id' => $this->id_category],
      [
          'name' => $this->name,
          'slug' => $this->slug,
          'description' => $this->description,
          'image' => $image, // utiliza la variable $image que contiene el nombre del archivo de imagen cargado
          'meta_title' => $this->meta_title,
          'meta_keyword' => $this->meta_keyword,
          'meta_description' => $this->meta_description,
          'status' => $this->status
      ]
  );
    // if($imageName ->hasFile('image')){
    //   $file = $imageName->file('image');
    //   $ext = $file->getClientOriginalExtension();
    //   $filename = time().'.'.$ext;

    //   $file->move('uploads/category/',$filename);
    //   $this->image = $filename;
    // }

    // Category::updateOrCreate(
    //     ['id' => $this->id_category],
    //     [
    //         'name' => $this->name,
    //         'slug' => $this->slug,
    //         'description' => $this->description,
    //         'image' => $imageName,
    //         'meta_title' => $this->meta_title,
    //         'meta_keyword' => $this->meta_keyword,
    //         'meta_description' => $this->meta_description,
    //         'status' => $this->status
    //     ]
    // );
    session()->flash('message', $this->id_category ? '¡Actualización exitosa!' : '¡Registro exitoso!');

    $this->closeModal();
    $this->cleanData();
}


  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }

}
