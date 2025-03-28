<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center p-6 bg-gradient-to-r from-[#E6A157] to-[#C28A5E]">

    <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-2 gap-6 p-8 rounded-2xl shadow-lg bg-white bg-opacity-20 backdrop-blur-md border border-white border-opacity-30">
        
        <!-- Form Section -->
        <div>
            <h2 class="text-center text-2xl font-semibold text-white mb-6">Submit an Inquiry</h2>
            
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-white font-medium">Full Name</label>
                    <input type="text" id="name" name="name" required 
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#E6A157] placeholder-white placeholder-opacity-80"
                        placeholder="Enter your full name">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-white font-medium">Email Address</label>
                    <input type="email" id="email" name="email" required 
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#E6A157] placeholder-white placeholder-opacity-80"
                        placeholder="Enter your email">
                </div>

                <div class="mb-4">
                    <label for="subject" class="block text-white font-medium">Subject</label>
                    <input type="text" id="subject" name="subject" required 
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#E6A157] placeholder-white placeholder-opacity-80"
                        placeholder="Enter your subject">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-white font-medium">Message</label>
                    <textarea id="message" name="message" required 
                        class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#E6A157] h-32 resize-none placeholder-white placeholder-opacity-80"
                        placeholder="Type your message here"></textarea>
                </div>

                <button type="submit" 
                    class="w-full p-3 rounded-lg bg-[#4fa198] text-white font-semibold hover:bg-[#457972] transition-all duration-300 ease-in-out shadow-md">
                    Submit Inquiry
                </button>
            </form>
        </div>

        <!-- Image Section -->
        <div class="flex items-center justify-center">
            <img src="{{asset('assets/img/front/inqury.jpg')}}" alt="Inquiry Form" class="rounded-lg shadow-md">
        </div>

    </div>

</body>
</html>
