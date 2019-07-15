<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required|string',
            'phone-number' => 'required|string|min:10', //Тут можна добавити значно детальніше правило валідації з використанням регулярних виразів
            'email' => 'required|email',
            'status' => 'required|in:no-sales,prospect,customer,old-customer',
            'buyer' => 'boolean',
            'seller' => 'boolean',
            'transporter' => 'boolean',
        ];
    }
}
