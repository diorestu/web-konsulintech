<?php

namespace App\Support;

class WhatsApp
{
    public static function url(?string $message = null): ?string
    {
        $number = preg_replace('/\D/', '', (string) config('site.whatsapp_number'));
        if (! preg_match('/^[1-9][0-9]{6,14}$/', $number)) {
            return null;
        }

        return 'https://wa.me/'.$number.'?text='.rawurlencode($message ?? __('site.whatsapp_message'));
    }
}
