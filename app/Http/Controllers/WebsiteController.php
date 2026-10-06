<?php

namespace App\Http\Controllers;

use App\Support\WhatsApp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    public function page(string $locale, string $page = 'home'): View
    {
        App::setLocale($locale);

        return view('pages.'.$page, [
            'page' => $page,
            'locale' => $locale,
            'whatsappUrl' => WhatsApp::url(),
        ]);
    }

    public function contact(Request $request, string $locale): RedirectResponse
    {
        App::setLocale($locale);
        $data = $request->validate([
            'conName' => ['required', 'string', 'max:100'],
            'conEmail' => ['required', 'email', 'max:254'],
            'conPhone' => ['required', 'string', 'max:30'],
            'conSubject' => ['nullable', 'string', 'max:100'],
            'conMessage' => ['required', 'string', 'max:2000'],
        ], [
            'required' => __('site.field_required'),
            'email' => __('site.email_invalid'),
            'max' => __('site.field_too_long'),
        ], [
            'conName' => __('site.name'), 'conEmail' => __('site.email'),
            'conPhone' => __('site.phone'), 'conMessage' => __('site.message'),
        ]);

        $message = __('site.whatsapp_message')."\n\n";
        foreach (['conName' => 'name', 'conEmail' => 'email', 'conPhone' => 'phone', 'conSubject' => 'subject', 'conMessage' => 'message'] as $field => $label) {
            $message .= __('site.'.$label).': '.($data[$field] ?? '-')."\n";
        }

        if (! $url = WhatsApp::url($message)) {
            return back()->withInput()->withErrors(['contact' => __('site.whatsapp_unavailable')]);
        }

        return redirect()->away($url, 303);
    }
}
