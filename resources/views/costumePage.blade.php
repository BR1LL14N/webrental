<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Costumes | Costume Rental</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
          <a href="dashboard.html" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="costumes.html" class="flex items-center space-x-3 p-2 rounded-lg bg-primary-50 text-primary-700">
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
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Costume Card 1 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Vampire Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(4.5)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">Premium quality vampire costume with cape, vest, and accessories.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$25.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: S, M, L, XL</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Costume Card 2 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Princess Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(4.0)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">Elegant princess costume with tiara, gloves, and beautiful gown.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$30.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: S, M, L</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Costume Card 3 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1516126491303-6f64aa6cfc5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Zombie Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(3.5)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">Scary zombie costume with realistic makeup kit and torn clothes.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$22.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: M, L, XL</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Costume Card 4 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1603195557368-402549c5adc4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Clown Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(4.0)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">Colorful clown costume with wig, nose, and oversized shoes.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$20.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: S, M, L</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Costume Card 5 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29zdHVtZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Superhero Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(5.0)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">High-quality superhero costume with cape and mask.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$35.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: S, M, L, XL</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Costume Card 6 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1506364180601-180da27fe1b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Pirate Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(4.0)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">Complete pirate costume with hat, eye patch, and sword.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$28.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: S, M, L</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Costume Card 7 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1509248961158-e54f6934749c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Witch Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(3.5)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">Classic witch costume with hat, broom, and dress.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$24.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: S, M, L</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Costume Card 8 -->
        <div class="bg-white rounded-lg border hover:shadow-md transition-shadow">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhhbGxvd2VlbiUyMGNvc3R1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Costume" class="w-full h-64 object-cover rounded-t-lg">
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Available</span>
          </div>
          <div class="p-4">
            <h4 class="text-gray-900 font-semibold">Ninja Costume</h4>
            <div class="flex items-center mt-1">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <span class="text-gray-500 text-sm ml-1">(4.0)</span>
            </div>
            <p class="text-gray-500 text-sm mt-2">Stealthy ninja costume with mask, sword, and throwing stars.</p>
            <div class="mt-2 flex items-center justify-between">
              <div>
                <span class="text-primary-600 font-bold">$26.00</span>
                <span class="text-gray-500 text-sm">/day</span>
              </div>
              <span class="text-sm text-gray-500">Sizes: S, M, L, XL</span>
            </div>
            <div class="mt-4 flex space-x-2">
              <button class="flex-1 bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">Rent Now</button>
              <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-md hover:bg-gray-100">
                <i class="far fa-heart text-gray-500"></i>
              </button>
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

