<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Categories extends Component
{
  use WithFileUploads;
  use WithPagination;

  public $id_category, $name, $slug, $description, $image, $meta_title, $meta_keyword, $meta_description, $status;
  public $imageUrl;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    abort_if(auth()->user()->role_as != 1, 403);

    $categories = DB::table('categories')->paginate(5);

    return view('livewire.category.categories', compact('categories'));
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
    $this->status = $category->status;
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
      'name' => 'required',
      'slug' => 'required',
      'description' => 'required',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5120',
      'meta_title' => 'required',
      'meta_keyword' => 'required',
      'meta_description' => 'required',
      'status' => ''
    ]);

    $category = [
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
      $imageName = date('YmdHis') . '_' . rand(11111, 99999) . '.' . $extension;
      $this->image->storeAs('public', $imageName);
      $category['image'] = $imageName;
      $this->imageUrl = $this->image->temporaryUrl();
    }

    Category::updateOrCreate(['id' => $this->id_category], $category);

    $this->closeModal();
    $this->cleanData();
  }


  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }
}
