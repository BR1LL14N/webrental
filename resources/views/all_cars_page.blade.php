<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DriveLux - Available Cars</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
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
    </head>
<body>
    <x-navbar></x-navbar>

    <!-- Page Header -->
    <div class="bg-gradient-to-r from-primary to-secondary py-16">
        <div class="container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Premium Fleet</h1>
            <p class="text-lg max-w-2xl mx-auto">Browse our extensive collection of luxury, sports, and economy vehicles. Find the perfect car for your next adventure.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Filter and Search Section -->
        <div class="card bg-base-100 shadow-xl mb-12">
            <div class="card-body">
                <h2 class="card-title text-2xl mb-6">Find Your Ideal Vehicle</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Filter Controls -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Vehicle Type</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option value="">All Types</option>
                            <option>Economy</option>
                            <option>Sedan</option>
                            <option>SUV</option>
                            <option>Luxury</option>
                            <option>Sports</option>
                            <option>Convertible</option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Brand</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option value="">All Brands</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Mercedes</option>
                            <option>Tesla</option>
                            <option>Toyota</option>
                            <option>Lexus</option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Price Range</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option value="">Any Price</option>
                            <option>Under $50/day</option>
                            <option>$50-$100/day</option>
                            <option>$100-$200/day</option>
                            <option>$200-$300/day</option>
                            <option>$300+/day</option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Features</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option value="">Any Features</option>
                            <option>Automatic</option>
                            <option>Manual</option>
                            <option>GPS Navigation</option>
                            <option>Bluetooth</option>
                            <option>Sunroof</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Passengers</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option value="">Any Capacity</option>
                            <option>2 Passengers</option>
                            <option>4+ Passengers</option>
                            <option>5+ Passengers</option>
                            <option>7+ Passengers</option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Fuel Type</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option value="">Any Fuel Type</option>
                            <option>Gasoline</option>
                            <option>Diesel</option>
                            <option>Hybrid</option>
                            <option>Electric</option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Availability</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option value="">Any Time</option>
                            <option>Available Now</option>
                            <option>Available This Week</option>
                            <option>Available This Month</option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Sort By</span>
                        </label>
                        <select class="select select-bordered w-full">
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Popularity</option>
                            <option>Newest First</option>
                        </select>
                    </div>
                </div>
                
                <div class="mt-8">
                    <button class="btn btn-primary text-white w-full md:w-auto">Apply Filters</button>
                    <button class="btn btn-outline btn-primary mt-2 md:mt-0 md:ml-2 w-full md:w-auto">Reset Filters</button>
                </div>
            </div>
        </div>
        
        <!-- Results Count and View Toggle -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <p class="text-gray-600 mb-4 md:mb-0">Showing <span class="font-bold">24</span> of <span class="font-bold">48</span> vehicles</p>
            
            <div class="flex items-center">
                <span class="mr-2 text-gray-600">View:</span>
                <div class="btn-group">
                    <button class="btn btn-sm btn-active">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="btn btn-sm">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Cars Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Car 1 -->
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                <figure class="relative">
                    <img src="https://picsum.photos/id/1071/600/400" alt="Luxury Sedan" class="w-full h-64 object-cover" />
                    <div class="absolute top-4 right-4">
                        <div class="badge badge-accent text-white p-3">Premium</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-white font-bold">Available Now</span>
                            <div class="badge badge-success gap-2">
                                <i class="fas fa-check-circle"></i> In Stock
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="card-body">
                    <div class="flex justify-between items-start">
                        <h3 class="card-title text-xl">
                            Audi A6 Sedan
                        </h3>
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-primary">$89</span>
                            <span class="text-gray-500 ml-1">/day</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3 text-gray-600 my-3">
                        <span class="flex items-center gap-1"><i class="fas fa-user-friends"></i> 5</span>
                        <span class="flex items-center gap-1"><i class="fas fa-suitcase"></i> 3</span>
                        <span class="flex items-center gap-1"><i class="fas fa-gas-pump"></i> Hybrid</span>
                        <span class="flex items-center gap-1"><i class="fas fa-cog"></i> Auto</span>
                        <span class="flex items-center gap-1"><i class="fas fa-snowflake"></i> A/C</span>
                    </div>
                    
                    <p class="text-gray-600">Experience ultimate comfort with our premium sedan featuring leather seats and advanced entertainment system.</p>
                    
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary text-white">Book Now</button>
                        <button class="btn btn-outline btn-primary">Details</button>
                    </div>
                </div>
            </div>
            
            <!-- Car 2 -->
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                <figure class="relative">
                    <img src="https://picsum.photos/id/1072/600/400" alt="SUV" class="w-full h-64 object-cover" />
                    <div class="absolute top-4 right-4">
                        <div class="badge badge-secondary text-white p-3">Popular</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-white font-bold">Available Now</span>
                            <div class="badge badge-success gap-2">
                                <i class="fas fa-check-circle"></i> In Stock
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="card-body">
                    <div class="flex justify-between items-start">
                        <h3 class="card-title text-xl">
                            BMW X5 SUV
                        </h3>
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-primary">$129</span>
                            <span class="text-gray-500 ml-1">/day</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3 text-gray-600 my-3">
                        <span class="flex items-center gap-1"><i class="fas fa-user-friends"></i> 7</span>
                        <span class="flex items-center gap-1"><i class="fas fa-suitcase"></i> 5</span>
                        <span class="flex items-center gap-1"><i class="fas fa-gas-pump"></i> Diesel</span>
                        <span class="flex items-center gap-1"><i class="fas fa-cog"></i> Auto</span>
                        <span class="flex items-center gap-1"><i class="fas fa-snowflake"></i> A/C</span>
                    </div>
                    
                    <p class="text-gray-600">Perfect for family trips and adventures with spacious interior and powerful performance on any terrain.</p>
                    
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary text-white">Book Now</button>
                        <button class="btn btn-outline btn-primary">Details</button>
                    </div>
                </div>
            </div>
            
            <!-- Car 3 -->
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                <figure class="relative">
                    <img src="https://picsum.photos/id/1073/600/400" alt="Sports Car" class="w-full h-64 object-cover" />
                    <div class="absolute top-4 right-4">
                        <div class="badge badge-primary text-white p-3">Luxury</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-white font-bold">Limited Availability</span>
                            <div class="badge badge-warning gap-2">
                                <i class="fas fa-clock"></i> 1 Left
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="card-body">
                    <div class="flex justify-between items-start">
                        <h3 class="card-title text-xl">
                            Porsche 911 Convertible
                        </h3>
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-primary">$199</span>
                            <span class="text-gray-500 ml-1">/day</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3 text-gray-600 my-3">
                        <span class="flex items-center gap-1"><i class="fas fa-user-friends"></i> 2</span>
                        <span class="flex items-center gap-1"><i class="fas fa-suitcase"></i> 2</span>
                        <span class="flex items-center gap-1"><i class="fas fa-gas-pump"></i> Premium</span>
                        <span class="flex items-center gap-1"><i class="fas fa-cog"></i> Auto</span>
                        <span class="flex items-center gap-1"><i class="fas fa-snowflake"></i> A/C</span>
                    </div>
                    
                    <p class="text-gray-600">Feel the thrill of the road with our high-performance sports car featuring cutting-edge technology.</p>
                    
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary text-white">Book Now</button>
                        <button class="btn btn-outline btn-primary">Details</button>
                    </div>
                </div>
            </div>
            
            <!-- Car 4 -->
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                <figure class="relative">
                    <img src="https://picsum.photos/id/1074/600/400" alt="Electric Car" class="w-full h-64 object-cover" />
                    <div class="absolute top-4 right-4">
                        <div class="badge badge-secondary text-white p-3">Eco-Friendly</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-white font-bold">Available Now</span>
                            <div class="badge badge-success gap-2">
                                <i class="fas fa-check-circle"></i> In Stock
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="card-body">
                    <div class="flex justify-between items-start">
                        <h3 class="card-title text-xl">
                            Tesla Model 3
                        </h3>
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-primary">$109</span>
                            <span class="text-gray-500 ml-1">/day</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3 text-gray-600 my-3">
                        <span class="flex items-center gap-1"><i class="fas fa-user-friends"></i> 5</span>
                        <span class="flex items-center gap-1"><i class="fas fa-suitcase"></i> 2</span>
                        <span class="flex items-center gap-1"><i class="fas fa-bolt"></i> Electric</span>
                        <span class="flex items-center gap-1"><i class="fas fa-cog"></i> Auto</span>
                        <span class="flex items-center gap-1"><i class="fas fa-snowflake"></i> A/C</span>
                    </div>
                    
                    <p class="text-gray-600">Eco-friendly electric vehicle with cutting-edge technology, autopilot features, and zero emissions.</p>
                    
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary text-white">Book Now</button>
                        <button class="btn btn-outline btn-primary">Details</button>
                    </div>
                </div>
            </div>
            
            <!-- Car 5 -->
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                <figure class="relative">
                    <img src="https://picsum.photos/id/1075/600/400" alt="Luxury SUV" class="w-full h-64 object-cover" />
                    <div class="absolute top-4 right-4">
                        <div class="badge badge-accent text-white p-3">Premium</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-white font-bold">Available Tomorrow</span>
                            <div class="badge badge-info gap-2">
                                <i class="fas fa-calendar"></i> Soon
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="card-body">
                    <div class="flex justify-between items-start">
                        <h3 class="card-title text-xl">
                            Range Rover Sport
                        </h3>
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-primary">$159</span>
                            <span class="text-gray-500 ml-1">/day</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3 text-gray-600 my-3">
                        <span class="flex items-center gap-1"><i class="fas fa-user-friends"></i> 5</span>
                        <span class="flex items-center gap-1"><i class="fas fa-suitcase"></i> 4</span>
                        <span class="flex items-center gap-1"><i class="fas fa-gas-pump"></i> Diesel</span>
                        <span class="flex items-center gap-1"><i class="fas fa-cog"></i> Auto</span>
                        <span class="flex items-center gap-1"><i class="fas fa-snowflake"></i> A/C</span>
                    </div>
                    
                    <p class="text-gray-600">Luxury SUV with premium leather interior, advanced off-road capabilities, and superior comfort.</p>
                    
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary text-white">Book Now</button>
                        <button class="btn btn-outline btn-primary">Details</button>
                    </div>
                </div>
            </div>
            
            <!-- Car 6 -->
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                <figure class="relative">
                    <img src="https://picsum.photos/id/1076/600/400" alt="Economy Car" class="w-full h-64 object-cover" />
                    <div class="absolute top-4 right-4">
                        <div class="badge badge-success text-white p-3">Economy</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-white font-bold">Available Now</span>
                            <div class="badge badge-success gap-2">
                                <i class="fas fa-check-circle"></i> In Stock
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="card-body">
                    <div class="flex justify-between items-start">
                        <h3 class="card-title text-xl">
                            Toyota Corolla
                        </h3>
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-primary">$49</span>
                            <span class="text-gray-500 ml-1">/day</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3 text-gray-600 my-3">
                        <span class="flex items-center gap-1"><i class="fas fa-user-friends"></i> 5</span>
                        <span class="flex items-center gap-1"><i class="fas fa-suitcase"></i> 2</span>
                        <span class="flex items-center gap-1"><i class="fas fa-gas-pump"></i> Gasoline</span>
                        <span class="flex items-center gap-1"><i class="fas fa-cog"></i> Auto</span>
                        <span class="flex items-center gap-1"><i class="fas fa-snowflake"></i> A/C</span>
                    </div>
                    
                    <p class="text-gray-600">Reliable and fuel-efficient economy car, perfect for city driving and budget-conscious travelers.</p>
                    
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary text-white">Book Now</button>
                        <button class="btn btn-outline btn-primary">Details</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <div class="btn-group">
                <button class="btn btn-outline">«</button>
                <button class="btn btn-active">1</button>
                <button class="btn btn-outline">2</button>
                <button class="btn btn-outline">3</button>
                <button class="btn btn-outline">4</button>
                <button class="btn btn-outline">»</button>
            </div>
        </div>
    </div>
    
    <!-- Need Help Section -->
    <section class="py-16 bg-gradient-to-r from-primary to-secondary text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-8 md:mb-0 text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Need Help Finding Your Perfect Car?</h2>
                    <p class="text-lg max-w-xl">Our car rental experts are ready to assist you in choosing the right vehicle for your needs.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="btn btn-lg bg-white text-primary hover:bg-gray-200">
                        <i class="fas fa-phone-alt mr-2"></i> Call Us
                    </button>
                    <button class="btn btn-lg btn-outline border-white text-white hover:bg-white hover:text-primary">
                        <i class="fas fa-comment mr-2"></i> Live Chat
                    </button>
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