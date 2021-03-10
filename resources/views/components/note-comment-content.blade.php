<div class="my-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <p class="text-gray-700">{{$comment->user->name}}</p>
        <p class="text-gray-500 text-sm mb-4">{{$comment->created_at->isoFormat('LLL')}}</p>
        <p>{{$comment->comment}}</p>
    </div>
</div>
