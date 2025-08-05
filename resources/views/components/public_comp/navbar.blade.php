<header class="bg-white header fixed w-full top-0 z-50">
    <nav class="navbar transition-all duration-300">
        <div class="mx-auto px-4 py-3 flex justify-between items-center">
            <div class="nav-logo text-2xl font-bold text-primary flex items-center">
                <span class="mr-2">📱</span> SmartPhoneRental
            </div>
            <div class="nav-menu hidden md:flex items-center space-x-8">
                <a href="/" class="nav-link hover:text-primary transition">Beranda</a>
                <a href="/devices" class="nav-link hover:text-primary transition">Perangkat</a>
                <a href="#about" class="nav-link hover:text-primary transition">Tentang Kami</a>
                <a href="#testimonials" class="nav-link hover:text-primary transition">Testimoni</a>
                <a href="#contact" class="nav-link hover:text-primary transition">Kontak</a>
                @if (session()->has('user_signup'))
                <form action="/logout" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="items-center px-4 py-2 bg-white text-red-600 border border-red-200 rounded-lg hover:bg-red-50 transition"> Keluar </button>
                </form>
                @else
                <a href="/auth" class="nav-button bg-primary text-white hover:bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-600 transition">Masuk</a>
                @endif
            </div>
            <div class="hamburger md:hidden flex flex-col space-y-1.5 cursor-pointer">
                <span class="w-6 h-0.5 bg-dark rounded-full"></span>
                <span class="w-6 h-0.5 bg-dark rounded-full"></span> 
                <span class="w-6 h-0.5 bg-dark rounded-full"></span>
            </div>
        </div>
    </nav>
</header>