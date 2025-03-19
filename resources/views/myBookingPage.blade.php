<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Bookings | Costume Rental</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">
  <!-- Sidebar -->
  <x-sidebar></x-sidebar>

  <!-- Main Content -->
  <div class="lg:ml-64 min-h-screen transition-all duration-300">
    <!-- HEADER -->
    <x-header></x-header>

    <!-- My Bookings Content -->
    <main class="p-6">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">My Bookings</h2>
        <div class="flex flex-col sm:flex-row gap-4">
          <div class="relative">
            <input type="text" placeholder="Search bookings..." class="pl-10 pr-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-primary-500">
            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
          </div>
          <select class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
            <option>All Status</option>
            <option>Active</option>
            <option>Pending Return</option>
            <option>Returned</option>
            <option>Cancelled</option>
          </select>
        </div>
      </div>
      
      <!-- Tabs -->
      <div class="mb-6">
        <div class="border-b">
          <nav class="flex -mb-px">
            <a href="#" class="py-4 px-6 border-b-2 border-primary-500 text-primary-600 font-medium">
              Active (3)
            </a>
            <a href="#" class="py-4 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium">
              Pending Return (1)
            </a>
            <a href="#" class="py-4 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium">
              Completed (8)
            </a>
          </nav>
        </div>
      </div>
      
      <!-- Bookings List -->
      @includeif('user-component.booking-stat-categories');

      
      <!-- Pagination -->
      <div class="flex justify-center mt-8">
        <nav class="flex items-center space-x-2">
          <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-100">
            <i class="fas fa-chevron-left"></i>
          </a>
          <a href="#" class="px-3 py-2 rounded-md border bg-primary-600 text-white">1</a>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-100">2</a>
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

