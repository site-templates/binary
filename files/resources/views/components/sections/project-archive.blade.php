@props([
    'showStatus' => '1',
])
<section class="mx-auto max-w-[40rem] px-6 pt-8 pb-6">
    <ul role="list" class="space-y-2">
        @foreach ($projects as $entry)
            <li>
                <a href="{{ $entry->link }}" class="row flex flex-col gap-x-8 gap-y-1 py-2.5 md:flex-row md:items-baseline">
                    <span class="order-2 flex shrink-0 items-baseline gap-2 md:order-1 md:w-28">
                        <span class="font-mono text-sm text-muted tabular-nums">{{ $entry->year }}</span>
                        @if ($showStatus)
                            <span class="text-sm text-muted">{{ $entry->status }}</span>
                        @endif
                    </span>
                    <span class="order-1 min-w-0 md:order-2 md:flex-1">
                        <span class="flex items-baseline gap-1.5">
                            <span class="text-base sm:text-[0.9375rem]">{{ $entry->title }}</span>
                            <svg viewBox="0 0 16 16" class="row-arrow size-4 h-lh shrink-0 fill-muted" aria-hidden="true">
                                <path d="M3 8a.75.75 0 0 1 .75-.75h7.19L8.22 4.53a.75.75 0 0 1 1.06-1.06l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.72-2.72H3.75A.75.75 0 0 1 3 8Z"/>
                            </svg>
                        </span>
                        <span class="mt-1 block max-w-[58ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $entry->description }}</span>
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</section>
