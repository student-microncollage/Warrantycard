@extends('components.main')
@section('content')
<div class="min-h-screen flex items-center justify-center p-6 bg-gradient-to-r from-[#0f2027] via-[#203a43] to-[#2c5364]">

    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-6 p-10 rounded-2xl shadow-2xl bg-white bg-opacity-10 backdrop-blur-lg border border-white border-opacity-30">
        
        <!-- Form Section -->

        <div>
            @if (session('succes'))
                <div id="success-message">
                    <div class="alert alert-danger">
                        {{session('succes')}}
                    </div> 
                </div>
            @endif 
            <h2 class="text-center text-3xl font-bold text-white mb-6 uppercase tracking-wider">Submit an Inquiry</h2>
            
            <form action="{{route('userregister.store')}}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Full Name -->
                    <div>
                        <label class="block text-white font-medium">Full Name</label>
                        <input type="text" name="name" required class="input-field rounded-lg py-2" placeholder="Enter your full name">
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label class="block text-white font-medium">Email Address</label>
                        <input type="email" name="email" required class="input-field rounded-lg py-2" placeholder="Enter your email">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Phone Number -->
                    <div>
                        <label class="block text-white font-medium">Phone Number</label>
                        <input type="tel" name="mobile" required class="input-field rounded-lg py-2" placeholder="Enter your phone number">
                    </div>

                    <!-- City -->
                    <div>
                        <label class="block text-white font-medium">City</label>
                        <input type="text" name="city" required class="input-field rounded-lg py-2" placeholder="Enter your city">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- State -->
                    <div>
                        <label class="block text-white font-medium">State</label>
                        <input type="text" name="state" required class="input-field rounded-lg py-2" placeholder="Enter your state">
                    </div>

                    <!-- Address -->
                    <div>
                        <label class="block text-white font-medium">Address</label>
                        <textarea name="address" required class="input-field h-16 resize-none rounded-lg" placeholder="Enter your address"></textarea>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Dealer Name -->
                    <div>
                        <label class="block text-white font-medium">Dealer  & Distributor</label>
                        {{-- <input type="text" name="dealer" required class="input-field rounded-lg py-2" placeholder="Enter dealer name"> --}}
                        <select name="dealer_and_distributor" class="input-field rounded-lg py-2">
                            <option value="">Select Dealer or Distributor</option>
                            <option value="Dealer">Dealer</option>
                            <option value="Distributor">Distributor</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full p-3 rounded-lg bg-gradient-to-r from-[#ff7e5f] to-[#feb47b] text-white font-semibold uppercase tracking-wide transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl hover:scale-105">
                    Submit Inquiry
                </button>
            </form>
        </div>

        <!-- Image Section -->
        <div class="flex items-center justify-center">
            <img src="{{asset('assets/img/front/inqury.jpg')}}" alt="Inquiry Form" class="rounded-lg shadow-lg w-full max-w-[400px] transition-transform duration-300 hover:scale-105">
        </div>

    </div>

    <style>
        .input-field {
            @apply w-full p-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 
                   focus:outline-none focus:ring-2 focus:ring-[#ff7e5f] placeholder-white placeholder-opacity-70 transition-all duration-200;
        }
    </style>

</div>
@endsection