<x-mail::message>

@foreach ($data as $dat )
<ul>
    <li>{{$dat}}</li>
</ul>
@endforeach
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
