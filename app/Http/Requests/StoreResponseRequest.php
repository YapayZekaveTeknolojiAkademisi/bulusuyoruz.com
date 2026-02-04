<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;

class StoreResponseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $event = $this->route('event');
        $collectLocation = $event?->collect_location ?? true;

        $rules = [
            'selected_dates' => ['required', 'array', 'min:1'],
            'selected_dates.*' => ['date'],
            'selected_times' => ['required', 'array', 'min:1'],
            'location_answer' => ['nullable', 'string'],
            'email' => ['nullable', 'email', 'max:255'],
        ];

        // Location fields are only required when event collects location
        if ($collectLocation) {
            $rules['province_id'] = ['required', 'exists:provinces,id'];
            $rules['district_id'] = ['required', 'exists:districts,id'];
        } else {
            $rules['province_id'] = ['nullable', 'exists:provinces,id'];
            $rules['district_id'] = ['nullable', 'exists:districts,id'];
        }

        return $rules;
    }

    public function attributes(): array
    {
        return [
            'selected_dates' => 'Tarihler',
            'selected_times' => 'Saatler',
            'location_answer' => 'Konum Tercihi',
        ];
    }
}
