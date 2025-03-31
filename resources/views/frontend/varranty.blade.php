@extends('components.main')
@section('content')

<section class="bg-gradient-to-r from-gray-600 to-teal-600 min-h-screen flex items-center justify-center p-4 sm:p-6">
    <div class="max-w-7xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 bg-black bg-opacity-20 backdrop-blur-md shadow-xl rounded-2xl p-6 sm:p-8 border border-white border-opacity-30">
        
        <!-- Left Section (Form) -->
        
            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        timer: 5000, // 5 सेकंड में ऑटो बंद होगा
                        showConfirmButton: false
                    });
                </script>
            @endif
        <div class="space-y-6">
            <!-- Form Header -->
            <div class="text-center">
                <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">Warranty Registration</h1>
                <p class="text-white text-opacity-80 text-sm sm:text-base">Register your product to activate your warranty coverage</p>
            </div>
            
            <!-- Registration Form -->
            <form action="{{ route('warentycard.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <!-- Personal Information Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-white font-medium mb-1">Full Name <span class="text-red-400">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all"
                               placeholder="name...">
                        @error('name')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-white font-medium mb-1">Email Address <span class="text-red-400">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all"
                               placeholder="email...">
                        @error('email')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Contact Information Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-white font-medium mb-1">Phone Number <span class="text-red-400">*</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all"
                               placeholder="+91....">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- City -->
                    <div>
                        <label for="city" class="block text-white font-medium mb-1">City <span class="text-red-400">*</span></label>
                        <input type="text" id="city" name="city" value="{{ old('city') }}" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all"
                               placeholder="city...">
                        @error('city')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Product Information Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- State -->
                    <div>
                        <label for="state" class="block text-white font-medium mb-1">State/Province <span class="text-red-400">*</span></label>
                        <input type="text" id="state" name="state" value="{{ old('state') }}" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all"
                               placeholder="state...">
                        @error('state')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Serial Number -->
                    <div>
                        <label for="productsln" class="block text-white font-medium mb-1">Product Serial Number <span class="text-red-400">*</span></label>
                        <input type="text" id="productsln" name="productsln" value="{{ old('productsln') }}" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all"
                               placeholder="product_no....">
                        @error('productsln')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Purchase Information Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Date of Purchase -->
                    <div>
                        <label for="purchase_date" class="block text-white font-medium mb-1">Purchase Date <span class="text-red-400">*</span></label>
                        <input type="date" id="purchase_date" name="purchase_date"
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all">
                        @error('purchase_date')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Purchase From -->
                    <div>
                        <label for="purchaseform" class="block text-white font-medium mb-1">Purchased From <span class="text-red-400">*</span></label>
                        <input type="text" id="purchaseform" name="purchaseform" value="{{ old('purchaseform') }}" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50 transition-all"
                               placeholder="purchaseform....">
                        @error('purchaseform')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="pt-2">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox" 
                                   class="w-4 h-4 rounded bg-white bg-opacity-30 border border-white border-opacity-50 focus:ring-teal-300 focus:ring-2">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-medium text-white text-opacity-90">I agree to the <a href="#" class="text-teal-300 hover:underline">terms and conditions</a></label>
                            @error('terms')
                                <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full mt-6 px-6 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-semibold 
                               transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                    Register Warranty
                </button>
            </form>
        </div>

        <!-- Right Section (Image) -->
        <div class="hidden md:flex items-center justify-center relative">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-teal-500 to-gray-600 opacity-20 rounded-lg blur-sm"></div>
            
            <!-- Product Image -->
            <img src="{{ asset('assets/img/front/warranty.jpg') }}" alt="Warranty Registration" 
                 class="relative rounded-lg shadow-lg w-full h-full object-cover max-h-[600px]">
            
            <!-- Warranty Info Box -->
            <div class="absolute bottom-6 left-6 right-6 bg-black bg-opacity-40 backdrop-blur-sm p-4 rounded-lg border border-white border-opacity-20">
                <h3 class="text-white font-bold text-lg mb-1">Warranty Benefits</h3>
                <ul class="text-white text-opacity-90 text-sm space-y-1">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Free repairs for manufacturing defects
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Priority customer support
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Extended coverage options
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection