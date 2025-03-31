@extends('components.main')
@section('content')
<section class="bg-gradient-to-r from-[#108291ee] via-gray-900 to-[#2d7a73] min-h-screen flex items-center justify-center p-6">
    <div class="bg-white bg-opacity-10 backdrop-blur-lg border border-white border-opacity-20 rounded-2xl shadow-lg p-8 max-w-4xl w-full flex flex-col md:flex-row items-center">
        
        <!-- Feedback Image -->
        <div class="hidden md:block w-1/2 p-4">
            <img src="{{asset('assets/img/front/feedback.webp')}}" alt="Feedback" class="rounded-lg shadow-lg">
        </div>

        <!-- Form Section -->

            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        timer: 5000, 
                        showConfirmButton: false
                    });
                </script>
            @endif
        <div class="w-full md:w-1/2 p-4">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-semibold text-white">We Value Your Feedback</h1>
                <p class="text-gray-300">Please take a moment to share your thoughts with us.</p>
            </div>

            <form action="{{route('feedback.store')}}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="mb-4">
                    <label for="name" class="block text-white font-medium">Full Name</label>
                    <input type="text" id="name" name="name"  class="w-full p-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee]">
                    @error('name')
                    <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-white font-medium">Email Address</label>
                    <input type="email" id="email" name="email"  class="w-full p-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee]">
                    @error('email')
                    <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="rating" class="block text-white font-medium">Rating</label>
                    <select id="rating" name="rating" class="w-full p-3 rounded-lg bg-gray-900 bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee]">
                        <option value="excellent">Kindly select a rating from the options below.</option>
                        <option value="excellent">Excellent</option>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                    
                </div>
                
                <div class="mb-4">
                    <label for="comments" class="block text-white font-medium">Comments</label>
                    <textarea id="comments" name="comments"  class="w-full p-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee] h-32 resize-none"></textarea>
                    @error('comments')
                    <p class="mt-1 text-sm text-red-300">{{ $message }}</p>
                    @enderror
                </div>
                
                <button type="submit" class="w-full p-3 rounded-lg bg-[#00BFA6] text-white font-semibold hover:bg-[#3a6862] transition">Submit Feedback</button>
            </form>
        </div>
    </div>
</section>
@endsection