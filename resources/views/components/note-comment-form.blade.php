@props(['note'])

<form method="POST" action="{{ route('comments.store', $note) }}">
    @csrf

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="flex flex-wrap">
                <div class="relative w-full appearance-none label-floating">
                        <textarea
                            class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            required rows="2" name="comment" placeholder="Your comment..."></textarea>
                </div>
            </div>
            <button
                class="w-full bg-green-400 hover:bg-green-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit">
                Save
            </button>
        </div>
    </div>
</form>
