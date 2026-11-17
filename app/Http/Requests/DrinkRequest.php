<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DrinkRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => [ "required", "string", "max:30", "min:3" ],
            "amount" => [ "required", "numeric" ],
            "price" => [ "required", "numeric" ],
            "type" => [ "required", "string", "max:20", "min:3" ],
            "package" => [ "required", "string", "max:30", "min:3" ],
        ];
    }

    // public function messages() {

    //     return [
    //         "drink.required" => "Elvárt mező",
    //         "drink.min" => "Legalább 3 karakter elvárt",
    //     ];
    // }
}
