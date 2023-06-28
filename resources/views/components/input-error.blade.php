@props(['messages'])

@if ($messages)
    <p {{ $attributes->merge(['class' => 'help is-danger']) }}>
        @foreach ((array) $messages as $message)
            {{ $message }}
        @endforeach
    <p>
@endif
