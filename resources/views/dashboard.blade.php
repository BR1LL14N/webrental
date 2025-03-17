<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Costume Rental</title>
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
  {{-- SIDEBAR --}}
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

    <!-- Dashboard Content -->
    <main class="p-6">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Dashboard</h2>
      
      <!-- Stats -->
      <x-booking-stat></x-booking-stat>
      
      
      <!-- Recent Bookings -->
      <x-recent-booking></x-recent-booking>
      
      <!-- Recommended Costumes -->
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
          <h3 class="text-lg font-semibold text-gray-800">Recommended for You</h3>
        </div>
        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
            <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
              <h4 class="text-gray-900 font-semibold">Vampire Costume</h4>
              <p class="text-gray-500 text-sm">Premium quality, all sizes available</p>
              <div class="mt-2 flex items-center">
                <span class="text-primary-600 font-bold">$25.00</span>
                <span class="text-gray-500 text-sm ml-2">/day</span>
              </div>
              <button class="mt-3 w-full bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
            </div>
          </div>
          
          <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
            <img src="https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
              <h4 class="text-gray-900 font-semibold">Princess Costume</h4>
              <p class="text-gray-500 text-sm">Elegant design, perfect for parties</p>
              <div class="mt-2 flex items-center">
                <span class="text-primary-600 font-bold">$30.00</span>
                <span class="text-gray-500 text-sm ml-2">/day</span>
              </div>
              <button class="mt-3 w-full bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
            </div>
          </div>
          
          <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
            <img src="https://images.unsplash.com/photo-1516126491303-6f64aa6cfc5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
              <h4 class="text-gray-900 font-semibold">Zombie Costume</h4>
              <p class="text-gray-500 text-sm">Scary and realistic, includes makeup</p>
              <div class="mt-2 flex items-center">
                <span class="text-primary-600 font-bold">$22.00</span>
                <span class="text-gray-500 text-sm ml-2">/day</span>
              </div>
              <button class="mt-3 w-full bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
            </div>
          </div>
          
          <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
            <img src="https://images.unsplash.com/photo-1603195557368-402549c5adc4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
              <h4 class="text-gray-900 font-semibold">Clown Costume</h4>
              <p class="text-gray-500 text-sm">Colorful and fun, includes accessories</p>
              <div class="mt-2 flex items-center">
                <span class="text-primary-600 font-bold">$20.00</span>
                <span class="text-gray-500 text-sm ml-2">/day</span>
              </div>
              <button class="mt-3 w-full bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
            </div>
          </div>
        </div>
        <div class="p-4 border-t">
          <a href="/costume" class="text-primary-600 hover:text-primary-900 text-sm font-medium">Browse all costumes</a>
        </div>
      </div>
    </main>
  </div>

  <script src="{{ asset('js/activePage.js') }}"></script>
  <script src="{{ asset('js/toggleSidebar.js') }}"></script>
</body>
</html>

