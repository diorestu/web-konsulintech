<a class="whatsapp-float" href="{{ $whatsappUrl ?? route('site.contact', ['locale' => $locale]).'#website-contact-form' }}" @if($whatsappUrl) target="_blank" rel="noopener noreferrer" @endif aria-label="{{ __('site.whatsapp_label') }}" title="{{ __('site.whatsapp_label') }}">
    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
</a>
