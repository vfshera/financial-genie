<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'quillcontent' => 'required|string|min:100',
            'title' => 'required|string|min:5',
            'cover' => 'required|image',
        ];
    }

    public function attributes()
    {
        return [
            'quillcontent' => 'post body',
            'cover' => 'post cover image',
        ];
    }
}
