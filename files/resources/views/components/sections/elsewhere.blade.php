@props([
    'heading' => 'Elsewhere',
])
<section class="mx-auto max-w-[40rem] px-6 pt-14">
    <h2 class="font-display text-base font-medium tracking-[-0.01em] text-muted">{{ $heading }}</h2>

    <ul role="list" class="mt-4 space-y-1">
        @foreach ($site->elsewhere as $item)
            <li>
                <a href="{{ $item->url }}" target="_blank" rel="noopener" class="row flex items-baseline gap-4 py-1.5">
                    <span class="flex min-w-0 items-start gap-1.5 text-base sm:text-[0.9375rem]">
                        <span class="min-w-0">{{ $item->label }}</span>
                        <svg viewBox="0 0 16 16" class="row-arrow size-4 h-lh shrink-0 fill-muted" aria-hidden="true">
                            <path d="M4.22 11.78a.75.75 0 0 1 0-1.06L9.44 5.5H5.75a.75.75 0 0 1 0-1.5h5.5a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0V6.56l-5.22 5.22a.75.75 0 0 1-1.06 0Z"/>
                        </svg>
                    </span>
                    <span class="ml-auto shrink-0 text-base text-muted sm:text-[0.9375rem]">{{ $item->detail }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</section>
