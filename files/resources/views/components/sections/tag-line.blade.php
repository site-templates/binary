@props([
    'heading' => 'Things I am good at',
    'items' => 'Design systems · Interface engineering · Tailwind · Accessibility · Type · Prototyping · Technical writing · Teaching',
])
<section class="mx-auto max-w-[40rem] px-6 pt-14">
    <h2 class="font-display text-base font-medium tracking-[-0.01em] text-muted">{{ $heading }}</h2>
    <p class="mt-3 max-w-[60ch] text-base/7 text-pretty text-muted sm:text-[0.9375rem]/7">{{ $items }}</p>
</section>
