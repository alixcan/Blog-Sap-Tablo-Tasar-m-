@props(['tab_id'])
<div    x-cloak
        x-show="tab == '{{ $tab_id}}'"
        class="overflow-hidden"
>
    {{ $slot }}
</div>
