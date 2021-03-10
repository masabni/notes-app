<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Latest Notes') }}
        </h2>
    </x-slot>

    @foreach($notes as $note)
        <x-note :note="$note"></x-note>
    @endforeach

</x-app-layout>
