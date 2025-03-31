<!-- Topbar -->
<div class="flex justify-between gap-8 bg-[#fefcfc] py-3">
    <img src="{{ asset('assets/img/front/logo1.jpeg') }}" alt="Logo 1" class="h-12 w-56 object-contain">
    <img src="{{ asset('assets/img/front/logo2.jpeg') }}" alt="Logo 2" class="h-12 w-56 object-contain">
    <img src="{{ asset('assets/img/front/logo3.jpeg') }}" alt="Logo 3" class="h-12 w-56 object-contain">
</div>

<!-- Navbar -->
{{-- <nav class="bg-black bg-opacity-80 backdrop-blur-md shadow-lg border-b border-white border-opacity-30">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="lg:hidden text-white focus:outline-none" aria-label="Toggle menu">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex flex-1 justify-center">
            <ul class="flex space-x-6 text-white text-lg">
                <li><a href="{{ route('feedback') }}" class="hover:text-yellow-300 transition">Feedback</a></li>
                <li><a href="{{ route('complain') }}" class="hover:text-yellow-300 transition">Complain</a></li>
                <li><a href="{{ route('user_rec') }}" class="hover:text-yellow-300 transition">User Requirement</a></li>
                <li><a href="{{ route('inqury') }}" class="hover:text-yellow-300 transition">Inquiry</a></li>
                <li><a href="{{ route('varranty') }}" class="hover:text-yellow-300 transition">Warranty</a></li>
            </ul>
        </div>
    </div>

   <!-- Mobile Menu -->
<div id="mobile-menu" class="hidden lg:hidden absolute inset-x-0 top-full bg-black bg-opacity-90 p-4 rounded-lg text-white text-lg shadow-lg z-50">
    <ul class="space-y-2">
        <li><a href="{{ route('feedback') }}" class="block py-2 hover:text-yellow-300 transition">Feedback</a></li>
        <li><a href="{{ route('complain') }}" class="block py-2 hover:text-yellow-300 transition">Complain</a></li>
        <li><a href="{{ route('user_rec') }}" class="block py-2 hover:text-yellow-300 transition">User Requirement</a></li>
        <li><a href="{{ route('inqury') }}" class="block py-2 hover:text-yellow-300 transition">Inquiry</a></li>
        <li><a href="{{ route('varranty') }}" class="block py-2 hover:text-yellow-300 transition">Warranty</a></li>
    </ul>
</div>

</nav>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    });
</script> --}}


<!-- Navbar -->
<nav class="bg-white bg-opacity-80 backdrop-blur-md shadow-lg border-b border-black border-opacity-30 relative z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="lg:hidden text-black focus:outline-none" aria-label="Toggle menu">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex flex-1 justify-center">
            <ul class="flex space-x-6 text-black text-lg">
                <li><a href="{{ route('feedback') }}" class="hover:text-red-300 transition">Feedback</a></li>
                <li><a href="{{ route('complain') }}" class="hover:text-red-300 transition">Complain</a></li>
                <li><a href="{{ route('user_rec') }}" class="hover:text-red-300 transition">User Requirement</a></li>
                <li><a href="{{ route('inqury') }}" class="hover:text-red-300 transition">Inquiry</a></li>
                <li><a href="{{ route('varranty') }}" class="hover:text-red-300 transition">Warranty</a></li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden absolute left-0 top-full w-full bg-black bg-opacity-90 p-4 rounded-lg text-white text-lg shadow-lg z-50 transition-transform transform scale-95 opacity-0">
        <ul class="space-y-2">
            <li><a href="{{ route('feedback') }}" class="block py-2 hover:text-yellow-300 transition">Feedback</a></li>
            <li><a href="{{ route('complain') }}" class="block py-2 hover:text-yellow-300 transition">Complain</a></li>
            <li><a href="{{ route('user_rec') }}" class="block py-2 hover:text-yellow-300 transition">User Requirement</a></li>
            <li><a href="{{ route('inqury') }}" class="block py-2 hover:text-yellow-300 transition">Inquiry</a></li>
            <li><a href="{{ route('varranty') }}" class="block py-2 hover:text-yellow-300 transition">Warranty</a></li>
        </ul>
    </div>
</nav>

<!-- JavaScript for Mobile Menu -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            const isOpen = !mobileMenu.classList.contains("hidden");
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        document.addEventListener("click", (event) => {
            if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
                closeMenu();
            }
        });

        function openMenu() {
            mobileMenu.classList.remove("hidden", "scale-95", "opacity-0");
            mobileMenu.classList.add("scale-100", "opacity-100");
        }

        function closeMenu() {
            mobileMenu.classList.add("scale-95", "opacity-0");
            setTimeout(() => {
                mobileMenu.classList.add("hidden");
            }, 200); // Delay to allow transition
        }
    });
</script>
