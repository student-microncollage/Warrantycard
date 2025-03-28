<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Frontend</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-900">
    
    <!-- Navbar -->
    <nav class="bg-black bg-opacity-80 backdrop-blur-md shadow-lg border-b border-white border-opacity-30">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Logo -->
            <a href="#" class="text-white text-2xl font-semibold">FORM</a>
            
            <!-- Menu Button (Mobile) -->
            <button id="menu-btn" class="lg:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <!-- Menu Items -->
            <ul id="menu" class="hidden lg:flex space-x-6 text-white text-lg">
                <li><a href="#" class="menu-item hover:text-yellow-300 transition" data-target="feedback">Feedback</a></li>
                <li><a href="#" class="menu-item hover:text-yellow-300 transition" data-target="services">Services</a></li>
                <li class="relative group">
                    <button class="flex items-center space-x-1 hover:text-yellow-300 transition">
                        <span>More</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 bg-white bg-opacity-20 backdrop-blur-md shadow-lg rounded-lg border border-white border-opacity-30 hidden group-hover:block">
                        <li><a href="#" class="menu-item block px-4 py-2 text-white hover:bg-white hover:bg-opacity-30" data-target="user-rec">User Requirement</a></li>
                        <li><a href="#" class="menu-item block px-4 py-2 text-white hover:bg-white hover:bg-opacity-30" data-target="inquiry">Inquiry</a></li>
                    </ul>
                </li>
                <li><a href="#" class="menu-item hover:text-yellow-300 transition" data-target="warranty">Warranty</a></li>
            </ul>
        </div>
    </nav>

    <!-- Forms Section -->
    <div class="max-w-4xl mx-auto my-8 p-6 shadow-lg rounded-lg">
        <div id="feedback" class="form-section hidden">@include('frontend.feedback')</div>
        <div id="services" class="form-section hidden">@include('frontend.complain')</div>
        <div id="user-rec" class="form-section hidden">@include('frontend.user-rec')</div>
        <div id="inquiry" class="form-section hidden">@include('frontend.inqury')</div>
        <div id="warranty" class="form-section hidden">@include('frontend.varranty')</div>
    </div>

    <!-- JavaScript for Menu Toggle & Form Display -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".menu-item").forEach(item => {
                item.addEventListener("click", function(event) {
                    event.preventDefault();
                    let target = this.getAttribute("data-target");
                    document.querySelectorAll(".form-section").forEach(section => {
                        section.classList.add("hidden");
                    });
                    document.getElementById(target).classList.remove("hidden");
                });
            });
        });
    </script>

</body>
</html>