<?php

namespace RobMovieManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieCollectionRequest extends FormRequest
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
     * See https://laravel.com/docs/5.4/validation#available-validation-rules
     * 
     * @return array
     */
    public function rules()
    {
        return [
            'title'        => 'required|string|between:1,50',
            'tmdb_id'      => 'nullable|integer|min:1',
            'imdb_id'      => 'nullable|string|between:3,64',
            'format'       => 'nullable|integer|between:1,6',
            'length'       => 'nullable|integer|between:0,500',
            'release_year' => 'nullable|integer|between:1800,2100',
            'rating'       => 'nullable|integer|between:1,5',
        ];
    }
}
