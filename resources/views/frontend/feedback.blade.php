<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-[#108291ee] via-gray-900 to-[#2d7a73] min-h-screen flex items-center justify-center p-6">
    <div class="bg-white bg-opacity-10 backdrop-blur-lg border border-white border-opacity-20 rounded-2xl shadow-lg p-8 max-w-4xl w-full flex flex-col md:flex-row items-center">
        
        <!-- Feedback Image -->
        <div class="hidden md:block w-1/2 p-4">
            <img src="{{asset('assets/img/front/feedback.webp')}}" alt="Feedback" class="rounded-lg shadow-lg">
        </div>

        <!-- Form Section -->
        <div class="w-full md:w-1/2 p-4">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-semibold text-white">We Value Your Feedback</h1>
                <p class="text-gray-300">Please take a moment to share your thoughts with us.</p>
            </div>

            <form action="submit_feedback.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-white font-medium">Full Name</label>
                    <input type="text" id="name" name="name" required class="w-full p-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee]">
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-white font-medium">Email Address</label>
                    <input type="email" id="email" name="email" required class="w-full p-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee]">
                </div>
                
                <div class="mb-4">
                    <label for="rating" class="block text-white font-medium">Rating</label>
                    <select id="rating" name="rating" required class="w-full p-3 rounded-lg bg-gray-900 bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee]">
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3">Good</option>
                        <option value="2">Fair</option>
                        <option value="1">Poor</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="comments" class="block text-white font-medium">Comments</label>
                    <textarea id="comments" name="comments" required class="w-full p-3 rounded-lg bg-white bg-opacity-20 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-[#108291ee] h-32 resize-none"></textarea>
                </div>
                
                <button type="submit" class="w-full p-3 rounded-lg bg-[#00BFA6] text-white font-semibold hover:bg-[#3a6862] transition">Submit Feedback</button>
            </form>
        </div>
    </div>
</body>
</html>
