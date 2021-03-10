<div class="py-4 px-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <label class="inline-flex items-center mb-4">
                    <input name="published" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                    <span class="ml-2 text-gray-700">{{__('Publish')}}</span>
                </label>

                <!-- title field -->
                <div class="flex flex-wrap mb-6">
                    <div class="relative w-full appearance-none label-floating">
                        <x-input
                            class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 focus:outline-none focus:bg-white"
                            name="title" type="text" placeholder="Title" required>
                        </x-input>
                    </div>
                </div>
                <!-- Note field -->
                <div class="flex flex-wrap mb-6">
                    <div class="relative w-full appearance-none label-floating">
                        <textarea
                            class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            rows="8" name="content" placeholder="Note..."></textarea>
                    </div>
                </div>
                <button
                    class="w-full bg-green-400 hover:bg-green-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                    type="submit">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
