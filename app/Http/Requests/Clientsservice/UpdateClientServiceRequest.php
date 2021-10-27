<?php

namespace App\Http\Requests\Clientsservice;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Clientsservice\ClientService;

class UpdateClientServiceRequest extends FormRequest
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
        return ClientService::$rules;
    }
}
