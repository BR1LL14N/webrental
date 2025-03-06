<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DriveLux - Premium Car Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script>
            tailwind.config = {
            theme: {
                extend: {
                colors: {
                    primary: '#4F46E5',
                    secondary: '#10B981',
                    accent: '#F59E0B',
                    dark: '#1F2937'
                }
                }
            }
            }
        </script>

        <!-- Style -->
    </head>
<body>
    {{-- Bagian Navbar --}}
  <x-navbar></x-navbar>

<!-- Hero Section -->
<div class="hero min-h-screen" style="background-image: url('https://picsum.photos/id/1072/1600/900');">
    <div class="hero-overlay bg-gradient-to-r from-primary/80 to-secondary/80"></div>
    <div class="hero-content text-center text-white">
        <div class="max-w-md md:max-w-2xl">
            <h1 class="mb-5 text-5xl md:text-6xl font-bold">Premium Car Rental Experience</h1>
            <p class="mb-8 text-lg">Drive your dreams with our luxury fleet. Affordable rates, exceptional service, and unforgettable journeys await.</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
            <button class="btn btn-accent btn-lg text-white">Browse Cars</button>
            <button class="btn btn-outline btn-lg text-white border-white hover:bg-white hover:text-primary">Learn More</button>
        </div>
    </div>
    </div>
</div>

<!-- Search Form -->
<div class="container mx-auto px-4 -mt-24 relative z-10">
    <div class="card bg-white shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-2xl text-center w-full mb-4">Find Your Perfect Ride</h2>
            <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="form-control">
                <label class="label">
            <span class="label-text">Pick-up Location</span>
            </label>
            <select class="select select-bordered w-full">
            <option disabled selected>Select location</option>
            <option>Airport</option>
            <option>Downtown</option>
            <option>Hotel Zone</option>
            <option>Business District</option>
            </select>
            </div>
            <div class="form-control">
            <label class="label">
                <span class="label-text">Pick-up Date</span>
            </label>
            <input type="date" class="input input-bordered w-full" />
            </div>
            <div class="form-control">
            <label class="label">
                <span class="label-text">Return Date</span>
            </label>
            <input type="date" class="input input-bordered w-full" />
            </div>
        <div class="form-control">
            <label class="label">
                <span class="label-text">Car Type</span>
            </label>
            <select class="select select-bordered w-full">
                <option disabled selected>Select car type</option>
                <option>Economy</option>
                <option>Sedan</option>
                <option>SUV</option>
                <option>Luxury</option>
                <option>Sports</option>
            </select>
        </div>
        <div class="form-control md:col-span-2 lg:col-span-4">
            <button class="btn btn-primary text-white">Search Available Cars</button>
        </div>
        </form>
    </div>
    </div>
</div>

<!-- Featured Cars -->
<section class="py-16 bg-base-100">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold mb-4 bg-gradient-to-r from-primary to-secondary inline-block text-transparent bg-clip-text">Featured Vehicles</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Choose from our wide range of premium vehicles to make your journey comfortable and stylish.</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Car 1 -->
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
          <figure><img src="https://picsum.photos/id/1071/600/400" alt="Luxury Sedan" class="w-full h-64 object-cover" /></figure>
          <div class="card-body">
            <h3 class="card-title text-xl">
              Luxury Sedan
              <div class="badge badge-accent text-white">Premium</div>
            </h3>
            <div class="flex items-center gap-2 text-gray-600 mb-2">
              <i class="fas fa-user-friends"></i> 5 Seats
              <i class="fas fa-suitcase ml-4"></i> 3 Bags
              <i class="fas fa-gas-pump ml-4"></i> Hybrid
            </div>
            <p>Experience ultimate comfort with our premium sedan featuring leather seats and advanced entertainment system.</p>
            <div class="flex items-baseline mt-4">
              <span class="text-2xl font-bold text-primary">$89</span>
              <span class="text-gray-500 ml-1">/day</span>
            </div>
            <div class="card-actions justify-end mt-4">
              <button class="btn btn-primary text-white">Book Now</button>
              <button class="btn btn-outline btn-primary">Details</button>
            </div>
          </div>
        </div>
        
        <!-- Car 2 -->
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
          <figure><img src="https://picsum.photos/id/1072/600/400" alt="SUV" class="w-full h-64 object-cover" /></figure>
          <div class="card-body">
            <h3 class="card-title text-xl">
              Premium SUV
              <div class="badge badge-secondary text-white">Popular</div>
            </h3>
            <div class="flex items-center gap-2 text-gray-600 mb-2">
              <i class="fas fa-user-friends"></i> 7 Seats
              <i class="fas fa-suitcase ml-4"></i> 5 Bags
              <i class="fas fa-gas-pump ml-4"></i> Diesel
            </div>
            <p>Perfect for family trips and adventures with spacious interior and powerful performance on any terrain.</p>
            <div class="flex items-baseline mt-4">
              <span class="text-2xl font-bold text-primary">$129</span>
              <span class="text-gray-500 ml-1">/day</span>
            </div>
            <div class="card-actions justify-end mt-4">
              <button class="btn btn-primary text-white">Book Now</button>
              <button class="btn btn-outline btn-primary">Details</button>
            </div>
          </div>
        </div>
        
        <!-- Car 3 -->
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
          <figure><img src="https://picsum.photos/id/1073/600/400" alt="Sports Car" class="w-full h-64 object-cover" /></figure>
          <div class="card-body">
            <h3 class="card-title text-xl">
              Sports Convertible
              <div class="badge badge-primary text-white">Luxury</div>
            </h3>
            <div class="flex items-center gap-2 text-gray-600 mb-2">
              <i class="fas fa-user-friends"></i> 2 Seats
              <i class="fas fa-suitcase ml-4"></i> 2 Bags
              <i class="fas fa-gas-pump ml-4"></i> Premium
            </div>
            <p>Feel the thrill of the road with our high-performance sports car featuring cutting-edge technology.</p>
            <div class="flex items-baseline mt-4">
              <span class="text-2xl font-bold text-primary">$199</span>
              <span class="text-gray-500 ml-1">/day</span>
            </div>
            <div class="card-actions justify-end mt-4">
              <button class="btn btn-primary text-white">Book Now</button>
              <button class="btn btn-outline btn-primary">Details</button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-12">
        <button class="btn btn-outline btn-primary btn-lg">View All Vehicles</button>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-16 bg-gradient-to-r from-primary to-secondary text-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold mb-4">Why Choose DriveLux</h2>
        <p class="max-w-2xl mx-auto">We provide exceptional service and premium vehicles to ensure your journey is comfortable and memorable.</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Feature 1 -->
        <div class="card bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
          <div class="card-body items-center text-center">
            <div class="rounded-full bg-white text-primary p-4 mb-4">
              <i class="fas fa-car text-3xl"></i>
            </div>
            <h3 class="card-title text-xl">Premium Vehicles</h3>
            <p>Our fleet consists of the latest models with premium features for your comfort.</p>
          </div>
        </div>
        
        <!-- Feature 2 -->
        <div class="card bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
          <div class="card-body items-center text-center">
            <div class="rounded-full bg-white text-secondary p-4 mb-4">
              <i class="fas fa-dollar-sign text-3xl"></i>
            </div>
            <h3 class="card-title text-xl">Best Price Guarantee</h3>
            <p>We offer competitive rates with no hidden fees or charges.</p>
          </div>
        </div>
        
        <!-- Feature 3 -->
        <div class="card bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
          <div class="card-body items-center text-center">
            <div class="rounded-full bg-white text-accent p-4 mb-4">
              <i class="fas fa-headset text-3xl"></i>
            </div>
            <h3 class="card-title text-xl">24/7 Customer Support</h3>
            <p>Our dedicated team is available round the clock to assist you.</p>
          </div>
        </div>
        
        <!-- Feature 4 -->
        <div class="card bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
          <div class="card-body items-center text-center">
            <div class="rounded-full bg-white text-primary p-4 mb-4">
              <i class="fas fa-map-marker-alt text-3xl"></i>
            </div>
            <h3 class="card-title text-xl">Convenient Locations</h3>
            <p>Multiple pickup and drop-off locations for your convenience.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-16 bg-base-100">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold mb-4 bg-gradient-to-r from-primary to-secondary inline-block text-transparent bg-clip-text">Customer Testimonials</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Don't just take our word for it. See what our customers have to say about their experience with us.</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/avataaars/svg?seed=John" alt="Customer" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold">John Smith</h3>
                <div class="text-yellow-400">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
            <p>"The service was exceptional! The car was in perfect condition and the staff was very helpful. Will definitely use DriveLux again."</p>
          </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/avataaars/svg?seed=Sarah" alt="Customer" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold">Sarah Johnson</h3>
                <div class="text-yellow-400">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
              </div>
            </div>
            <p>"I rented an SUV for our family trip and it was perfect. The booking process was smooth and the car was delivered on time. Great experience!"</p>
          </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/avataaars/svg?seed=Michael" alt="Customer" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold">Michael Brown</h3>
                <div class="text-yellow-400">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
            <p>"I rented a luxury sedan for a business trip and was impressed with the quality and service. The car was clean, comfortable, and performed excellently."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-16 bg-gradient-to-r from-accent to-primary text-white">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="mb-8 md:mb-0 text-center md:text-left">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Hit the Road?</h2>
          <p class="text-lg max-w-xl">Book your dream car today and enjoy the journey with premium comfort and style.</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
          <button class="btn btn-lg bg-white text-primary hover:bg-gray-200">Book Now</button>
          <button class="btn btn-lg btn-outline border-white text-white hover:bg-white hover:text-primary">Contact Us</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
<footer class="footer p-10 bg-gray-900 text-white">
    <div>
      <span class="footer-title">Services</span> 
      <a class="link link-hover">Car Rental</a> 
      <a class="link link-hover">Airport Transfer</a> 
      <a class="link link-hover">Chauffeur Service</a> 
      <a class="link link-hover">Corporate Rental</a>
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
          <span class="label-text text-white">Enter your email address</span>
        </label> 
        <div class="relative">
          <input type="text" placeholder="username@site.com" class="input input-bordered w-full pr-16 text-gray-800" /> 
          <button class="btn btn-primary absolute top-0 right-0 rounded-l-none">Subscribe</button>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer px-10 py-4 border-t bg-gray-900 text-white border-base-300">
    <div class="items-center grid-flow-col">
      <span class="text-2xl font-bold">DriveLux</span>
    </div> 
    <div class="md:place-self-center md:justify-self-end">
      <div class="grid grid-flow-col gap-4">
        <a class="btn btn-ghost btn-circle"><i class="fab fa-twitter text-xl"></i></a>
        <a class="btn btn-ghost btn-circle"><i class="fab fa-youtube text-xl"></i></a>
        <a class="btn btn-ghost btn-circle"><i class="fab fa-facebook text-xl"></i></a>
        <a class="btn btn-ghost btn-circle"><i class="fab fa-instagram text-xl"></i></a>
      </div>
    </div>
  </footer>
    </body>
</html>
