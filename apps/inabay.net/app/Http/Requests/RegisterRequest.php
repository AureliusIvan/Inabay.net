<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * 
     */

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'no_ktp' => ['required', 'numerical:16'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'zipcode' => ['required', 'numeric'],
            'phone' => ['required', 'numeric', 'min:11'],
            'shop_name' => ['required', 'string', 'unique:users'],
            'bank_name' => ['required', 'string'],
            'bank_acc_name' => ['required', 'string'],
            'bank_acc_no' => ['required', 'string'],
        ];
    }
}
