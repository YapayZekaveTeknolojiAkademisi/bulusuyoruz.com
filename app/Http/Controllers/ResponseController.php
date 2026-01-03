<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResponseRequest;
use App\Models\Event;
use App\Services\ResponseService;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function __construct(
        protected ResponseService $responseService
    ) {}

    public function store(StoreResponseRequest $request, Event $event)
    {
        try {
            $this->responseService->createResponse(
                $event,
                $request->user(),
                $request->validated(),
                $request->ip()
            );

            return redirect()->route('events.result', $event->slug)->with('success', 'Yanıtınız kaydedildi!');
            
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Response creation failed: ' . $e->getMessage());

             $message = config('app.debug') 
                ? 'Sistem hatası: ' . $e->getMessage() 
                : 'Beklenmedik bir sorun oluştu. Lütfen tekrar deneyiniz.';

            return back()->with('error', $message);
        }
    }
}
