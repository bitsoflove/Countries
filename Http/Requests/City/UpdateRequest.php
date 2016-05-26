<?php

namespace Modules\Countries\Http\Requests\City;

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
        return [
            "name" => ['required'],
            "postcode" => ['required'],
            "lat" => ['numeric'],
            "lng" => ['numeric'],
            "country_id" => ['required', 'integer'],
        ];
    }
}
