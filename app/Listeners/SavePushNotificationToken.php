<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Native\Mobile\Events\PushNotification\TokenGenerated;

class SavePushNotificationToken
{
    public function handle(TokenGenerated $event): void
    {
        // The token string is available on the event object
        $token = $event->token;

        // Save the token for the currently authenticated user
        if (auth()->check()) {
            auth()->user()->update([
                'fcm_token' => $token,
            ]);
        }

        Log::info('NativePHP Push Token Received: ' . $token);
    }
}
