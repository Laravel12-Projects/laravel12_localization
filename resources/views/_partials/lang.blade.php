@foreach (Config::get('languages') as $lang => $language)
    @if ($lang != App::getLocale())
        <div style="text-align: center;">
            <a style="text-decoration: none; border: 1px solid #bbb; border-radius: 5px; padding: 5px; margin: 5px; color: #666; background-color: #f4f4f4;"
                href="{{ route('lang', ['lang' => $lang]) }}">
                {{ $language }}
            </a>
        </div>
    @endif
@endforeach
