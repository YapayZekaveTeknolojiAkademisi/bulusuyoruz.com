<?php

namespace App\ViewModels;

use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;

class EventViewModel
{
    public function __construct(
        public Event $event,
        public ?User $currentUser = null
    ) {}

    public function isOwner(): bool
    {
        return $this->currentUser && $this->currentUser->id === $this->event->user_id;
    }

    public function shareUrl(): string
    {
        return route('events.show', $this->event->slug);
    }

    public function formattedDateRange(): string
    {
        $start = Carbon::parse($this->event->start_date)->translatedFormat('d F');
        $end = Carbon::parse($this->event->end_date)->translatedFormat('d F Y');
        
        return "{$start} - {$end}";
    }

    public function responsesCount(): int
    {
        return $this->event->responses()->count();
    }

    public function provinces()
    {
        // If event has a province restriction, return only that province
        if ($this->event->province_id) {
            return \App\Models\Province::where('id', $this->event->province_id)->get();
        }
        
        return \App\Models\Province::all();
    }

    public function districts()
    {
        // If event has a province restriction, return only that province's districts
        if ($this->event->province_id) {
            return \App\Models\District::where('province_id', $this->event->province_id)
                ->get()
                ->groupBy('province_id');
        }
        
        return \App\Models\District::all()->groupBy('province_id');
    }


    public function formatResponseDates(\App\Models\Response $response): string
    {
        if (empty($response->selected_dates)) return 'Tarih seçilmedi';
        
        $dates = array_map(function($date) {
            return Carbon::parse($date)->translatedFormat('d F');
        }, $response->selected_dates);
        
        return implode(', ', $dates);
    }

    public function formatResponseTimes(\App\Models\Response $response): string
    {
        if (empty($response->selected_times)) return 'Saat seçilmedi';
        
        return implode(', ', $response->selected_times);
    }
}
