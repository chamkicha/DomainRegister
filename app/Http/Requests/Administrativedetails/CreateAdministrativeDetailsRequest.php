<?php

namespace App\Http\Requests\Administrativedetails;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Administrativedetails\AdministrativeDetails;

class CreateAdministrativeDetailsRequest extends FormRequest
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
        return AdministrativeDetails::$rules;
    }
}
