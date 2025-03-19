<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile | Costume Rental</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">
  <!-- Sidebar -->
  <x-sidebar></x-sidebar>

  <!-- Main Content -->
  <div class="lg:ml-64 min-h-screen transition-all duration-300">
    <!-- Top Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-sm">
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
          {{-- <div class="flex items-center space-x-2">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile" class="h-8 w-8 rounded-full object-cover">
            <span class="text-sm font-medium text-gray-700">John Doe</span>
          </div> --}}
        </div>
      </div>
    </header>

    <!-- User Profile Content -->
    <main class="p-6">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">My Profile</h2>
      
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Profile Summary Card -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
          <div class="p-6 text-center border-b">
            <div class="relative mx-auto w-32 h-32 mb-4">
              <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile" class="rounded-full w-full h-full object-cover border-4 border-white shadow">
              <button class="absolute bottom-0 right-0 bg-primary-600 text-white rounded-full p-2 shadow-lg hover:bg-primary-700 transition-colors">
                <i class="fas fa-camera"></i>
              </button>
            </div>
            <h3 class="text-xl font-bold text-gray-800">John Doe</h3>
            <p class="text-gray-500">Member since January 2023</p>
            <div class="mt-4 flex justify-center">
              <div class="bg-primary-50 text-primary-700 px-3 py-1 rounded-full text-sm font-medium">
                <i class="fas fa-crown mr-1"></i> Premium Member
              </div>
            </div>
          </div>
          <div class="p-6">
            <div class="space-y-4">
              <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-3">
                  <i class="fas fa-envelope"></i>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Email</p>
                  <p class="font-medium">john.doe@example.com</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-3">
                  <i class="fas fa-phone"></i>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Phone</p>
                  <p class="font-medium">+1 (555) 123-4567</p>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-3">
                  <i class="fas fa-star"></i>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Loyalty Points</p>
                  <p class="font-medium">250 points</p>
                </div>
              </div>
            </div>
            <div class="mt-6">
              <button class="w-full bg-primary-600 text-white py-2 rounded-md hover:bg-primary-700 transition-colors">
                Edit Profile
              </button>
            </div>
          </div>
        </div>
        
        <!-- Profile Details -->
        <div class="lg:col-span-2 space-y-6">
          <!-- Personal Information -->
          <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6 border-b flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-800">Personal Information</h3>
              <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                <i class="fas fa-pencil-alt mr-1"></i> Edit
              </button>
            </div>
            <div class="p-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">First Name</label>
                  <p class="font-medium">John</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">Last Name</label>
                  <p class="font-medium">Doe</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">Email Address</label>
                  <p class="font-medium">john.doe@example.com</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">Phone Number</label>
                  <p class="font-medium">+1 (555) 123-4567</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">Date of Birth</label>
                  <p class="font-medium">January 15, 1985</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">Gender</label>
                  <p class="font-medium">Male</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Address Information -->
          <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6 border-b flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-800">Address Information</h3>
              <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                <i class="fas fa-pencil-alt mr-1"></i> Edit
              </button>
            </div>
            <div class="p-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                  <label class="block text-sm font-medium text-gray-500 mb-1">Street Address</label>
                  <p class="font-medium">1234 Main Street, Apt 5B</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">City</label>
                  <p class="font-medium">New York</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">State</label>
                  <p class="font-medium">NY</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">Zip Code</label>
                  <p class="font-medium">10001</p>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-500 mb-1">Country</label>
                  <p class="font-medium">United States</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Payment Methods -->
          <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6 border-b flex justify-between items-center">
              <h3 class="text-lg font-semibold text-gray-800">Payment Methods</h3>
              <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                <i class="fas fa-plus mr-1"></i> Add New
              </button>
            </div>
            <div class="p-6">
              <div class="space-y-4">
                <div class="border rounded-lg p-4 flex items-center justify-between">
                  <div class="flex items-center">
                    <div class="w-12 h-8 bg-blue-600 rounded flex items-center justify-center text-white mr-4">
                      <i class="fab fa-cc-visa"></i>
                    </div>
                    <div>
                      <p class="font-medium">Visa ending in 4242</p>
                      <p class="text-sm text-gray-500">Expires 05/2025</p>
                    </div>
                  </div>
                  <div class="flex items-center space-x-2">
                    <span class="text-xs font-medium bg-green-100 text-green-800 px-2 py-1 rounded-full">Default</span>
                    <button class="text-gray-500 hover:text-gray-700">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>
                  </div>
                </div>
                <div class="border rounded-lg p-4 flex items-center justify-between">
                  <div class="flex items-center">
                    <div class="w-12 h-8 bg-red-600 rounded flex items-center justify-center text-white mr-4">
                      <i class="fab fa-cc-mastercard"></i>
                    </div>
                    <div>
                      <p class="font-medium">Mastercard ending in 8888</p>
                      <p class="text-sm text-gray-500">Expires 12/2024</p>
                    </div>
                  </div>
                  <div>
                    <button class="text-gray-500 hover:text-gray-700">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Preferences -->
          <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6 border-b">
              <h3 class="text-lg font-semibold text-gray-800">Preferences</h3>
            </div>
            <div class="p-6">
              <div class="space-y-6">
                <div>
                  <h4 class="font-medium mb-2">Notifications</h4>
                  <div class="space-y-2">
                    <div class="flex items-center justify-between">
                      <span class="text-gray-700">Email notifications</span>
                      <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                      </label>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-gray-700">SMS notifications</span>
                      <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                      </label>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-gray-700">Marketing emails</span>
                      <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                      </label>
                    </div>
                  </div>
                </div>
                <div>
                  <h4 class="font-medium mb-2">Costume Preferences</h4>
                  <div class="space-y-2">
                    <div>
                      <label class="block text-sm font-medium text-gray-500 mb-1">Preferred Size</label>
                      <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <option>Small (S)</option>
                        <option selected>Medium (M)</option>
                        <option>Large (L)</option>
                        <option>Extra Large (XL)</option>
                      </select>
                    </div>
                    <div>
                      <label class="block text-sm font-medium text-gray-500 mb-1">Favorite Categories</label>
                      <div class="flex flex-wrap gap-2 mt-2">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Superhero</span>
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Fantasy</span>
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Historical</span>
                        <button class="text-gray-500 hover:text-gray-700 text-xs font-medium">
                          <i class="fas fa-plus mr-1"></i> Add More
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Account Security -->
          <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-6 border-b">
              <h3 class="text-lg font-semibold text-gray-800">Account Security</h3>
            </div>
            <div class="p-6">
              <div class="space-y-6">
                <div>
                  <div class="flex justify-between items-center mb-2">
                    <h4 class="font-medium">Password</h4>
                    <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                      Change Password
                    </button>
                  </div>
                  <p class="text-gray-500 text-sm">Last changed 3 months ago</p>
                </div>
                <div>
                  <div class="flex justify-between items-center mb-2">
                    <h4 class="font-medium">Two-Factor Authentication</h4>
                    <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                      Enable
                    </button>
                  </div>
                  <p class="text-gray-500 text-sm">Add an extra layer of security to your account</p>
                </div>
                <div>
                  <div class="flex justify-between items-center mb-2">
                    <h4 class="font-medium">Login History</h4>
                    <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                      View All
                    </button>
                  </div>
                  <div class="border rounded-lg p-3">
                    <div class="flex justify-between items-center">
                      <div>
                        <p class="font-medium">Current Session</p>
                        <p class="text-sm text-gray-500">New York, United States • Chrome on Windows</p>
                      </div>
                      <span class="text-xs font-medium bg-green-100 text-green-800 px-2 py-1 rounded-full">Active</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Danger Zone -->
      <div class="mt-6 bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6 border-b">
          <h3 class="text-lg font-semibold text-red-600">Danger Zone</h3>
        </div>
        <div class="p-6">
          <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
              <h4 class="font-medium text-gray-800">Delete Account</h4>
              <p class="text-gray-500 text-sm mt-1">Once you delete your account, there is no going back. Please be certain.</p>
            </div>
            <button class="mt-4 md:mt-0 bg-white border border-red-500 text-red-600 px-4 py-2 rounded-md hover:bg-red-50 transition-colors">
              Delete Account
            </button>
          </div>
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

