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
      <div class="ml-64 flex-1 p-4">
          <div class="container mx-auto">
              <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                  <!-- Section Image et Nom -->
                  <div class="text-center p-6 bg-blue-800">
                      <img class="h-24 w-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Profile Image">
                      <h1 class="text-white text-2xl font-bold mt-4">{{Auth::user()->name }}</h1>
                      <p class="text-gray-400">Développeur Full Stack</p>
                  </div>
      
                  <!-- Section Information -->
                  <div class="p-6">
                      <h2 class="text-xl font-bold text-gray-800">À propos de moi</h2>
                      <p class="text-gray-600 mt-2">Je suis un développeur passionné par la création d'applications web modernes et performantes. J'aime travailler avec les dernières technologies et résoudre des problèmes complexes.</p>
                  </div>
      
                  <!-- Section Compétences Techniques -->
                  <div class="p-6">
                      <h2 class="text-xl font-bold text-gray-800">Compétences Techniques</h2>
                      <ul class="list-disc list-inside text-gray-600 mt-2">
                          <li>HTML, CSS, JavaScript</li>
                          <li>React, Node.js</li>
                          <li>Tailwind CSS, Bootstrap</li>
                          <li>Git, Docker</li>
                      </ul>
                  </div>
      
                  <!-- Section Certifications -->
                  <div class="p-6">
                      <h2 class="text-xl font-bold text-gray-800">Certifications</h2>
                      <ul class="list-disc list-inside text-gray-600 mt-2">
                          <li>Certification AWS Certified Developer</li>
                          <li>Certification Google Professional Data Engineer</li>
                      </ul>
                  </div>
      
                  <!-- Section Langages de Programmation -->
                  <div class="p-6">
                      <h2 class="text-xl font-bold text-gray-800">Langages de Programmation</h2>
                      <ul class="list-disc list-inside text-gray-600 mt-2">
                          <li>JavaScript</li>
                          <li>Python</li>
                          <li>Java</li>
                          <li>C#</li>
                      </ul>
                  </div>
      
                  <!-- Section Projets Réalisés -->
                  <div class="p-6">
                      <h2 class="text-xl font-bold text-gray-800">Projets Réalisés</h2>
                      <ul class="list-disc list-inside text-gray-600 mt-2">
                          <li>Application de gestion de tâches</li>
                          <li>Site e-commerce avec React</li>
                          <li>API RESTful avec Node.js</li>
                      </ul>
                  </div>
      
                  <!-- Section Connexion -->
                  <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800"> Connection</h2>
                    <ul class="flex list-disc list-inside text-gray-600 mt-2 gap-2 flex-nowrap">
                      <li>Amine</li>
                      <li>Fouad</li>
                      <li>Issam</li>
                      <li>Lahcen</li>
                      <li>Anass</li>
                  </ul>
                </div>
                <a href="{{ route('editProfile.edit') }}" class="block bg-blue-500 text-white py-2.5 px-4 rounded text-center transition duration-200 hover:bg-blue-600">Modifier Profile</a>
              </div>
          </div>
      </div>
    </div>
  </body>
  </html>
</x-app-layout>