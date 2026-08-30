@props([
    'showDetails' => '1',
])
<section class="mx-auto max-w-[40rem] px-6 pt-8 pb-6">
    <ul role="list" class="divide-y divide-line border-y border-line">
        @foreach ($now as $entry)
            <li class="flex flex-col gap-x-8 gap-y-1 py-4 md:flex-row md:items-baseline">
                <p class="order-2 shrink-0 font-mono text-sm text-muted tabular-nums md:order-1 md:w-28">{{ $entry->dateFormatted }}</p>
                <div class="order-1 min-w-0 md:order-2 md:flex-1">
                    <p class="text-base text-pretty sm:text-[0.9375rem]">{{ $entry->title }}</p>
                    @if ($showDetails)
                        <p class="mt-1 max-w-[58ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $entry->detail }}</p>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</section>
