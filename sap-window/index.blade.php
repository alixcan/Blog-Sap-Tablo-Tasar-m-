@props([
    'title',
])
<div class="border border-gray-400 bg-neutral-50 p-0.5">
    <h3 id="header" class="divide-x border-b-[3px] text-sm border-yellow-500 bg-gradient-to-b from-neutral-500/70 to-neutral-500/90 px-4 py-1 font-semibold text-gray-900">
        {{ $title  }}
    </h3>

    <section id="master_data" class="bg-stone-200/50 px-3 pb-10 pt-2 text-xs h-full">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-2">
            {{ $master_data }}
        </div>

        {{ $tabs ?? '' }}

    </section>

</div>
