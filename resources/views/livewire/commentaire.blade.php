<div class="w-full p-4">
    <!-- Action Buttons -->
    <div class="w-full flex items-center justify-between mb-6">
        <div class="flex space-x-4">
            <button wire:click="toggleForm" type="button" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                {{ $commentsCount }} Commentaire
            </button>
            <button type="button" class="flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition duration-300 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                </svg>
                Share
            </button>
        </div>
    </div>

    <hr class="border-t-2 border-gray-200 mb-6 w-full">

    @if($showForm)
        <div class="w-full bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden">
            <form method="POST" wire:submit.prevent="submit" class="p-6 w-full">
                <input type="hidden" wire:model="post_id">
                
                <div class="flex items-center space-x-4 mb-6">
                    <img class="w-14 h-14 rounded-full border-2 border-blue-100" src="https://via.placeholder.com/50" alt="Avatar">
                    <div>
                        <h3 class="font-bold text-xl text-gray-800">Fouad</h3>
                        <p class="text-sm text-gray-500">Posting publicly</p>
                    </div>
                </div>

                <div class="mb-6 w-full">
                    <label for="comment" class="block text-gray-700 font-semibold mb-2">Your Comment:</label>
                    <textarea 
                        id="comment" 
                        wire:model="content" 
                        class="w-full border-2 border-gray-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300" 
                        rows="4" 
                        placeholder="Share your thoughts..."
                    ></textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <button 
                        type="button" 
                        class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition duration-300"
                    >
                        Cancel
                    </button>
                    <button 
                        type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 shadow-md"
                    >
                        Post Comment
                    </button>
                </div>
            </form>
           
            <!-- Comments List -->
            <div class="bg-gray-50 p-6 border-t border-gray-200 w-full">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Comments </h3>
                <div class="space-y-6 w-full">
                    @foreach ($comments as $comment)
                        <div class="w-full bg-white rounded-xl shadow-md border border-gray-100 p-5">
                            <div class="flex items-center mb-3">
                                <img 
                                    class="w-10 h-10 rounded-full mr-3 border-2 border-blue-100" 
                                    src="https://via.placeholder.com/40" 
                                    alt="User Avatar"
                                >
                                <div>
                                    <h4 class="font-semibold text-gray-800">
                                        {{ $comment->user->name ?? 'Unknown User' }}
                                    </h4>
                                    <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                {{ $comment->content }}
                            </p>
                            <div class="flex items-center mt-4 space-x-4 text-gray-500">
                                <button class="hover:text-blue-600 transition duration-300 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3z"/>
                                    </svg>
                                    Like
                                </button>
                                <button class="hover:text-blue-600 transition duration-300 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18z"/>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>