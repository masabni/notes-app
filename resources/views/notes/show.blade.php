<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $note->title }}
        </h2>
    </x-slot>

    <x-note-content :note="$note"></x-note-content>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
        <div class="text-xl text-black mb-3">Comments</div>

        @auth
            <x-note-comment-form :note="$note"></x-note-comment-form>
        @endauth

        @forelse($note->comments as $comment)
            <x-note-comment-content :comment="$comment"></x-note-comment-content>
        @empty
            <p class="p-6 italic">
                {{__('There are no comments for this note.')}}
            </p>
        @endforelse

    </div>
</x-app-layout>
