@props([
    'items' => [],
    'current' => '',
    'heading' => 'Keep reading',
])
<section class="mx-auto max-w-[40rem] px-6 pt-6 pb-4">
    <div class="border-t border-line pt-8">
        <h2 class="font-display text-base font-medium tracking-[-0.01em] text-muted">{{ $heading }}</h2>

        <ul role="list" class="mt-4 space-y-1">
            @foreach ($items as $entry)
                @if ($entry->slug != $current)
                    <li>
                        <a href="{{ $entry->link }}" class="row flex items-baseline gap-4 py-1.5">
                            <span class="flex min-w-0 items-baseline gap-1.5">
                                <span class="text-base text-pretty sm:text-[0.9375rem]">{{ $entry->title }}</span>
                                <svg viewBox="0 0 16 16" class="row-arrow size-4 h-lh shrink-0 fill-muted" aria-hidden="true">
                                    <path d="M3 8a.75.75 0 0 1 .75-.75h7.19L8.22 4.53a.75.75 0 0 1 1.06-1.06l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.72-2.72H3.75A.75.75 0 0 1 3 8Z"/>
                                </svg>
                            </span>
                            <span class="ml-auto shrink-0 font-mono text-sm text-muted tabular-nums">{{ $entry->dateFormatted }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</section>
