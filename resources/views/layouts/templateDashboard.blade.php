<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2">
      <div class="text-2xl font-semibold text-center">Dashboard</div>
      <nav>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Home</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Analytics</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Settings</a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Profile</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold text-gray-900">@yield('bienvenu')</h1>
        </div>
      </header>

      <!-- Content Area -->
      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h2 class="text-xl font-semibold mb-2"> @yield('case1')</h2>
              <p class="text-gray-600">This is some content for card 1.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h2 class="text-xl font-semibold mb-2">@yield('case2')</h2>
              <p class="text-gray-600">This is some content for card 2.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h2 class="text-xl font-semibold mb-2">@yield('case3')</h2>
              <p class="text-gray-600">This is some content for card 3.</p>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>