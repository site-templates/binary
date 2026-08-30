@props([
    'heading' => 'Work',
    'showDetails' => '1',
])
<section class="mx-auto max-w-[40rem] px-6 pt-14">
    <h2 class="font-display text-base font-medium tracking-[-0.01em] text-muted">{{ $heading }}</h2>

    <ul role="list" class="mt-4 divide-y divide-line border-y border-line">
        @foreach ($experience as $item)
            <li class="flex flex-col gap-x-8 gap-y-1 py-4 md:flex-row md:items-baseline">
                <p class="order-2 shrink-0 font-mono text-sm text-muted tabular-nums md:order-1 md:w-28">{{ $item->period }}</p>
                <div class="order-1 min-w-0 md:order-2 md:flex-1">
                    <p class="text-base text-pretty sm:text-[0.9375rem]">{{ $item->role }}<span class="text-muted">, {{ $item->org }}</span></p>
                    @if ($showDetails)
                        <p class="mt-1 max-w-[58ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $item->detail }}</p>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</section>
