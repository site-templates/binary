@props([
    'title' => 'Writing',
    'intro' => '',
    'showIntro' => '1',
])
<section class="mx-auto max-w-[40rem] px-6 pt-12 pb-2 sm:pt-16">
    <h1 class="display-page font-display text-balance">{{ $title }}</h1>
    @if ($showIntro)
        <p class="mt-4 max-w-[62ch] text-base/7 text-pretty text-muted sm:text-[0.9375rem]/7">{{ $intro }}</p>
    @endif
</section>
