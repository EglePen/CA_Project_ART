<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaintingRequest extends FormRequest
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
            'title' => 'required|max:100',
            'year_created' => 'required|numeric|digits:4',
            'description' => 'required|string',
            'artist_id' => 'required|exists:artists,id',
            'location_id' => 'required|exists:artists,id',
            'movement_id' => 'required|exists:artists,id',
            'colors' => 'required|array|min:1',
            'methods' => 'required|array|min:1',
            'colors.*' => 'required|exists:colors,id',
            'methods.*' => 'required|exists:methods,id',
        ];
    }
}
