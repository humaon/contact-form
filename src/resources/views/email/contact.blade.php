@component('mail::message')
# You have a message from {{ config('app.name') }}

@foreach($message as $k=>$m)
    @if($k=='_token')
        @continue
        @endif
    {{$k}} : {{$m}}
    @endforeach

@component('mail::button', ['url' => config('app.url')])
 Go to {{config('app.name')}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
