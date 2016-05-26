<?php

namespace Modules\Countries\Http\Requests\Country;

use BitsOfLove\Support\Helpers\CanDoMultilingualValidation;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        $country = $this->route('countries');

        $rules = [
            "name" => ['required'],
            "iso_2" => ['required', 'size:2', 'unique:countries,iso_2,' . $country->id],
        ];

        $this->addMultilingualRules($rules, 'title', ['required']);

        return $rules;
    }
}
