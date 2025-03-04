<div class="p-4">



    
    <button wire:click="toggleForm" type="submit" class="text-gray-500 hover:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
          <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
          <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
        </svg>
        Comment
        <span>5</span>
      </button>

      <button class="text-gray-500 hover:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 24 24" fill="currentColor">
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7 0-.24-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/>
        </svg>
        Share
    </button>

    @if($showForm)
        <div class="mt-4 p-4 border border-gray-300 rounded bg-gray-100">
            <form wire:submit.prevent="submitComment">
                <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center space-x-4">
                        <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/50" alt="Avatar">
                        <div>
                            <h3 class="font-bold text-gray-900">fouad</h3>
                            <p class="text-sm text-gray-500">2 heures ago</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-700">
                        ccommentaire1
                    </p>
                    <div class="mt-4 flex space-x-4">
                        <button class="text-blue-500 hover:text-blue-700">Like</button>
                        <button class="text-blue-500 hover:text-blue-700">Répondre</button>
                    </div>
                </div>
                <label for="comment" class="block text-gray-700">Votre commentaire:</label>
                <textarea id="comment" wire:model="comment" class="border rounded p-2 w-full"></textarea>

                <button type="submit" class="bg-green-500 text-white px-4 py-2 mt-2 rounded">
                    Commenter
                </button>
            </form>
        </div>
    @endif
</div>
