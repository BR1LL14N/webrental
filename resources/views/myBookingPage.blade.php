<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Bookings | Costume Rental</title>
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
  <!-- Sidebar -->
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
      <div class="space-y-6">
        <!-- Booking Card 1 -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
          <div class="p-6 border-b">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="flex flex-col mb-4 md:mb-0">
                <div class="flex items-center">
                  <h3 class="text-lg font-semibold text-gray-800">Booking #1234</h3>
                  <span class="ml-4 px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                </div>
                <p class="text-sm text-gray-500 mt-1">Booked on March 15, 2023</p>
              </div>
              <div class="flex items-center space-x-2">
                <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition-colors">
                  Extend Rental
                </button>
                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-100 transition-colors">
                  Return
                </button>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex flex-col md:flex-row">
              <div class="md:w-1/4 mb-4 md:mb-0">
                <img src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29zdHVtZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-48 object-cover rounded-lg">
              </div>
              <div class="md:w-3/4 md:pl-6">
                <h4 class="text-lg font-semibold text-gray-800">Superhero Costume</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                  <div>
                    <p class="text-sm text-gray-500">Size: L</p>
                    <p class="text-sm text-gray-500">Rental Period: 5 days</p>
                    <p class="text-sm text-gray-500">Price: $35.00/day</p>
                  </div>
                  <div>
                    <p class="text-sm text-gray-500">Rental Date: Mar 15, 2023</p>
                    <p class="text-sm text-gray-500">Return Date: Mar 20, 2023</p>
                    <p class="text-sm font-medium text-gray-800">Total: $175.00</p>
                  </div>
                </div>
                <div class="mt-4">
                  <div class="flex items-center">
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                      <div class="bg-primary-600 h-2.5 rounded-full" style="width: 60%"></div>
                    </div>
                    <span class="ml-4 text-sm text-gray-500">3 days left</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Booking Card 2 -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
          <div class="p-6 border-b">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="flex flex-col mb-4 md:mb-0">
                <div class="flex items-center">
                  <h3 class="text-lg font-semibold text-gray-800">Booking #1233</h3>
                  <span class="ml-4 px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                </div>
                <p class="text-sm text-gray-500 mt-1">Booked on March 12, 2023</p>
              </div>
              <div class="flex items-center space-x-2">
                <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition-colors">
                  Extend Rental
                </button>
                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-100 transition-colors">
                  Return
                </button>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex flex-col md:flex-row">
              <div class="md:w-1/4 mb-4 md:mb-0">
                <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-48 object-cover rounded-lg">
              </div>
              <div class="md:w-3/4 md:pl-6">
                <h4 class="text-lg font-semibold text-gray-800">Vampire Costume</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                  <div>
                    <p class="text-sm text-gray-500">Size: M</p>
                    <p class="text-sm text-gray-500">Rental Period: 3 days</p>
                    <p class="text-sm text-gray-500">Price: $25.00/day</p>
                  </div>
                  <div>
                    <p class="text-sm text-gray-500">Rental Date: Mar 12, 2023</p>
                    <p class="text-sm text-gray-500">Return Date: Mar 15, 2023</p>
                    <p class="text-sm font-medium text-gray-800">Total: $75.00</p>
                  </div>
                </div>
                <div class="mt-4">
                  <div class="flex items-center">
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                      <div class="bg-primary-600 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                    <span class="ml-4 text-sm text-gray-500">1 day left</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Booking Card 3 -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
          <div class="p-6 border-b">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="flex flex-col mb-4 md:mb-0">
                <div class="flex items-center">
                  <h3 class="text-lg font-semibold text-gray-800">Booking #1232</h3>
                  <span class="ml-4 px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending Return</span>
                </div>
                <p class="text-sm text-gray-500 mt-1">Booked on March 10, 2023</p>
              </div>
              <div class="flex items-center space-x-2">
                <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 transition-colors">
                  Extend Rental
                </button>
                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-100 transition-colors">
                  Return
                </button>
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex flex-col md:flex-row">
              <div class="md:w-1/4 mb-4 md:mb-0">
                <img src="https://images.unsplash.com/photo-1506364180601-180da27fe1b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-48 object-cover rounded-lg">
              </div>
              <div class="md:w-3/4 md:pl-6">
                <h4 class="text-lg font-semibold text-gray-800">Pirate Costume</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                  <div>
                    <p class="text-sm text-gray-500">Size: M</p>
                    <p class="text-sm text-gray-500">Rental Period: 2 days</p>
                    <p class="text-sm text-gray-500">Price: $28.00/day</p>
                  </div>
                  <div>
                    <p class="text-sm text-gray-500">Rental Date: Mar 10, 2023</p>
                    <p class="text-sm text-gray-500">Return Date: Mar 12, 2023</p>
                    <p class="text-sm font-medium text-gray-800">Total: $56.00</p>
                  </div>
                </div>
                <div class="mt-4">
                  <div class="flex items-center">
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                      <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 100%"></div>
                    </div>
                    <span class="ml-4 text-sm text-yellow-600">Overdue by 1 day</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
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

