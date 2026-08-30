@props([
    'heading' => 'Projects',
    'limit' => '4',
    'showLink' => '0',
    'linkLabel' => 'All projects',
    'linkUrl' => '/projects',
    'showDescription' => '0',
])
<section class="mx-auto max-w-[40rem] px-6 pt-14">
    <div class="flex items-baseline justify-between gap-6">
        <h2 class="font-display text-base font-medium tracking-[-0.01em] text-muted">{{ $heading }}</h2>
        @if ($showLink)
            <a href="{{ $linkUrl }}" class="rounded-md text-base text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent sm:text-[0.9375rem]">{{ $linkLabel }}</a>
        @endif
    </div>

    <ul role="list" class="mt-4 space-y-1">
        @foreach ($projects as $entry)
            <li>
                <a href="{{ $entry->link }}" class="row flex items-baseline gap-4 py-1.5">
                    <span class="min-w-0">
                        <span class="flex items-baseline gap-1.5">
                            <span class="text-base sm:text-[0.9375rem]">{{ $entry->title }}</span>
                            <svg viewBox="0 0 16 16" class="row-arrow size-4 h-lh shrink-0 fill-muted" aria-hidden="true">
                                <path d="M3 8a.75.75 0 0 1 .75-.75h7.19L8.22 4.53a.75.75 0 0 1 1.06-1.06l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.72-2.72H3.75A.75.75 0 0 1 3 8Z"/>
                            </svg>
                        </span>
                        @if ($showDescription)
                            <span class="mt-1 block max-w-[56ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $entry->description }}</span>
                        @endif
                    </span>
                    <span class="ml-auto shrink-0 font-mono text-sm text-muted tabular-nums">{{ $entry->year }}</span>
                </a>
            </li>
            @break($loop->iteration == $limit)
        @endforeach
    </ul>
</section>
