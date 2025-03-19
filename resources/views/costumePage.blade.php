<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Costumes | Costume Rental</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">

  <x-sidebar></x-sidebar>

  <!-- Main Content -->
  <div class="lg:ml-64 min-h-screen transition-all duration-300">
    <!-- HEADER -->
    <x-header></x-header>

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
      @includeif('user-component.all-availabel-costume');
      
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

  <script src="{{ asset('js/activePage.js') }}"></script>
  <script src="{{ asset('js/toggleSidebar.js') }}"></script>

</body>
</html>

