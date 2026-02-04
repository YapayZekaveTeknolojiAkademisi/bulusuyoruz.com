<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'province_id' => ['nullable', 'integer', 'exists:provinces,id'],
            'start_date' => ['required', 'date', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'location_mode' => ['required', 'string', 'in:common,suggestion'],
            'collect_location' => ['nullable', 'boolean'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Etkinlik Adı',
            'description' => 'Açıklama',
            'province_id' => 'Şehir',
            'start_date' => 'Başlangıç Tarihi',
            'end_date' => 'Bitiş Tarihi',
            'location_mode' => 'Konum Tercihi',
        ];
    }
}
