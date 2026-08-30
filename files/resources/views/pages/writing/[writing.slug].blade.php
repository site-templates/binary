<x-layouts.main :title="$writing->title" :description="$writing->description" current="/writing">
    <x-sections.entry-header
        :title="$writing->title"
        :description="$writing->description"
        :dateFormatted="$writing->dateFormatted"
        :readTime="$writing->readTime"
    />
    <x-sections.entry-body :content="$writing->content"/>
    <x-sections.entry-nav :items="$entries" :current="$writing->slug"/>
</x-layouts.main>
