<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Costumes | Costume Rental</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0f9ff',
              100: '#e0f2fe',
              200: '#bae6fd',
              300: '#7dd3fc',
              400: '#38bdf8',
              500: '#0ea5e9',
              600: '#0284c7',
              700: '#0369a1',
              800: '#075985',
              900: '#0c4a6e',
            },
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 min-h-screen">

  <x-sidebar></x-sidebar>

  <!-- Main Content -->
  <div class="lg:ml-64 min-h-screen transition-all duration-300">
    <!-- Top Navigation -->
    <header class="bg-white shadow-sm">
      <div class="flex items-center justify-between p-4">
        <button class="lg:hidden text-gray-500 hover:text-gray-700" onclick="toggleSidebar()">
          <i class="fas fa-bars"></i>
        </button>
        <div class="flex items-center space-x-4">
          <div class="relative">
            <button class="text-gray-500 hover:text-gray-700">
              <i class="fas fa-bell"></i>
              <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
            </button>
          </div>
          <div class="flex items-center space-x-2">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile" class="h-8 w-8 rounded-full object-cover">
            <span class="text-sm font-medium text-gray-700">John Doe</span>
          </div>
        </div>
      </div>
    </header>

    <!-- Costumes Content -->
    <main class="p-6">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">Available Costumes</h2>
        <div class="flex flex-col sm:flex-row gap-4">
          <div class="relative">
            <input type="text" placeholder="Search costumes..." class="pl-10 pr-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-primary-500">
            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
          </div>
          <div class="flex items-center space-x-2">
            <select class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
              <option>All Categories</option>
              <option>Superhero</option>
              <option>Fantasy</option>
              <option>Historical</option>
              <option>Horror</option>
              <option>Anime</option>
            </select>
            <select class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
              <option>Sort By: Newest</option>
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
              <option>Popularity</option>
            </select>
          </div>
        </div>
      </div>
      
      <!-- Costume Grid -->
      <x-all-availabel-costume></x-all-availabel-costume>
      
      <!-- Pagination -->
      <div class="flex justify-center mt-8">
        <nav class="flex items-center space-x-2">
          <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-100">
            <i class="fas fa-chevron-left"></i>
          </a>
          <a href="#" class="px-3 py-2 rounded-md border bg-primary-600 text-white">1</a>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-100">2</a>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-100">3</a>
          <span class="px-3 py-2 text-gray-500">...</span>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-100">8</a>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-100">
            <i class="fas fa-chevron-right"></i>
          </a>
        </nav>
      </div>
    </main>
  </div>

  <script src="{{ asset('js/toggleSidebar.js') }}"></script>
  <script src="{{ asset('js/activePage.js') }}"></script>
</body>
</html>

