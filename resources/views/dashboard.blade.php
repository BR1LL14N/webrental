<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Costume Rental</title>
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- @vite('resources/css/app.css') --}}
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
  <div class="fixed inset-y-0 left-0 bg-white w-64 shadow-lg transform transition-transform duration-300 lg:translate-x-0 -translate-x-full" id="sidebar">
    <div class="flex items-center justify-between p-4 border-b">
      <div class="flex items-center space-x-2">
        <span class="text-primary-600 text-2xl"><i class="fas fa-mask"></i></span>
        <h1 class="text-xl font-bold">CostumeRent</h1>
      </div>
      <button class="lg:hidden text-gray-500 hover:text-gray-700" onclick="toggleSidebar()">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <nav class="p-4">
      <ul class="space-y-2">
        <li>
          <a href="dashboard.html" class="flex items-center space-x-3 p-2 rounded-lg bg-primary-50 text-primary-700">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="costumes.html" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-tshirt"></i>
            <span>Costumes</span>
          </a>
        </li>
        <li>
          <a href="my-bookings.html" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-calendar-check"></i>
            <span>My Bookings</span>
          </a>
        </li>
        <li>
          <a href="rental-history.html" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-history"></i>
            <span>Rental History</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

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
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-500">Active Rentals</p>
              <h3 class="text-2xl font-bold text-gray-800">2</h3>
            </div>
            <div class="h-12 w-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
              <i class="fas fa-tshirt"></i>
            </div>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-500">Pending Returns</p>
              <h3 class="text-2xl font-bold text-gray-800">1</h3>
            </div>
            <div class="h-12 w-12 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600">
              <i class="fas fa-clock"></i>
            </div>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-500">Total Rentals</p>
              <h3 class="text-2xl font-bold text-gray-800">12</h3>
            </div>
            <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
              <i class="fas fa-check-circle"></i>
            </div>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-500">Loyalty Points</p>
              <h3 class="text-2xl font-bold text-gray-800">250</h3>
            </div>
            <div class="h-12 w-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600">
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Recent Bookings -->
      <div class="bg-white rounded-lg shadow mb-8">
        <div class="p-6 border-b">
          <h3 class="text-lg font-semibold text-gray-800">Recent Bookings</h3>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Costume</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rental Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Return Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="h-10 w-10 flex-shrink-0">
                      <img class="h-10 w-10 rounded-md object-cover" src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29zdHVtZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Superhero Costume">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">Superhero Costume</div>
                      <div class="text-sm text-gray-500">Size: L</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 20, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <a href="#" class="text-primary-600 hover:text-primary-900">View Details</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="h-10 w-10 flex-shrink-0">
                      <img class="h-10 w-10 rounded-md object-cover" src="https://images.unsplash.com/photo-1506364180601-180da27fe1b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Pirate Costume">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">Pirate Costume</div>
                      <div class="text-sm text-gray-500">Size: M</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 10, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 12, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending Return</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <a href="#" class="text-primary-600 hover:text-primary-900">View Details</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="h-10 w-10 flex-shrink-0">
                      <img class="h-10 w-10 rounded-md object-cover" src="https://images.unsplash.com/photo-1509248961158-e54f6934749c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Witch Costume">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">Witch Costume</div>
                      <div class="text-sm text-gray-500">Size: S</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Feb 28, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 5, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Returned</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <a href="#" class="text-primary-600 hover:text-primary-900">View Details</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="p-4 border-t">
          <a href="my-bookings.html" class="text-primary-600 hover:text-primary-900 text-sm font-medium">View all bookings</a>
        </div>
      </div>
      
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
          <a href="costumes.html" class="text-primary-600 hover:text-primary-900 text-sm font-medium">Browse all costumes</a>
        </div>
      </div>
    </main>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      if (sidebar.classList.contains('-translate-x-full')) {
        sidebar.classList.remove('-translate-x-full');
      } else {
        sidebar.classList.add('-translate-x-full');
      }
    }
  </script>
</body>
</html>

