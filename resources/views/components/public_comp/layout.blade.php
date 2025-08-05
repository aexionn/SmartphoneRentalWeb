<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPhoneRental</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-800 bg-gray-50">
    {{ $slot }}
    
    <script>
        // Global scripts can go here
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
            
            // Toggle mobile menu
            const isActive = navMenu.classList.contains('active');
            if (isActive) {
                navMenu.classList.remove('hidden');
                navMenu.classList.add('flex', 'flex-col', 'absolute', 'top-16', 'left-0', 'right-0', 'bg-white', 'p-4', 'space-y-4', 'shadow-md');
            } else {
                navMenu.classList.add('hidden');
                navMenu.classList.remove('flex', 'flex-col', 'absolute', 'top-16', 'left-0', 'right-0', 'bg-white', 'p-4', 'space-y-4', 'shadow-md');
            }
        });

        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active', 'flex', 'flex-col', 'absolute', 'top-16', 'left-0', 'right-0', 'bg-white', 'p-4', 'space-y-4', 'shadow-md');
            navMenu.classList.add('hidden');
        }));

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // document.querySelectorAll('a[href="login.html"]').forEach(button => {
        //     button.addEventListener('click', function(e) {
        //         e.preventDefault();
        //         alert('Fitur ini akan segera hadir!');
        //     });
        // });

        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.device-card, .testimonial-card').forEach(el => {
            observer.observe(el);
        });

    </script>
</body>
</html>