<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest{
    public function authorize(): bool{
        return true;
    }

    public function rules(): array{
        return [
            'company_name' => 'required|string|max:255',
            'address'      => 'required|string|max:255',
            'phone'        => ['required'],
            'price'        => 'required|string',
            'paymart'      => 'required|string',
            'description'  => 'required|string|max:1000',
            'logo_image'   => 'required|image|mimes:jpg,png|max:2048|dimensions:min_width=500,min_height=500,max_width=524,max_height=524',
        ];
    }

    public function messages(): array{
        return [
            'required'   => ':attribute maydoni to‘ldirilishi shart.',
            'string'     => ':attribute faqat matn bo‘lishi kerak.',
            'max'        => ':attribute maksimal uzunligi :max belgi bo‘lishi kerak.',
            'image'      => ':attribute rasm bo‘lishi kerak.',
            'mimes'      => ':attribute faqat quyidagi formatlarda bo‘lishi mumkin: :values.',
            'dimensions' => ':attribute o‘lchami aniq 512x512 piksel bo‘lishi kerak.',
        ];
    }

    public function attributes(): array{
        return [
            'company_name' => 'Firma nomi',
            'address'      => 'Manzil',
            'phone'        => 'Telefon raqam',
            'price'        => 'Narx',
            'paymart'      => 'To‘lov turi',
            'description'  => 'Izoh',
            'logo_image'   => 'Logo rasmi',
        ];
    }
}
