@extends('components.main')
@section('content')

<!-- Hero Banner Section with Improved Parallax Effect -->
<div class="relative w-full h-[65vh]
            bg-[url('/assets/img/front/complain.jpg')] bg-no-repeat bg-cover bg-fixed bg-center 
            flex items-center justify-center overflow-hidden transition-all duration-700">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80 flex items-center justify-center">
        <div class="text-center transform transition-all duration-500 ease-in-out hover:scale-105">
            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold uppercase tracking-wider mb-4">We're Here to Help</h1>
            <p class="text-gray-300 text-xl md:text-2xl max-w-2xl mx-auto mb-6">Your satisfaction is our priority</p>
            <div class="h-1 w-32 md:w-48 bg-gradient-to-r from-gray-500 via-white to-gray-500 mx-auto rounded-full"></div>
        </div>
    </div>
</div>

<!-- Enhanced Breadcrumb Navigation with Animation -->
<nav class="bg-white border-b border-gray-200 text-black py-4 px-6 md:px-12 shadow-sm">
    <div class="container mx-auto">
        <ol class="flex items-center space-x-2 text-sm md:text-base">
            <li>
                <a href="#" class="text-gray-700 hover:text-black transition-colors duration-300 flex items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </li>
            <li class="text-gray-900 font-semibold">Complaint Form</li>
        </ol>
    </div>
</nav>

<section class="bg-white min-h-screen flex items-center justify-center p-4 sm:p-6">
    <div class="bg-gray-200 backdrop-blur-lg rounded-xl shadow-2xl p-6 sm:p-8 w-full max-w-2xl border border-black">
        
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-2xl sm:text-3xl font-bold text-black mb-2">Project Requirements Form</h1>
            <p class="text-black text-opacity-80 text-sm sm:text-base">Tell us about your project needs and we'll get back to you within 24 hours</p>
        </div>

        <!-- Form Section -->
        <form class="space-y-5">
            <!-- Personal Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="name" class="block text-black font-medium mb-2">Full Name </label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3 rounded-lg bg-gray-50  text-black border border-black
                               focus:outline-none focus:ring-2 focus:ring-gray-400 placeholder-gray-100  transition-all"
                        placeholder="John Smith">
                </div>
                
                <div>
                    <label for="email" class="block text-black font-medium mb-2">Email </label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-lg bg-gray-50 bg-opacity-10 text-white border border-white border-opacity-20 
                               focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-60 transition-all"
                        placeholder="john@example.com">
                </div>
            </div>

            <!-- Company Information -->
            <div>
                <label for="company" class="block text-white font-medium mb-2">Company/Organization</label>
                <input type="text" id="company" name="company"
                    class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 text-white border border-white border-opacity-20 
                           focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-60 transition-all"
                    placeholder="Acme Inc.">
            </div>

            <!-- Project Details -->
            <div>
                <label for="requirements" class="block text-white font-medium mb-2">Project Requirements <span class="text-red-400">*</span></label>
                <textarea id="requirements" name="requirements" required rows="4"
                    class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 text-white border border-white border-opacity-20 
                           focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-60 transition-all resize-none"
                    placeholder="Describe your project goals, features, and technical requirements"></textarea>
            </div>

            <!-- Priority and Timeline -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="priority" class="block text-white font-medium mb-2">Priority Level <span class="text-red-400">*</span></label>
                    <select id="priority" name="priority" required
                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 text-white border border-white border-opacity-20 
                               focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-60 transition-all appearance-none">
                        <option value="" disabled selected>Select priority</option>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        <option value="urgent">Urgent</option>
                    </select>
                </div>
                
                <div>
                    <label for="budget" class="block text-white font-medium mb-2">Estimated Budget</label>
                    <select id="budget" name="budget"
                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 text-white border border-white border-opacity-20 
                               focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-60 transition-all appearance-none">
                        <option value="" disabled selected>Select budget range</option>
                        <option value="1k-5k">$1,000 - $5,000</option>
                        <option value="5k-10k">$5,000 - $10,000</option>
                        <option value="10k-25k">$10,000 - $25,000</option>
                        <option value="25k+">$25,000+</option>
                    </select>
                </div>
            </div>

            <!-- Additional Information -->
            <div>
                <label for="message" class="block text-white font-medium mb-2">Additional Notes</label>
                <textarea id="message" name="message" rows="3"
                    class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 text-white border border-white border-opacity-20 
                           focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-60 transition-all resize-none"
                    placeholder="Any other details we should know?"></textarea>
            </div>

            <!-- File Attachment -->
            <div>
                <label for="attachment" class="block text-white font-medium mb-2">Attach Files (Optional)</label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col w-full border-2 border-dashed border-white border-opacity-30 hover:border-green-400 hover:bg-white hover:bg-opacity-5 rounded-lg cursor-pointer transition-all">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 px-4">
                            <svg class="w-8 h-8 mb-3 text-white text-opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-white text-opacity-80"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-white text-opacity-60">PDF, DOC, JPG, PNG (MAX. 10MB)</p>
                        </div>
                        <input id="attachment" name="attachment" type="file" class="hidden" multiple>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" 
                    class="w-full px-6 py-3 rounded-lg bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold 
                           hover:from-green-600 hover:to-green-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                    Submit Requirements
                </button>
            </div>
        </form>
    </div>

    <!-- Success Modal (Hidden by default) -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4 hidden">
        <div class="bg-gray-800 rounded-xl max-w-md w-full p-6 border border-green-500 border-opacity-50">
            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-green-500 bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Submission Received!</h3>
                <p class="text-white text-opacity-80 mb-4">Thank you for your submission. We'll get back to you within 24 hours.</p>
                <button onclick="document.getElementById('successModal').classList.add('hidden')" 
                    class="px-6 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors">
                    Continue
                </button>
            </div>
        </div>
    </div>

    <script>
        // Simple form submission handler for demo purposes
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('successModal').classList.remove('hidden');
        });
    </script>
</section>
@endsection