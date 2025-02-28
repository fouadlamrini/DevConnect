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
          <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Posts</a>
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
                <div class="bg-white shadow-lg rounded-lg p-4 border border-gray-200">
                    <!-- User Information -->
                  
    
                    <!-- Post Image -->
                    <img src="{{ asset('images/' . $item->image) }}" alt="Post Image" class="w-full h-40 object-cover rounded-md mb-4">
    
                    <!-- Post Content -->
                    <p class="text-gray-800 text-lg font-semibold mb-2">{{ $item->content }}</p>
    
                    <!-- Code Snippet -->
                    <pre class="bg-gray-100 p-3 rounded-md text-sm overflow-x-auto"><code>{{ $item->code_snippet }}</code></pre>
    
                    <!-- Interaction Buttons -->
                    <div class="flex space-x-4 mt-4">
                      <button class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" />
                        </svg>
                        Like
                      </button>
                      
                      <button class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                          <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                        </svg>
                        Comment
                      </button>
                      
                      <button class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                          <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                        </svg>
                        Repost
                      </button>
                      
                      <button class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                        Send
                      </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  
    </div>
  </body>
  </html>
  </x-app-layout>
  