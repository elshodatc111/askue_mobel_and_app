<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyItemRequest extends FormRequest{
    public function authorize(): bool{
        return true;
    }
    public function rules(): array{
        return [
            'company_id' => ['required', 'exists:companies,id'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
        ];
    }
    public function messages(): array{
        return [
            'company_id.required' => 'Ferma tanlanishi shart.',
            'company_id.exists' => 'Tanlangan ferma mavjud emas.',
            'name.required' => 'Maxsulot nomi majburiy.',
            'price.required' => 'Narx majburiy.',
            'price.numeric' => 'Narx faqat raqamlardan iborat bo‘lishi kerak.',
        ];
    }
    public function attributes(): array{
        return [
            'company_id' => 'Firma nomi',
            'name'      => 'Maxsulot nomi',
            'price'        => 'Maxsulot narx',
        ];
    }
}
