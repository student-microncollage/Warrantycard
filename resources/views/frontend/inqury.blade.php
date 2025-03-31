@extends('components.main')
@section('content')
<div class="min-h-screen flex items-center justify-center p-4 sm:p-6 bg-gradient-to-r from-[#0f2027] via-[#203a43] to-[#2c5364]">

    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 p-6 sm:p-10 rounded-2xl shadow-2xl bg-white bg-opacity-10 backdrop-blur-lg border border-white border-opacity-30">
        
        <!-- Form Section -->
                
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
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white mb-2 uppercase tracking-wider">Submit an Inquiry</h2>
                <p class="text-white text-opacity-80">We'll get back to you within 24 hours</p>
            </div>
            
            <form action="{{ route('userregister.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                
                <!-- Name and Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-white font-medium mb-2">Full Name </label>
                        <input type="text" id="name" name="name"  
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200"
                               placeholder="name....">
                        @error('name')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block text-white font-medium mb-2">Email Address </label>
                        <input type="email" id="email" name="email"
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200"
                               placeholder="email....">
                        @error('email')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Phone and City -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="mobile" class="block text-white font-medium mb-2">Phone Number </label>
                        <input type="tel" id="mobile" name="mobile"
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200"
                               placeholder="+91....">
                        @error('mobile')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="city" class="block text-white font-medium mb-2">City </label>
                        <input type="text" id="city" name="city"
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200"
                               placeholder="city.....">
                        @error('city')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- State and Address -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="state" class="block text-white font-medium mb-2">State </label>
                        <input type="text" id="state" name="state" 
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200"
                               placeholder="state...">
                        @error('state')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="address" class="block text-white font-medium mb-2">Address</label>
                        <textarea id="address" name="address" rows="2"
                               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                                      focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200"
                               placeholder="address..."></textarea>
                        @error('address')
                            <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Dealer Selection -->
                <div>
                    <label for="dealer_and_distributor" class="block text-white font-medium mb-2">Business Type </label>
                    <select id="dealer_and_distributor" name="dealer_and_distributor" 
                           class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-dark border border-white border-opacity-30 
                                  focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200 appearance-none">
                        <option value="" selected>Select your business type</option>
                        <option value="Dealer">Dealer</option>
                        <option value="Distributor">Distributor</option>
                    </select>
                    @error('dealer_and_distributor')
                        <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" 
                        class="w-full p-4 rounded-lg bg-gradient-to-r from-[#ff7e5f] to-[#feb47b] text-white font-semibold uppercase tracking-wide 
                               transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-95">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Submit Inquiry
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Image Section -->
        <div class="hidden md:flex items-center justify-center relative">
            <div class="absolute inset-0 bg-gradient-to-br from-[#ff7e5f] to-[#feb47b] opacity-20 rounded-lg blur-md"></div>
            <img src="{{ asset('assets/img/front/inqury.jpg') }}" alt="Inquiry Form" 
                 class="relative rounded-lg shadow-lg w-full max-w-md object-cover transition-transform duration-300 hover:scale-[1.02] z-10">
            
            <!-- Info Box on Image -->
            <div class="absolute bottom-6 left-6 right-6 bg-white bg-opacity-20 backdrop-blur-sm p-4 rounded-lg border border-white border-opacity-30 z-20">
                <h3 class="text-white font-bold text-lg mb-1">Need Help?</h3>
                <p class="text-white text-opacity-90 text-sm">Our team is available 24/7 to answer your questions and assist with your needs.</p>
            </div>
        </div>

    </div>

</div>
@endsection