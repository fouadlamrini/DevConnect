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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1.91l-.01-.01L23 10z"/>
                        </svg>
                        J'aime
                    </button>
                      
                      <button class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                          <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                        </svg>
                        Comment
                      </button>
                      
                    
                      
                      <button class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7 0-.24-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/>
                        </svg>
                        Share
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
  