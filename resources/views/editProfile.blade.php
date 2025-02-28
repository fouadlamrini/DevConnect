<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier le Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <main class="container mx-auto p-4">
        <section class="mb-8 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Modifier le Profile</h2>
            <form method="POST" action="/updateProfile/{{$user->id}}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="bio" class="block text-gray-700">Bio</label>
                    <textarea id="bio" name="bio" rows="4" class="w-full p-2 border border-gray-300 rounded mt-1" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="competence" class="block text-gray-700">Compétence</label>
                    <input type="text" id="competence" value="{{$user->competence}}" name="competence" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="githubName" class="block text-gray-700">GitHub Name</label>
                    <input type="text" id="githubName" name="githubName" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="profession" class="block text-gray-700">Profession</label>
                    <input type="text" id="profession" name="profession" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Image URL</label>
                    <input type="url" id="image" name="image" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-gray-700">Location</label>
                    <input type="text" id="location" name="location" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="age" class="block text-gray-700">Age</label>
                    <input type="number" id="age" name="age" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="languages" class="block text-gray-700">Languages</label>
                    <input type="text" id="languages" name="languages" class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
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