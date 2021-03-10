<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Note') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('notes.store') }}" autocomplete="off">
        @csrf
        <x-note-form></x-note-form>
    </form>

</x-app-layout>
