<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

  public function authorize(): bool
  {
    return true;
  }

  public function rules()
  {
    return [
      'name' => 'nullable|string|max:255',
      'slug' => 'nullable|string|max:255|unique:categories,slug,' . $this->id_category,
      'description' => 'nullable|string',
      'meta_title' => 'nullable|string|max:255',
      'meta_keyword' => 'nullable|string|max:255',
      'meta_description' => 'nullable|string|max:255',
      'status' => 'nullable|boolean',
      'image' => 'nullable|image|max:2048',
    ];
  }
}
