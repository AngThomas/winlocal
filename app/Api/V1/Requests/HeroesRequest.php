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
            'filter.name'       => 'nullable|string|max:100',
            'filter.gender'     => 'nullable|string|max:100',
            'filter.culture'    => 'nullable|string|max:100',
            'filter.died'       => 'nullable|string|max:100',
            'filter.mother'     => 'nullable|string|max:100',
            'filter.father'     => 'nullable|string|max:100',
            'filter.title'      => 'nullable|string|max:100',
            'filter.alias'      => 'nullable|string|max:100',
            'filter.book'       => 'nullable|string|max:100',
            'filter.tv_series'  => 'nullable|string|max:100',
        ];
    }
}
