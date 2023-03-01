<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;

class Brands extends Component
{
  // Definimos una variable
  public $brands, $id_brand, $name, $slug, $status;
  public $modal = false;
  public $delete_id;

  protected $listeners = ['destroy'];

  public function render()
  {
    abort_if(auth()->user()->role_as != 1, 403);

    $this->brands = Brand::all();
    return view('livewire.brand.brands');
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
    $brand = Brand::findorFail($id);
    $this->id_brand = $id;
    $this->name = $brand->name;
    $this->slug = $brand->slug;
    $this->status = $brand->status;
    $this->openModal();

  }


  public function store(){
    Brand::updateOrCreate(['id'=>$this->id_brand],
    [
      'name' => $this->name,
      'slug' => $this->slug,
      'status' => $this->status == true ? '1' : '0',
    ]);

    session()->flash('message',
    $this->id_brand ? '¡Actualización exitosa!' : '¡Registro exitoso!');

    $this->closeModal();
    $this->cleanData();
  }

  public function destroy()
  {
    $brand = Brand::where('id', $this->delete_id)->first();
    $brand->delete();
  }

  public function deletedConfirmation($id)
  {
    $this->delete_id = $id;
    $this->dispatchBrowserEvent('eventDeleteConfirmation');
  }

}
