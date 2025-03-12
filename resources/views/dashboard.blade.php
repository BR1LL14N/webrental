<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CostumeRent - Premium Costume Rental</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            secondary: {
              50: '#fdf2f8',
              100: '#fce7f3',
              200: '#fbcfe8',
              300: '#f9a8d4',
              400: '#f472b6',
              500: '#ec4899',
              600: '#db2777',
              700: '#be185d',
              800: '#9d174d',
              900: '#831843',
            },
          },
          backgroundImage: {
            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
          }
        }
      }
    }
  </script>
  <style>
    .hero-gradient {
      background: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #ec4899 100%);
    }
    .card-gradient {
      background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
    }
  </style>
</head>
<body class="bg-gray-50">
  {{-- NAVBAR KANG --}}
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <div class="hero min-h-[70vh] hero-gradient text-white">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Premium Costume Rentals</h1>
        <p class="py-6">Find the perfect costume for your next event. From classic to contemporary, we have costumes for every occasion.</p>
        <div class="flex gap-4 justify-center">
          <button class="btn bg-white text-primary-700 hover:bg-gray-100 border-none">Browse Costumes</button>
          <button class="btn btn-outline text-white hover:bg-white hover:text-primary-700">How It Works</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Featured Costumes -->
  <div class="container mx-auto py-16 px-4">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-3xl font-bold text-gray-800">Available Costumes</h2>
      <a href="#" class="btn btn-ghost text-primary-600">View All <i class="fas fa-arrow-right ml-2"></i></a>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      <!-- Costume Card 1 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
        <figure><img src="https://picsum.photos/id/64/600/400" alt="Superhero Costume" class="h-64 w-full object-cover" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Superhero Costume
            <div class="badge badge-secondary">NEW</div>
          </h2>
          <p>Perfect for themed parties and events. High-quality material.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary-600">$45/day</div>
            <div class="badge badge-outline text-green-600 border-green-600">Available</div>
          </div>
          <div class="card-actions justify-end mt-4">
            <button class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
      
      <!-- Costume Card 2 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
        <figure><img src="https://picsum.photos/id/65/600/400" alt="Victorian Era Dress" class="h-64 w-full object-cover" /></figure>
        <div class="card-body">
          <h2 class="card-title">Victorian Era Dress</h2>
          <p>Elegant Victorian-style dress, perfect for historical events.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary-600">$60/day</div>
            <div class="badge badge-outline text-green-600 border-green-600">Available</div>
          </div>
          <div class="card-actions justify-end mt-4">
            <button class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
      
      <!-- Costume Card 3 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
        <figure><img src="https://picsum.photos/id/68/600/400" alt="Pirate Costume" class="h-64 w-full object-cover" /></figure>
        <div class="card-body">
          <h2 class="card-title">Pirate Costume</h2>
          <p>Complete pirate outfit with accessories. Ahoy, matey!</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary-600">$40/day</div>
            <div class="badge badge-outline text-green-600 border-green-600">Available</div>
          </div>
          <div class="card-actions justify-end mt-4">
            <button class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
      
      <!-- Costume Card 4 -->
      <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
        <figure><img src="https://picsum.photos/id/76/600/400" alt="Sci-Fi Outfit" class="h-64 w-full object-cover" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            Sci-Fi Outfit
            <div class="badge badge-secondary">NEW</div>
          </h2>
          <p>Futuristic costume for sci-fi enthusiasts and conventions.</p>
          <div class="flex justify-between items-center mt-4">
            <div class="text-xl font-bold text-primary-600">$55/day</div>
            <div class="badge badge-outline text-green-600 border-green-600">Available</div>
          </div>
          <div class="card-actions justify-end mt-4">
            <button class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Categories Section -->
  <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-white text-center mb-12">Popular Categories</h2>
      
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        <div class="card card-gradient backdrop-blur-sm border border-white/10 hover:scale-105 transition-all duration-300">
          <div class="card-body items-center text-center text-white">
            <i class="fas fa-mask text-4xl mb-2"></i>
            <h3 class="card-title text-lg">Superheroes</h3>
          </div>
        </div>
        
        <div class="card card-gradient backdrop-blur-sm border border-white/10 hover:scale-105 transition-all duration-300">
          <div class="card-body items-center text-center text-white">
            <i class="fas fa-crown text-4xl mb-2"></i>
            <h3 class="card-title text-lg">Historical</h3>
          </div>
        </div>
        
        <div class="card card-gradient backdrop-blur-sm border border-white/10 hover:scale-105 transition-all duration-300">
          <div class="card-body items-center text-center text-white">
            <i class="fas fa-ghost text-4xl mb-2"></i>
            <h3 class="card-title text-lg">Halloween</h3>
          </div>
        </div>
        
        <div class="card card-gradient backdrop-blur-sm border border-white/10 hover:scale-105 transition-all duration-300">
          <div class="card-body items-center text-center text-white">
            <i class="fas fa-theater-masks text-4xl mb-2"></i>
            <h3 class="card-title text-lg">Theatrical</h3>
          </div>
        </div>
        
        <div class="card card-gradient backdrop-blur-sm border border-white/10 hover:scale-105 transition-all duration-300">
          <div class="card-body items-center text-center text-white">
            <i class="fas fa-hat-wizard text-4xl mb-2"></i>
            <h3 class="card-title text-lg">Fantasy</h3>
          </div>
        </div>
        
        <div class="card card-gradient backdrop-blur-sm border border-white/10 hover:scale-105 transition-all duration-300">
          <div class="card-body items-center text-center text-white">
            <i class="fas fa-rocket text-4xl mb-2"></i>
            <h3 class="card-title text-lg">Sci-Fi</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- How It Works -->
  <div class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">How It Works</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="card bg-base-100 shadow-xl">
        <div class="card-body items-center text-center">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-2xl font-bold mb-4">1</div>
          <h3 class="card-title text-xl">Browse & Select</h3>
          <p>Browse our extensive collection and select the costume you love.</p>
        </div>
      </div>
      
      <div class="card bg-base-100 shadow-xl">
        <div class="card-body items-center text-center">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-2xl font-bold mb-4">2</div>
          <h3 class="card-title text-xl">Book & Pay</h3>
          <p>Reserve your costume for your desired dates and complete payment.</p>
        </div>
      </div>
      
      <div class="card bg-base-100 shadow-xl">
        <div class="card-body items-center text-center">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-2xl font-bold mb-4">3</div>
          <h3 class="card-title text-xl">Pickup & Return</h3>
          <p>Pick up your costume on the scheduled date and return after use.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">What Our Customers Say</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="card bg-white shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/adventurer/svg?seed=John" />
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
            <p>"The superhero costume I rented was perfect for my themed party. Great quality and service!"</p>
          </div>
        </div>
        
        <div class="card bg-white shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/adventurer/svg?seed=Sarah" />
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
            <p>"I was impressed by the quality of the Victorian dress. It fit perfectly and looked authentic."</p>
          </div>
        </div>
        
        <div class="card bg-white shadow-xl">
          <div class="card-body">
            <div class="flex items-center mb-4">
              <div class="avatar">
                <div class="w-12 rounded-full">
                  <img src="https://api.dicebear.com/6.x/adventurer/svg?seed=Michael" />
                </div>
              </div>
              <div class="ml-4">
                <h3 class="font-bold">Michael Brown</h3>
                <div class="rating rating-sm">
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                  <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                </div>
              </div>
            </div>
            <p>"The booking process was smooth and the pirate costume was a hit at our event. Will definitely rent again!"</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="container mx-auto py-16 px-4">
    <div class="card bg-base-100 shadow-xl">
      <div class="card-body text-center">
        <h2 class="text-2xl font-bold mb-4">Subscribe to Our Newsletter</h2>
        <p class="mb-6">Stay updated with our newest costume additions and special offers.</p>
        <div class="flex flex-col md:flex-row gap-4 max-w-md mx-auto">
          <input type="email" placeholder="Your email address" class="input input-bordered w-full" />
          <button class="btn btn-primary">Subscribe</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer p-10 bg-neutral text-neutral-content">
    <div>
      <span class="footer-title">Services</span> 
      <a class="link link-hover">Costume Rental</a>
      <a class="link link-hover">Custom Costumes</a>
      <a class="link link-hover">Accessories</a>
      <a class="link link-hover">Delivery</a>
    </div> 
    <div>
      <span class="footer-title">Company</span> 
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Jobs</a>
      <a class="link link-hover">Press kit</a>
    </div> 
    <div>
      <span class="footer-title">Legal</span> 
      <a class="link link-hover">Terms of use</a>
      <a class="link link-hover">Privacy policy</a>
      <a class="link link-hover">Cookie policy</a>
    </div>
    <div>
      <span class="footer-title">Social</span> 
      <div class="grid grid-flow-col gap-4">
        <a><i class="fab fa-twitter text-2xl"></i></a>
        <a><i class="fab fa-youtube text-2xl"></i></a>
        <a><i class="fab fa-facebook text-2xl"></i></a>
        <a><i class="fab fa-instagram text-2xl"></i></a>
      </div>
    </div>
  </footer>
  <footer class="footer footer-center p-4 bg-base-300 text-base-content">
    <div>
      <p>Copyright © 2023 - All rights reserved by CostumeRent</p>
    </div>
  </footer>
</body>
</html>