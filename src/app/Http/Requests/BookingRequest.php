<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'time' => 'required',
            'date' => [
                'required',
                function ($attribute, $value, $fail) {
                    $inputDate = Carbon::createFromFormat('m/d/Y', $value);
                    $currentDate = Carbon::now();

                    if ($inputDate <= $currentDate) {
                        $fail("The $attribute must be a date in the future.");
                    }
                },
            ],
        ];
    }
}
