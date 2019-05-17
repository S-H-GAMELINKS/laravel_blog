@for ($i = 0; $i < 5; $i++)
{{ $msgs[$i] }}
@endfor

@foreach ($msgs as $msg)
    {{ $msg }}
@endforeach