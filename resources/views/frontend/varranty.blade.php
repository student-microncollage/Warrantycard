@extends('components.main')
@section('content')


<section class="bg-gradient-to-r from-gray-500 to-teal-500 min-h-screen flex items-center justify-center p-6">
    @if (session('succes'))
        <div id="success-message">
            <div class="alert alert-danger">
                {{session('succes')}}
            </div> 
        </div>
    @endif 
    <div class="max-w-7xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 bg-black bg-opacity-20 backdrop-blur-md shadow-lg rounded-2xl p-8 border border-white border-opacity-30">
        
       

        <!-- Left Section (Form) -->
        <div>
           
            <h1 class="text-2xl font-semibold text-white text-center">Warranty Registration</h1>
            <p class="text-white text-opacity-80 text-sm text-center mb-6">Register your product to activate your warranty.</p>
            
            <form action="{{route('warentycard.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <!-- Full Name -->
                    <div>
                        <label class="block text-white font-medium">Full Name</label>
                        <input type="text" name="name" required placeholder="John Doe" 
                            class="input-field rounded-lg py-2">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-white font-medium">Email Address</label>
                        <input type="email" name="email" required placeholder="john@example.com" 
                            class="input-field rounded-lg py-2">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Phone -->
                    <div>
                        <label class="block text-white font-medium">Phone Number</label>
                        <input type="tel" name="phone" required placeholder="+1 555-123-4567"
                            class="input-field rounded-lg py-2">
                    </div>

                    <!-- City -->
                    <div>
                        <label class="block text-white font-medium">City</label>
                        <input type="text" name="city" required placeholder="New York"
                            class="input-field rounded-lg py-2">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Product Model -->
                    <div>
                        <label class="block text-white font-medium">State</label>
                        <input type="text" name="state" required placeholder="XYZ-1234"
                            class="input-field rounded-lg py-2">
                    </div>

                    <!-- Serial Number -->
                    <div>
                        <label class="block text-white font-medium">Product (SL Number)</label>
                        <input type="text" name="productsln" required placeholder="SN-ABC-987654"
                            class="input-field rounded-lg py-2">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Date of Purchase -->
                    <div>
                        <label class="block text-white font-medium">Date of Purchase</label>
                        <input type="date" name="purchase_date" required class="input-field rounded-lg py-2">
                    </div>

                    <!-- Purchase From -->
                    <div>
                        <label class="block text-white font-medium">Purchased From</label>
                        <input type="text" name="purchaseform" required placeholder="Best Buy, Walmart, etc."
                            class="input-field rounded-lg py-2">
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="mt-4 flex items-center space-x-2">
                    <input type="checkbox" id="terms" name="terms" required class="rounded-lg w-5 h-5 py-2 bg-white bg-opacity-30 border border-white border-opacity-30 focus:ring-2 focus:ring-teal-300">
                    <label for="terms" class="text-white text-sm">I agree to the <a href="#" class="underline text-teal-300">terms and conditions</a></label>
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
