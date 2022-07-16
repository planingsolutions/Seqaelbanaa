<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownLanguageLink">
    @foreach(array_keys(config('locale.languages')) as $lang)
        @if($lang != app()->getLocale())
            <small><a href="{{ url('login/lang/'.$lang) }}" class="dropdown-item pt-1 pb-1">@lang('menus.language-picker.langs.'.$lang)</a></small>
        @endif
    @endforeach
</div>
