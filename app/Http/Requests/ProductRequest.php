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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    public function rules(): array
    {
        $rules = [
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:5',
            'category_id' => 'required',
            'brand_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:3048'
//            'price' => 'required|numeric|min:1',
//            'count' => 'required|numeric|min:0'
        ];
        return $rules;
    }

    public function messages()
    {
        return[
            'required'=> 'Поле :attribute обязательно для ввода',
            'min' => 'Поле :attribute должно иметь минимум :min символов',
            'image' => 'Загрузите изображение',
            'images.*' => 'Загрузите изображения',
            'mimes' => 'Изображение должно быть формата jpeg,png,jpg,gif,svg,webp',
            'max' => 'Размер изображения не должно превышать 3Мб',
        ];
    }
}
