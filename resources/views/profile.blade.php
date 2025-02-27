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
            
          </div>
        </div>
    
      </div>
    </body>
    </html>
    </x-app-layout>
    