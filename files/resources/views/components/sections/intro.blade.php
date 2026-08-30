@props([
    'greeting' => "Hi, I'm sander",
    'avatar' => '/images/avatar.jpg',
    'avatarAlt' => 'Sander Vos',
    'showAvatar' => '1',
    'bio' => 'I build interfaces for teams that have outgrown their first one. Mostly design systems, mostly in the browser, mostly the unglamorous half where the tokens meet the components.',
    'bioSecond' => 'For the last two years that has been independent work out of Amsterdam. Before that I spent three years inside a scheduling product, which is where I learned what a design system costs when nobody is paying attention to it.',
    'availability' => 'Taking one new client this autumn.',
    'showAvailability' => '1',
    'contactLabel' => 'Get in touch',
    'contactUrl' => 'mailto:sander@binary.site',
])
<section class="mx-auto max-w-[40rem] px-6 pt-10 sm:pt-14">
    @if ($showAvatar)
        <img src="{{ $avatar }}" alt="{{ $avatarAlt }}" width="320" height="320" class="size-9 rounded-full object-cover outline-1 -outline-offset-1 outline-ink/10">
    @endif

    <p class="mt-5 text-base font-medium tracking-[-0.01em]">{{ $greeting }}</p>
    <p class="text-base text-muted">{{ $site->role }}</p>

    <div class="mt-7 space-y-5 text-base/7 text-pretty text-muted sm:text-[0.9375rem]/7">
        <p class="max-w-[64ch]">{{ $bio }}</p>
        <p class="max-w-[64ch]">{{ $bioSecond }}</p>
    </div>

    <div class="mt-7 flex flex-wrap items-baseline gap-x-5 gap-y-2 text-base sm:text-[0.9375rem]">
        <a href="{{ $contactUrl }}" class="link font-medium">{{ $contactLabel }}</a>
        @if ($showAvailability)
            <p class="text-muted">{{ $availability }}</p>
        @endif
    </div>
</section>
