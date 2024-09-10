@props(['tab_id'])
<button
    @click="tab = {{ $tab_id }};"
    :class="(tab == {{ $tab_id }} ? 'to-gray-300' : 'to-gray-400/70')"
    class="inline-flex border border-gray-400 -ml-0.5 border-b-0 bg-gradient-to-b from-gray-200 rounded rounded-b-none pb-0.5 px-3"
>
    {{ $slot }}
</button>
