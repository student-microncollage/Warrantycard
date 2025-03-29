@extends('components.main')
@section('content')
<section class="bg-gradient-to-br from-gray-900 to-black min-h-screen flex items-center justify-center p-4 sm:p-6">
    <div class="bg-black bg-opacity-20 backdrop-blur-lg rounded-xl shadow-2xl p-6 sm:p-8 w-full max-w-2xl border border-white border-opacity-20">
        
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">Project Requirements Form</h1>
            <p class="text-white text-opacity-80 text-sm sm:text-base">Tell us about your project needs and we'll get back to you within 24 hours</p>
        </div>

        <!-- Form Section -->
        <form class="space-y-5">
            <!-- Personal Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="name" class="block text-white font-medium mb-2">Full Name <span class="text-red-400">*</span></label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 text-white border border-white border-opacity-20 
                               focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-60 transition-all"
                        placeholder="John Smith">
                </div>
                
                <div>
                    <label for="email" class="block text-white font-medium mb-2">Email <span class="text-red-400">*</span></label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 text-white border border-white border-opacity-20 
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