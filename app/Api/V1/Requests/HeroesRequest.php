<?php

namespace App\Api\V1\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroesRequest extends FormRequest
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
            'filter'            => 'nullable|array|max:10',
            'filter.name'       => 'string|max:100',
            'filter.gender'     => 'string|max:100',
            'filter.culture'    => 'string|max:100',
            'filter.died'       => 'string|max:100',
            'filter.mother'     => 'string|max:100',
            'filter.father'     => 'string|max:100',
            'filter.title'      => 'string|max:100',
            'filter.alias'      => 'string|max:100',
            'filter.book'       => 'string|max:100',
            'filter.tv_series'  => 'string|max:100',
        ];
    }
}
