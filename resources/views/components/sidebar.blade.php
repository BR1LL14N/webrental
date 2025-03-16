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
          <a href="/" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/costume" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-tshirt"></i>
            <span>Costumes</span>
          </a>
        </li>
        <li>
          <a href="/booking" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-calendar-check"></i>
            <span>My Bookings</span>
          </a>
        </li>
        <li>
          <a href="/history" class="flex items-center space-x-3 p-2 rounded-lg text-gray-600 hover:bg-primary-50 hover:text-primary-700">
            <i class="fas fa-history"></i>
            <span>Rental History</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>