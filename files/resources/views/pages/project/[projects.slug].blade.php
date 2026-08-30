<x-layouts.main :title="$projects->title" :description="$projects->description" current="/projects">
    <x-sections.project-header
        :title="$projects->title"
        :description="$projects->description"
        :year="$projects->year"
        :status="$projects->status"
        :role="$projects->role"
        :stack="$projects->stack"
        :cover="$projects->cover"
        :coverAlt="$projects->coverAlt"
        :externalUrl="$projects->externalUrl"
        :externalLabel="$projects->externalLabel"
    />
    <x-sections.entry-body :content="$projects->content"/>
</x-layouts.main>
