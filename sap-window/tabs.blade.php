@props(['default_tab'])
<div id="tab_container"
     class="mt-8 mx-2"
     x-data="{tab: {{ $default_tab }}}"
>
    <div id="tabs" class="flex">
        {{ $buttons }}
    </div>
    <div id="content" class="border border-gray-400 -mx-2 py-2 px-3 rounded bg-gray-200/20">
        {{ $slot }}
    </div>
</div>
