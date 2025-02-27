<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Publication Technique</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-2xl font-bold">Publication Technique</h1>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-4">

        <!-- Form to Add New Post -->
        <section class="mb-8 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Ajouter un Nouveau Post</h2>
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="content" class="block text-gray-700">Contenu</label>
                    <textarea id="content" name="content" rows="4" class="w-full p-2 border border-gray-300 rounded mt-1" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Image URL</label>
                    <input type="text" id="image" name="image" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="code" class="block text-gray-700">Extrait de Code</label>
                    <textarea id="code" name="code_snippet" rows="4" class="w-full p-2 border border-gray-300 rounded mt-1 font-mono"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Publier</button>
            </form> 

            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-2 rounded-lg">
                <p>{{ session('success') }}</p>
            </div>
             @endif
        
        
                
            
        </section>

      
     
    </main>

</body>
</html>