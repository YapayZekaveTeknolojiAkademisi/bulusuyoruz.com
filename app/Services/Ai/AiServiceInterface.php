<?php

namespace App\Services\Ai;

use App\Models\Event;

interface AiServiceInterface
{
    /**
     * Analyze event responses and suggest the best time and location.
     *
     * @param Event $event
     * @return array
     */
    public function analyzeEvent(Event $event): array;
}
