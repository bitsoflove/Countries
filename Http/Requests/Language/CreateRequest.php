<?php

namespace Modules\Countries\Http\Requests\Language;

use BitsOfLove\Support\Helpers\CanDoMultilingualValidation;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    use CanDoMultilingualValidation;

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
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => ['required', 'unique:languages,slug'],
        ];
    }
}
