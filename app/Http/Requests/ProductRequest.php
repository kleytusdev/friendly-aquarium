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
        return [    'category_id' => ['required', 'integer'],
        'name' => ['required', 'string', 'max:255'],
        'slug' => ['required', 'string', 'max:255'],
        'brand' => ['required', 'string', 'max:255'],
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
      ];
    }
}
