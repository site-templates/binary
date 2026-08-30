@props([
    'current' => '/',
    'showSwitch' => '1',
    'switchLabel' => 'Switch theme',
])
<header class="mx-auto flex max-w-[40rem] flex-wrap items-center gap-x-6 gap-y-3 px-6 pt-8 pb-2 sm:pt-10">
    <a href="/" aria-label="Homepage" class="row shrink-0 text-base font-medium tracking-[-0.01em]">{{ $site->author }}</a>

    <nav aria-label="Primary" class="-mx-2 flex items-center gap-x-1 sm:ml-auto">
        @foreach ($site->nav_links as $link)
            @if ($link->url == $current)
                <a href="{{ $link->url }}" aria-current="page" class="rounded-md px-2 py-1 text-base text-ink underline decoration-line underline-offset-4 sm:text-[0.9375rem]">{{ $link->label }}</a>
            @else
                <a href="{{ $link->url }}" class="rounded-md px-2 py-1 text-base text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:text-[0.9375rem]">{{ $link->label }}</a>
            @endif
        @endforeach
    </nav>

    @if ($showSwitch)
        <button type="button" data-theme-toggle aria-pressed="false" title="{{ $switchLabel }}" class="ml-auto flex size-9 shrink-0 items-center justify-center rounded-full text-muted hover:bg-surface hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:ml-0 sm:size-8">
            <span class="sr-only">{{ $switchLabel }}</span>
            <svg viewBox="0 0 16 16" class="switch-disc size-4 shrink-0" aria-hidden="true">
                <circle cx="8" cy="8" r="7" fill="none" stroke="currentColor" stroke-width="1.25"/>
                <path d="M8 1A7 7 0 0 1 8 15Z" fill="currentColor"/>
            </svg>
        </button>
    @endif
</header>
