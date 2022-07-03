<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле не должно быть пустым',
            'title.string' => 'Данные должны быть строчного типа',
            'content.required' => 'Это поле не должно быть пустым',
            'content.string' => 'Данные должны быть строчного типа',
            'preview_image.required' => 'Это поле не должно быть пустым',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Это поле не должно быть пустым',
            'main_image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Это поле не должно быть пустым',
            'category_id.integer' => 'Id категории должно быть числом',
            'category_id.exists' => 'Id категории должн быть в базе данных',
            'tag_ids.array' => 'Необходимо отправить массив данных',
        ];
    }
}
