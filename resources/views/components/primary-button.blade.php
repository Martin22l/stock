<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button is-success']) }}>
    {{ $slot }}
</button>
