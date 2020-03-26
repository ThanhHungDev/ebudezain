<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VALIDATE_SAVE_CATEGORY extends FormRequest
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

    public function rules()
    {
        return [
            'name'            => 'required|max:255ß',
            'slug'            => 'required|max:255',
            'excerpt'         => 'required|max:255',
            'thumbnail'       => 'required|max:255',
            'background'      => 'required|max:255',
            'description'     => 'required|max:255',
            'site_name'       => 'required|max:255',
            'image_seo'       => 'required|max:255',
            'keyword_seo'     => 'required|max:255',
            'description_seo' => 'required|max:255'
        ];
    }
    

    public function messages(){
        return [
            'name.required'            => ':attribute phải được nhập',
            'name.max'                 => ':attribute vượt quá :max kí tự',
            'slug.required'            => ':attribute phải được nhập',
            'slug.max'                 => ':attribute vượt quá :max kí tự',
            'excerpt.required'         => ':attribute phải được nhập',
            'excerpt.max'              => ':attribute vượt quá :max kí tự',
            'thumbnail.required'       => ':attribute phải được nhập',
            'thumbnail.max'            => ':attribute vượt quá :max kí tự',
            'background.required'      => ':attribute phải được nhập',
            'background.max'           => ':attribute vượt quá :max kí tự',
            'description.required'     => ':attribute phải được nhập',
            'description.max'          => ':attribute vượt quá :max kí tự',
            'site_name.required'       => ':attribute phải được nhập',
            'site_name.max'            => ':attribute vượt quá :max kí tự',
            'image_seo.required'       => ':attribute phải được nhập',
            'image_seo.max'            => ':attribute vượt quá :max kí tự',
            'keyword_seo.required'     => ':attribute phải được nhập',
            'keyword_seo.max'          => ':attribute vượt quá :max kí tự',
            'description_seo.required' => ':attribute phải được nhập',
            'description_seo.max'      => ':attribute vượt quá :max kí tự'
        ];
    }
}
