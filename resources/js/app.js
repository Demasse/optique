// Premium Interactions for Vision Signature Website

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIconOpen = document.getElementById('menu-icon-open');
    const mobileMenuIconClose = document.getElementById('menu-icon-close');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
            mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
            
            // Toggle icons
            if (mobileMenuIconOpen && mobileMenuIconClose) {
                mobileMenuIconOpen.classList.toggle('hidden');
                mobileMenuIconClose.classList.toggle('hidden');
            }
        });
    }

    // 2. Scroll Reveal Animations (Intersection Observer)
    const revealElements = document.querySelectorAll('.scroll-reveal');
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-8');
                observer.unobserve(entry.target); // Anim only once
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
        // Ensure starting state
        el.classList.add('transition-all', 'duration-1000', 'ease-out', 'opacity-0', 'translate-y-8');
        revealObserver.observe(el);
    });

    // 3. Header Styling On Scroll
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'py-3');
                header.classList.remove('bg-transparent', 'py-5');
            } else {
                header.classList.add('bg-transparent', 'py-5');
                header.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'py-3');
            }
        });
    }

    // 4. Contact/Booking Form Submission Mockup
    const bookingForm = document.getElementById('booking-form');
    const toast = document.getElementById('toast-success');
    
    if (bookingForm && toast) {
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Show premium success feedback
            toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-y-0', 'opacity-100');
            
            // Reset form
            bookingForm.reset();
            
            // Hide toast after 5 seconds
            setTimeout(() => {
                toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
                toast.classList.remove('translate-y-0', 'opacity-100');
            }, 5500);
        });
    }
});
