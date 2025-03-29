@extends('components.main')
@section('content')


<section class="bg-gradient-to-r from-gray-500 to-teal-500 min-h-screen flex items-center justify-center p-6">
    <div class="max-w-7xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 bg-black bg-opacity-20 backdrop-blur-md shadow-lg rounded-2xl p-8 border border-white border-opacity-30">
        
       

        <!-- Left Section (Form) -->
        <div>
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
            <h1 class="text-2xl font-semibold text-white text-center">Warranty Registration</h1>
            <p class="text-white text-opacity-80 text-sm text-center mb-6">Register your product to activate your warranty.</p>
            
            <form action="{{route('warentycard.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <!-- Full Name -->
                    <div>
                        <label class="block text-white font-medium">Full Name</label>
                        <input type="text" name="name"  placeholder="name..." class="input-field rounded-lg py-2">
                        <p>
                            @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-white font-medium">Email Address</label>
                        <input type="email" name="email"  placeholder="xyz@example.com"  class="input-field rounded-lg py-2">
                            <p>
                                @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Phone -->
                    <div>
                        <label class="block text-white font-medium">Phone Number</label>
                        <input type="tel" name="phone"  placeholder="mobile...." class="input-field rounded-lg py-2">
                        <p>
                            @error('phone')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                    </div>

                    <!-- City -->
                    <div>
                        <label class="block text-white font-medium">City</label>
                        <input type="text" name="city"  placeholder="City..." class="input-field rounded-lg py-2">
                        <p>
                            @error('city')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Product Model -->
                    <div>
                        <label class="block text-white font-medium">State</label>
                        <input type="text" name="state"  placeholder="State..."
                            class="input-field rounded-lg py-2">
                            <p>
                                @error('state')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </p>
                    </div>

                    <!-- Serial Number -->
                    <div>
                        <label class="block text-white font-medium">Product (SL Number)</label>
                        <input type="text" name="productsln"  placeholder="product.sl.no..."
                            class="input-field rounded-lg py-2">
                            <p>
                                @error('productsln')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Date of Purchase -->
                    <div>
                        <label class="block text-white font-medium">Date of Purchase</label>
                        <input type="date" name="purchase_date"  class="input-field rounded-lg py-2">
                        <p>
                            @error('purchase_date')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                    </div>

                    <!-- Purchase From -->
                    <div>
                        <label class="block text-white font-medium">Purchased From</label>
                        <input type="text" name="purchaseform"  placeholder="purchase-form...."
                            class="input-field rounded-lg py-2">
                            <p>
                                @error('purchaseform')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </p>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="mt-4 flex items-center space-x-2">
                    <input type="checkbox" id="terms" name="terms"  class="rounded-lg w-5 h-5 py-2 bg-white bg-opacity-30 border border-white border-opacity-30 focus:ring-2 focus:ring-teal-300">
                    <label for="terms" class="text-white text-sm">I agree to the <a href="#" class="underline text-teal-300">terms and conditions</a></label>
                    <p>
                        @error('terms')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </p>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="rounded-lg  mt-4 w-full p-3 rounded-lg bg-[#14B7A5] text-white font-semibold hover:bg-teal-600 transition">
                    Register Warranty
                </button>

            </form>
        </div>

        <!-- Right Section (Image) -->
        <div class="flex items-center justify-center">
            <img src="{{asset('assets/img/front/warranty.jpg')}}" alt="Warranty Registration" class="rounded-lg shadow-md">
        </div>

    </div>

    <style>
        .input-field {
            @apply w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 
                   focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50;
        }
    </style>

</section>
@endsection
