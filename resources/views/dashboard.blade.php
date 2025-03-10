<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DriveLuxe - Premium Car Rental</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: "#1e40af",
            secondary: "#f59e0b",
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50">
  {{-- NAVBAR KANG --}}
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <div class="hero min-h-[70vh] bg-base-200" style="background-image: url('https://picsum.photos/id/1071/1920/1080'); background-size: cover; background-position: center;">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">Premium Car Rental</h1>
        <p class="mb-5">Rent your dream car today with our premium selection of vehicles for any occasion.</p>
        <a href="#search-section" class="btn btn-primary text-white">Find Your Car</a>
      </div>
    </div>
  </div>

  <!-- Search and Filter Section -->
  <div id="search-section" class="container mx-auto px-4 py-8 -mt-16 relative z-10">
    <div class="card bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title text-2xl font-bold mb-4">Find Your Perfect Rental Car</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="form-control">
            <label class="label">
              <span class="label-text">Car Brand/Model</span>
            </label>
            <input type="text" placeholder="Search by brand or model" class="input input-bordered" />
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Car Type</span>
            </label>
            <select class="select select-bordered w-full">
              <option disabled selected>Select car type</option>
              <option>Sedan</option>
              <option>SUV</option>
              <option>Minivan</option>
              <option>APV</option>
              <option>Minibus</option>
              <option>Luxury</option>
            </select>
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Price Range</span>
            </label>
            <select class="select select-bordered w-full">
              <option disabled selected>Select price range</option>
              <option>Under $50/day</option>
              <option>$50-$100/day</option>
              <option>$100-$200/day</option>
              <option>$200+/day</option>
            </select>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
          <div class="form-control">
            <label class="label">
              <span class="label-text">Pick-up Date</span>
            </label>
            <input type="date" class="input input-bordered" />
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Return Date</span>
            </label>
            <input type="date" class="input input-bordered" />
          </div>
        </div>
        <div class="card-actions justify-end mt-4">
          <button class="btn btn-primary text-white">Search Cars</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Available Cars Section -->
  <div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-center">Available Cars</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Car Card 1 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
        <figure><img src="https://picsum.photos/id/1071/600/400" alt="Toyota Avanza" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Toyota Avanza
            <div class="badge badge-secondary">APV</div>
          </h2>
          <div class="flex items-center mt-2">
            <div class="badge badge-outline mr-2"><i class="fas fa-user mr-1"></i> 7 Seats</div>
            <div class="badge badge-outline mr-2"><i class="fas fa-gas-pump mr-1"></i> Petrol</div>
            <div class="badge badge-outline"><i class="fas fa-cog mr-1"></i> Automatic</div>
          </div>
          <p class="mt-2">Comfortable family car with spacious interior and fuel efficiency.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary">$45/day</div>
            <div class="card-actions">
              <button class="btn btn-primary text-white">Rent Now</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Car Card 2 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
        <figure><img src="https://picsum.photos/id/1072/600/400" alt="Honda CR-V" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Honda CR-V
            <div class="badge badge-secondary">SUV</div>
          </h2>
          <div class="flex items-center mt-2">
            <div class="badge badge-outline mr-2"><i class="fas fa-user mr-1"></i> 5 Seats</div>
            <div class="badge badge-outline mr-2"><i class="fas fa-gas-pump mr-1"></i> Petrol</div>
            <div class="badge badge-outline"><i class="fas fa-cog mr-1"></i> Automatic</div>
          </div>
          <p class="mt-2">Versatile SUV with excellent handling and premium features.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary">$65/day</div>
            <div class="card-actions">
              <button class="btn btn-primary text-white">Rent Now</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Car Card 3 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
        <figure><img src="https://picsum.photos/id/1073/600/400" alt="Mercedes-Benz E-Class" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Mercedes-Benz E-Class
            <div class="badge badge-secondary">Luxury</div>
          </h2>
          <div class="flex items-center mt-2">
            <div class="badge badge-outline mr-2"><i class="fas fa-user mr-1"></i> 5 Seats</div>
            <div class="badge badge-outline mr-2"><i class="fas fa-gas-pump mr-1"></i> Petrol</div>
            <div class="badge badge-outline"><i class="fas fa-cog mr-1"></i> Automatic</div>
          </div>
          <p class="mt-2">Elegant luxury sedan with premium comfort and advanced technology.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary">$120/day</div>
            <div class="card-actions">
              <button class="btn btn-primary text-white">Rent Now</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Car Card 4 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
        <figure><img src="https://picsum.photos/id/1074/600/400" alt="Toyota Hiace" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Toyota Hiace
            <div class="badge badge-secondary">Minibus</div>
          </h2>
          <div class="flex items-center mt-2">
            <div class="badge badge-outline mr-2"><i class="fas fa-user mr-1"></i> 12 Seats</div>
            <div class="badge badge-outline mr-2"><i class="fas fa-gas-pump mr-1"></i> Diesel</div>
            <div class="badge badge-outline"><i class="fas fa-cog mr-1"></i> Manual</div>
          </div>
          <p class="mt-2">Spacious minibus perfect for group travel and family outings.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary">$85/day</div>
            <div class="card-actions">
              <button class="btn btn-primary text-white">Rent Now</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Car Card 5 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
        <figure><img src="https://picsum.photos/id/1075/600/400" alt="Honda Civic" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Honda Civic
            <div class="badge badge-secondary">Sedan</div>
          </h2>
          <div class="flex items-center mt-2">
            <div class="badge badge-outline mr-2"><i class="fas fa-user mr-1"></i> 5 Seats</div>
            <div class="badge badge-outline mr-2"><i class="fas fa-gas-pump mr-1"></i> Petrol</div>
            <div class="badge badge-outline"><i class="fas fa-cog mr-1"></i> Automatic</div>
          </div>
          <p class="mt-2">Reliable and fuel-efficient sedan with modern styling.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary">$50/day</div>
            <div class="card-actions">
              <button class="btn btn-primary text-white">Rent Now</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Car Card 6 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow">
        <figure><img src="https://picsum.photos/id/1076/600/400" alt="Toyota Alphard" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Toyota Alphard
            <div class="badge badge-secondary">Minivan</div>
          </h2>
          <div class="flex items-center mt-2">
            <div class="badge badge-outline mr-2"><i class="fas fa-user mr-1"></i> 7 Seats</div>
            <div class="badge badge-outline mr-2"><i class="fas fa-gas-pump mr-1"></i> Petrol</div>
            <div class="badge badge-outline"><i class="fas fa-cog mr-1"></i> Automatic</div>
          </div>
          <p class="mt-2">Luxury minivan with premium comfort and spacious interior.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary">$110/day</div>
            <div class="card-actions">
              <button class="btn btn-primary text-white">Rent Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-center mt-8">
      <a href="cars.html" class="btn btn-outline btn-primary">View All Cars</a>
    </div>
  </div>

  <!-- How It Works Section -->
  <div class="bg-base-200 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12 text-center">How It Works</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body items-center text-center">
            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">1</div>
            <h3 class="card-title text-xl">Choose Your Car</h3>
            <p>Browse our selection of cars and choose the one that fits your needs.</p>
          </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body items-center text-center">
            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">2</div>
            <h3 class="card-title text-xl">Make a Reservation</h3>
            <p>Select your dates and complete the booking process with your preferred payment method.</p>
          </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body items-center text-center">
            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">3</div>
            <h3 class="card-title text-xl">Enjoy Your Ride</h3>
            <p>Pick up your car at the designated location and enjoy your journey!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Payment Options Section -->
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-8 text-center">Payment Options</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="card bg-base-100 shadow-md hover:shadow-xl transition-shadow">
        <div class="card-body items-center text-center">
          <i class="fas fa-credit-card text-4xl text-primary mb-2"></i>
          <h3 class="card-title text-lg">Credit Card</h3>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md hover:shadow-xl transition-shadow">
        <div class="card-body items-center text-center">
          <i class="fas fa-money-bill-wave text-4xl text-primary mb-2"></i>
          <h3 class="card-title text-lg">Bank Transfer</h3>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md hover:shadow-xl transition-shadow">
        <div class="card-body items-center text-center">
          <i class="fas fa-wallet text-4xl text-primary mb-2"></i>
          <h3 class="card-title text-lg">E-Wallet</h3>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md hover:shadow-xl transition-shadow">
        <div class="card-body items-center text-center">
          <i class="fas fa-money-check text-4xl text-primary mb-2"></i>
          <h3 class="card-title text-lg">Cash</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials Section -->
  <div class="bg-base-200 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-8 text-center">What Our Customers Say</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/avataaars/svg?seed=John" alt="John" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold">John Doe</h3>
                <div class="rating rating-sm">
                  <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-1" class="mask mask-star-2 bg-orange-400" checked />
                </div>
              </div>
            </div>
            <p>"The service was excellent! The car was in perfect condition and the rental process was smooth and hassle-free."</p>
          </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/avataaars/svg?seed=Sarah" alt="Sarah" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold">Sarah Johnson</h3>
                <div class="rating rating-sm">
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                </div>
              </div>
            </div>
            <p>"I rented a minivan for our family trip and it was perfect. Clean, comfortable, and the staff was very helpful."</p>
          </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/avataaars/svg?seed=Michael" alt="Michael" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold">Michael Chen</h3>
                <div class="rating rating-sm">
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                </div>
              </div>
            </div>
            <p>"The luxury car I rented exceeded my expectations. The online booking system was easy to use and the price was reasonable."</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer p-10 bg-neutral text-neutral-content">
    <div>
      <span class="footer-title">Services</span> 
      <a class="link link-hover">Car Rental</a>
      <a class="link link-hover">Long-term Rental</a>
      <a class="link link-hover">Airport Pickup</a>
      <a class="link link-hover">Chauffeur Service</a>
    </div> 
    <div>
      <span class="footer-title">Company</span> 
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Careers</a>
      <a class="link link-hover">Press kit</a>
    </div> 
    <div>
      <span class="footer-title">Legal</span> 
      <a class="link link-hover">Terms of use</a>
      <a class="link link-hover">Privacy policy</a>
      <a class="link link-hover">Cookie policy</a>
    </div>
    <div>
      <span class="footer-title">Newsletter</span> 
      <div class="form-control w-80">
        <label class="label">
          <span class="label-text text-neutral-content">Enter your email address</span>
        </label> 
        <div class="relative">
          <input type="text" placeholder="username@site.com" class="input input-bordered w-full pr-16" /> 
          <button class="btn btn-primary absolute top-0 right-0 rounded-l-none text-white">Subscribe</button>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer px-10 py-4 border-t bg-neutral text-neutral-content border-base-300">
    <div class="items-center grid-flow-col">
      <p>DriveLuxe Car Rental © 2023 - All rights reserved</p>
    </div> 
    <div class="md:place-self-center md:justify-self-end">
      <div class="grid grid-flow-col gap-4">
        <a><i class="fab fa-twitter text-2xl"></i></a>
        <a><i class="fab fa-youtube text-2xl"></i></a>
        <a><i class="fab fa-facebook text-2xl"></i></a>
        <a><i class="fab fa-instagram text-2xl"></i></a>
      </div>
    </div>
  </footer>
</body>
</html>