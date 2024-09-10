@props([
    'loop' => 0
])

<tr {{ $attributes->merge(['class' => "border-b hover:bg-neutral-100" . ($loop%2 ? ' bg-neutral-50' : '') ]) }}>
    {{ $slot }}
</tr>
