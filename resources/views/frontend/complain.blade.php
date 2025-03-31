@extends('components.main')
@section('content')
<section class="bg-black min-h-screen flex items-center justify-center p-6">
    <div class="bg-black bg-opacity-20 backdrop-blur-md rounded-2xl shadow-lg shadow-orange-100 p-8 max-w-4xl w-full flex flex-col md:flex-row items-center gap-8">
        
        <!-- Complaint Image -->
        <div class="hidden md:flex w-1/2 justify-center">
            <img src="{{asset('assets/img/front/complain')}}" alt="Complaint" class="rounded-lg shadow-lg w-full max-w-[400px]">
        </div>

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


        <div class="w-full md:w-1/2">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-semibold text-white">Fill Complaint Details</h1>
            </div>

            <form action="{{route('complain.store')}}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf  
                <div>
                    <label for="name" class="block text-white font-medium">Full Name</label>
                    <input type="text" id="name" name="name"  
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                        <p>
                            @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                </div>
                
                <div>
                    <label for="email" class="block text-white font-medium">Email Address</label>
                    <input type="email" id="email" name="email"  
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                        <p>
                            @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                </div>
                
                <div>
                    <label for="phone" class="block text-white font-medium">Phone Number</label>
                    <input type="tel" id="phone" name="mobile"  
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                        <p>
                            @error('mobile')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                </div>
                
                <div>
                    <label for="category" class="block text-white font-medium">Complaint Message</label>
                   <textarea name="complain_m" id="complain" cols="30" rows="10" class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-offset-indigo-50"></textarea>
                   <p>
                    @error('complain_m')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </p>  
                </div>
                
                <div>
                    <label for="textarea" class="block text-white font-medium">Warranty Card Number</label>
                    <input type="text " placeholder="warentycard_number" name="warentycard_n" class="w-full rounded-lg py-2 bg-white bg-opacity-30 text-white border border-white border-opacity-30">
                    <p>
                        @error('warentycard_n')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </p>  
                </div>
                
                <div>
                    <label class="block text-white font-medium">Attachments (Optional)</label>
                    <input type="file" name="image" multiple 
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                        <p>
                            @error('image')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>  
                </div>
                
                <button type="submit" 
                    class="w-full p-3 rounded-lg bg-[#5e201d] text-white font-semibold hover:bg-[#744947] transition-all duration-300 ease-in-out transform hover:scale-105">
                    Submit Complaint
                </button>

            </form>
        </div>
    </div>
</section>
@endsection
