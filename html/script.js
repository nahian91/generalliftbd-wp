/**
 * General Elevator Bangladesh - Interactive Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.glt-header-wrapper');

    // Handle Sticky Header on Scroll
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 50) {
            header.classList.add('glt-header-scrolled');
        } else {
            header.classList.remove('glt-header-scrolled');
        }
    });

    // Form Submission Handling (Preventing reload for demo)
    const quoteForm = document.querySelector('.glt-form-area form');
    if (quoteForm) {
        quoteForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you! Your quotation request has been sent to General Elevator engineers.');
            quoteForm.reset();
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});