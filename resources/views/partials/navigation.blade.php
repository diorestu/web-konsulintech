<ul>
    @foreach (['home', 'about', 'services', 'portfolio', 'contact'] as $menu)
        <li class="{{ $page === $menu ? 'current-menu-item' : '' }}">
            <a href="{{ route('site.'.$menu, ['locale' => $locale]) }}" @if($page === $menu) aria-current="page" @endif>{{ __('site.'.$menu) }}</a>
        </li>
    @endforeach
    <li class="has-dropdown">
        <a href="{{ route('site.'.$page, ['locale' => $locale === 'id' ? 'en' : 'id']) }}" aria-label="{{ __('site.switch_language') }}">{{ strtoupper($locale) }}</a>
        <ul class="sub-menu">
            @foreach (['id' => 'Indonesia', 'en' => 'English'] as $language => $label)
                <li><a href="{{ route('site.'.$page, ['locale' => $language]) }}" lang="{{ $language }}" hreflang="{{ $language }}" @if($language === $locale) aria-current="true" @endif>{{ $label }}</a></li>
            @endforeach
        </ul>
    </li>
</ul>
