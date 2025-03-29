 
    <!-- Navbar -->
    <nav class="bg-black bg-opacity-80 backdrop-blur-md shadow-lg border-b border-white border-opacity-30">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Logo -->
            <a href="index.html" class="text-white text-2xl font-semibold">FORM</a>
            
            <!-- Menu Button (Mobile) -->
            <button id="menu-btn" class="lg:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <!-- Menu Items -->
            <ul id="menu" class="hidden lg:flex space-x-6 text-white text-lg">
                <li><a href="{{route('feedback')}}" class="hover:text-yellow-300 transition">Feedback</a></li>
                <li><a href="{{route('complain')}}" class="hover:text-yellow-300 transition">Complain</a></li>
                <li class="relative group">
                    <button class="flex items-center space-x-1 hover:text-yellow-300 transition">
                        <span>More</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white bg-opacity-20 backdrop-blur-md shadow-lg rounded-lg border border-white border-opacity-30 hidden group-hover:block">
                        <li><a href="{{route('user_rec')}}" class="block px-4 py-2 text-white hover:bg-white hover:bg-opacity-30">User Requirement</a></li>
                        <li><a href="{{route('inqury')}}" class="block px-4 py-2 text-white hover:bg-white hover:bg-opacity-30">Inquiry</a></li>
                    </ul>
                </li>
                <li><a href="{{route('varranty')}}" class="hover:text-yellow-300 transition">Warranty</a></li>
                {{-- <li><a href="{{route('admin.dashbord')}}" class="hover:text-yellow-300 transition">Admin</a></li> --}}
            </ul>
        </div>
        
        <!-- Mobile Dropdown Menu -->
        <ul id="mobile-menu" class="hidden lg:hidden flex flex-col text-white text-lg bg-black bg-opacity-90 p-4 rounded-lg">
            <li><a href="{{route('feedback')}}" class="block py-2 hover:text-yellow-300 transition">Feedback</a></li>
            <li><a href="{{route('complain')}}" class="block py-2 hover:text-yellow-300 transition">Complain</a></li>
            <li><a href="{{route('user_rec')}}" class="block py-2 hover:text-yellow-300 transition">User Requirement</a></li>
            <li><a href="{{route('inqury')}}" class="block py-2 hover:text-yellow-300 transition">Inquiry</a></li>
            <li><a href="{{route('varranty')}}" class="block py-2 hover:text-yellow-300 transition">Warranty</a></li>
        </ul>
    </nav>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuBtn = document.getElementById("menu-btn");
            const mobileMenu = document.getElementById("mobile-menu");

            menuBtn.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");
            });
        });
    </script>