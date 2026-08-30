@props([
    'title' => '',
    'description' => '',
    'year' => '',
    'status' => '',
    'role' => '',
    'stack' => '',
    'cover' => '',
    'coverAlt' => '',
    'showCover' => '1',
    'externalUrl' => '',
    'externalLabel' => '',
    'showExternal' => '1',
    'backLabel' => 'Projects',
    'backUrl' => '/projects',
])
<section class="mx-auto max-w-[40rem] px-6 pt-10 pb-2 sm:pt-14">
    <a href="{{ $backUrl }}" class="row inline-flex items-start gap-1.5 text-base text-muted hover:text-ink sm:text-[0.9375rem]">
        <svg viewBox="0 0 16 16" class="size-4 h-lh shrink-0 fill-current" aria-hidden="true">
            <path d="M13 8a.75.75 0 0 0-.75-.75H5.06l2.72-2.72a.75.75 0 0 0-1.06-1.06L2.97 7.22a.75.75 0 0 0 0 1.06l3.75 3.75a.75.75 0 1 0 1.06-1.06L5.06 8.25h7.19A.75.75 0 0 0 13 8Z"/>
        </svg>
        {{ $backLabel }}
    </a>

    <h1 class="display-page mt-8 font-display text-balance">{{ $title }}</h1>
    <p class="mt-4 max-w-[62ch] text-base/7 text-pretty text-muted sm:text-[0.9375rem]/7">{{ $description }}</p>

    @if ($showExternal)
        <p class="mt-5 text-base sm:text-[0.9375rem]">
            <a href="{{ $externalUrl }}" class="link font-medium">{{ $externalLabel }}</a>
        </p>
    @endif
</section>

@if ($showCover)
    {{-- The one place the template leaves its column: the cover runs the full
         width of the viewport up to a generous cap, so a project page opens
         with an image rather than a paragraph. --}}
    <div class="mx-auto mt-10 max-w-4xl px-6">
        <img src="{{ $cover }}" alt="{{ $coverAlt }}" width="1600" height="900" class="aspect-[16/9] w-full rounded-[min(1vw,10px)] object-cover outline-1 -outline-offset-1 outline-ink/10">
    </div>
@endif

<section class="mx-auto max-w-[40rem] px-6 pt-10">
    <dl class="grid grid-cols-2 gap-x-8 gap-y-5 border-y border-line py-6 sm:grid-cols-3">
        <div>
            <dt class="font-mono text-sm text-muted">Year</dt>
            <dd class="mt-1 text-base tabular-nums sm:text-[0.9375rem]">{{ $year }}</dd>
        </div>
        <div>
            <dt class="font-mono text-sm text-muted">Status</dt>
            <dd class="mt-1 text-base sm:text-[0.9375rem]">{{ $status }}</dd>
        </div>
        <div class="col-span-2 sm:col-span-1">
            <dt class="font-mono text-sm text-muted">Role</dt>
            <dd class="mt-1 text-base text-pretty sm:text-[0.9375rem]">{{ $role }}</dd>
        </div>
        <div class="col-span-2 sm:col-span-3">
            <dt class="font-mono text-sm text-muted">Built with</dt>
            <dd class="mt-1 text-base text-pretty sm:text-[0.9375rem]">{{ $stack }}</dd>
        </div>
    </dl>
</section>
