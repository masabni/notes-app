@props(['note'])

<div class="py-4 px-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <a class="text-black hover:text-blue-500" href="{{ route('notes.show', $note) }}">{{$note->title}}</a>
                <p class="text-gray-700 text-sm">{{$note->user->name}}</p>
                <p class="text-gray-500 text-sm">{{$note->created_at->isoFormat('LLL')}}</p>
            </div>
        </div>
    </div>
</div>
