<!-- Table responsive wrapper -->
<div {{ $attributes->merge(['class' => "overflow-x-auto bg-white border shadow-lg"]) }}>
    <!-- Table -->
    <table class="min-w-full text-left text-xs whitespace-nowrap">
        {{ $slot }}
    </table>

</div>
