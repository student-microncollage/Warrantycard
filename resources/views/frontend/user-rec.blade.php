<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Requirement Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('https://source.unsplash.com/1600x900/?technology,business')] bg-cover bg-center min-h-screen flex items-center justify-center p-6">

    <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-2xl shadow-lg p-8 max-w-3xl w-full border border-white border-opacity-20">
        
        <!-- Title -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-semibold text-white">User Requirement Form</h1>
            <p class="text-white text-opacity-80">Fill out the form to submit your project details.</p>
        </div>

        <!-- Form -->
        <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <input type="text" id="name" name="name" placeholder="Full Name" required 
                class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-80">
            
            <input type="email" id="email" name="email" placeholder="Email Address" required 
                class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-80">
            
            <input type="text" id="company" name="company" placeholder="Company Name" required 
                class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-80">

            <textarea id="requirements" name="requirements" placeholder="Describe your requirements" required 
                class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-green-400 h-20 resize-none placeholder-white placeholder-opacity-80"></textarea>

            <input type="text" id="priority" name="priority" placeholder="Priority Level" required 
                class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-green-400 placeholder-white placeholder-opacity-80">

            <textarea id="message" name="message" placeholder="Additional Message" 
                class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-green-400 h-20 resize-none placeholder-white placeholder-opacity-80"></textarea>

            <!-- Submit Button (Spans Full Width) -->
            <div class="col-span-2">
                <button type="submit" 
                    class="w-full p-3 rounded-lg bg-green-500 text-white font-semibold hover:bg-green-600 transition-all duration-300 ease-in-out shadow-md">
                    Submit
                </button>
            </div>

        </form>
    </div>

</body>
</html>
