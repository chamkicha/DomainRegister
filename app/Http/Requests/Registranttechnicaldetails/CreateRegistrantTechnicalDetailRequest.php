<?php

namespace App\Http\Requests\Registranttechnicaldetails;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Registranttechnicaldetails\RegistrantTechnicalDetail;

class CreateRegistrantTechnicalDetailRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return RegistrantTechnicalDetail::$rules;
    }
}
