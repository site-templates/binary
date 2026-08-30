@props([
    'note' => '',
    'showNote' => '1',
    'signoff' => 'Amsterdam',
])
<footer class="mx-auto max-w-[40rem] px-6 pt-20 pb-16">
    <div class="border-t border-line pt-6">
        @if ($showNote)
            @if ($note)
                <p class="max-w-[52ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $note }}</p>
            @else
                <p class="max-w-[52ch] text-base text-pretty text-muted sm:text-[0.9375rem]">{{ $site->footer_note }}</p>
            @endif
        @endif

        <div class="mt-4 flex flex-wrap items-baseline justify-between gap-x-8 gap-y-2">
            <p class="font-mono text-sm text-muted tabular-nums">{{ $signoff }}</p>

            <ul role="list" class="-mx-2 flex flex-wrap items-baseline gap-x-1">
                @foreach ($site->social as $item)
                    <li>
                        <a href="{{ $item->url }}" class="rounded-md px-2 py-1 text-base text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:text-[0.9375rem]">{{ $item->label }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
