<?php

namespace App\Http\Requests;

use Sentinel;
use Illuminate\Foundation\Http\FormRequest;

class RegisterNewOrganizerRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }
    public function persist(array $credentials)
    {
       $customer= Sentinel::registerAndActivate($credentials);
        $role= Sentinel::findRoleBySlug('customer');
        $role->users()->attach($customer);
    }
}
