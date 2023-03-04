<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
          'id_category' => 'required',
          // 'name' => 'required|string|max:255',
          // 'slug' => 'required|string|unique:productos,slug|max:255',
          // 'brand' => 'required|string|max:255',
          // 'small_description' => 'required|string|max:255',
          // 'description' => 'required|string',
          // 'original_price' => 'required|numeric|min:0',
          // 'selling_price' => 'required|numeric|min:0',
          // 'quantity' => 'required|integer|min:0',
          // 'trending' => 'required|boolean',
          // 'status' => 'required|boolean',
          // 'meta_title' => 'nullable|string|max:255',
          // 'meta_keyword' => 'nullable|string|max:255',
          // 'meta_description' => 'nullable|string|max:255',
        ];
    }
}
