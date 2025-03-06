<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dashboard</title>
      <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
      
      <div class="flex">
        
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 h-screen fixed top-0 left-0 space-y-6 py-7 px-2">
          <div class="text-2xl font-semibold text-center">DevConnect</div>
          <nav>
            <a href="dashboard" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Home</a>
            <a href="{{ route('postGeneral') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Posts</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Connection</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Notification</a>
            <a href="{{ route('myprofile') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Profile</a>
            <a href="{{ route('posts.create') }}" class="block bg-blue-500 text-white py-2.5 px-4 rounded text-center transition duration-200 hover:bg-blue-600">Ajouter un Post</a>
          </nav>
        </div>
    
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-y-auto p-4 ml-64">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6">
              @foreach ($posts as $item)
              
              <div class="bg-white shadow-lg rounded-lg p-4 border border-gray-200 relative">
                <!-- Bouton des trois points en haut à droite de la carte -->
                <button onclick="toggleOptions(event)" class="text-gray-500 hover:text-gray-700 transition-colors duration-200 absolute right-4 top-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </button>
            
                <!-- Menu déroulant -->
                <div id="optionsMenu" class="absolute right-4 top-12 w-48 bg-white rounded-md shadow-lg hidden">
                    <ul>
                        <li>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Modifier</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-red-600 hover:bg-red-50">Supprimer</a>
                        </li>
                    </ul>
                </div>
            
                <!-- User Information -->
                <div class="w-20 h-20 flex items-center">
                    <img src="{{ asset('images/' . $item->user->image) }}" 
                         alt="image profile" 
                         class="w-full h-full object-cover rounded-full border border-gray-300 shadow-sm">
                    <h1 class="ml-4 text-lg font-semibold">{{ $item->user->name }}</h1>
                </div>
            
                <!-- Post Image -->
                <img src="{{ asset('images/' . $item->image) }}" alt="Post Image" class="w-full h-40 object-cover rounded-md my-4">
            
                <!-- Post Content -->
                <p class="text-gray-800 text-lg font-semibold mb-2">{{ $item->content }}</p>
            
                <!-- Code Snippet -->
                <pre class="bg-gray-100 p-3 rounded-md text-sm overflow-x-auto"><code>{{ $item->code_snippet }}</code></pre>
            
                <!-- Interaction Buttons -->
                <div class="flex space-x-4 mt-4">
                    <!-- Like Button -->
                    <form action="/posts/{{$item->id}}/like" method="post">
                        @csrf
                        <button type="submit" class="{{
                            $item -> likes -> contains('user_id', Auth::user() -> id) ? 'text-blue-500' : 'text-gray-500'
                        }} hover:text-blue-700 transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1.91l-.01-.01L23 10z"/>
                            </svg>
                            J'aime
                            <span>{{ count($item -> likes) }}</span>
                        </button>
                    </form>
            
                    <!-- Comment Section -->
                    @livewire('commentaire', ['post_id' => $item->id])
                </div>
            </div>
            
           
              @endforeach
          </div>
      </div>
    
      </div>
      <script>
        // Fonction pour afficher ou masquer le menu déroulant
        function toggleOptions(event) {
            event.stopPropagation(); // Empêche la propagation de l'événement
            const menu = document.getElementById('optionsMenu');
            menu.classList.toggle('hidden');
        }
    
        // Fermer le menu si on clique ailleurs sur la page
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('optionsMenu');
            if (!menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
    </body>
    </html>
    </x-app-layout>
    