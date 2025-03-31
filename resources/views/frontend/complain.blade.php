@extends('components.main')
@section('content')

<!-- Hero Banner Section with Parallax Effect -->
<div class="relative w-full h-[56vh]
            bg-[url('/assets/img/front/complain.jpg')] bg-no-repeat bg-cover bg-fixed bg-center 
            flex items-center justify-center overflow-hidden transition-all duration-700">
    <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-black/70 flex items-center justify-center">
        <div class="text-center transform transition-all duration-500 ease-in-out">
            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold uppercase tracking-wider mb-2">complain</h1>
            <div class="h-1 w-24 md:w-32 bg-gradient-to-r from-gray-500 to-white mx-auto rounded-full"></div>
        </div>
    </div>
</div>

<!-- Enhanced Breadcrumb Navigation -->
<nav class="bg-white border-b border-gray-800 text-black py-4 px-6 md:px-12">
    <div class="container mx-auto">
        <ol class="flex items-center space-x-2 text-sm md:text-base">
            <li>
                <a href="#" class="text-black hover:text-black transition-colors duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </li>
            <li class="text-black font-semibold">Feedback</li>
        </ol>
    </div>
</nav>

<section class="min-h-screen flex items-center justify-center p-4 bg-white">
    <!-- Main Container -->
    <div class="bg-gray-100 backdrop-blur-md rounded-xl shadow-xl shadow-orange-900/20 p-6 md:p-8 max-w-4xl w-full">
        <!-- Success Message Handling -->
        @if (session('success'))
            <div id="success-message" class="mb-6">
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: "{{ session('success') }}",
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false,
                            backdrop: 'rgba(0,0,0,0.7)'
                        });
                    });
                </script>
            </div>
        @endif
        
        <!-- Form Section -->
        <div class="w-full">
            <!-- Form Header -->
            <header class="text-center mb-8">
                <h1 class="text-2xl md:text-3xl font-bold text-black mb-2">Complaint Registration</h1>
                <p class="text-gray-300">Please fill in all required details to submit your complaint</p>
            </header>

            <!-- Complaint Form -->
            <form action="{{ route('complain.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name" class="block text-gray-300 font-medium mb-2 required">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 bg-opacity-50 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-colors"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="block text-gray-300 font-medium mb-2 required">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="your.email@example.com" required
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 bg-opacity-50 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-colors"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Phone Field -->
                <div class="form-group">
                    <label for="phone" class="block text-gray-300 font-medium mb-2 required">Phone Number</label>
                    <input type="tel" id="phone" name="mobile" placeholder="+91 9876543210" required
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 bg-opacity-50 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-colors"
                        value="{{ old('mobile') }}">
                    @error('mobile')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Complaint Message -->
                <div class="form-group">
                    <label for="complain" class="block text-gray-300 font-medium mb-2 required">Complaint Details</label>
                    <textarea id="complain" name="complain_m" rows="6" placeholder="Describe your complaint in detail..." required
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 bg-opacity-50 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-colors">{{ old('complain_m') }}</textarea>
                    @error('complain_m')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Warranty Card -->
                <div class="form-group">
                    <label for="warranty" class="block text-gray-300 font-medium mb-2">Warranty Card Number</label>
                    <input type="text" id="warranty" name="warentycard_n" placeholder="Enter warranty card number if applicable"
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 bg-opacity-50 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-colors"
                        value="{{ old('warentycard_n') }}">
                    @error('warentycard_n')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- File Attachments -->
                <div class="form-group">
                    <label class="block text-gray-300 font-medium mb-2">Attachments (Optional)</label>
                    <div class="relative">
                        <input type="file" name="image" id="file-upload" 
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                        <div class="flex items-center justify-between px-4 py-3 rounded-lg bg-gray-700 bg-opacity-50 border border-gray-600 border-dashed">
                            <span id="file-name" class="text-gray-300 truncate">No file chosen</span>
                            <button type="button" class="text-orange-400 hover:text-orange-300 font-medium text-sm">
                                Choose File
                            </button>
                        </div>
                    </div>
                    <p class="mt-1 text-sm text-gray-400">Max file size: 5MB (JPEG, PNG, PDF only)</p>
                    @error('image')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" 
                        class="w-full px-6 py-3 rounded-lg bg-orange-600 hover:bg-orange-700 text-white font-semibold shadow-md hover:shadow-orange-500/20 transition-all duration-300 ease-in-out transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                        Submit Complaint
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript for File Upload Display -->
    <script>
        document.getElementById('file-upload').addEventListener('change', function(e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'No file chosen';
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
</section>
@endsection
