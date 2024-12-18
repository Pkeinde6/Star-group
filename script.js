document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById("menu-toggle");
    const navLinks = document.getElementById("nav-links");

    if (menuToggle) {
        menuToggle.addEventListener("click", function() {
            if (navLinks) {
                navLinks.classList.toggle("show");
            }
        });
    }

    function contact() {
        alert("Notre numéro de téléphone est : 77 275 65 81");
    }

    let img_en_cours = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function show_next_slide() {
        slides[img_en_cours].style.opacity = 0;
        slides[img_en_cours].style.transform = 'translateX(-100%)';

        img_en_cours = (img_en_cours + 1) % totalSlides;

        slides[img_en_cours].style.opacity = 1;
        slides[img_en_cours].style.transform = 'translateX(0%)';
    }

    let img_en_cours_x = 0;
    const slides_x = document.querySelectorAll('.slide-p');
    const totalSlides_x = slides_x.length;

    function show_next_slide_x() {
        slides_x[img_en_cours_x].style.opacity = 0;
        slides_x[img_en_cours_x].style.transform = 'translateX(-100%)';

        img_en_cours_x = (img_en_cours_x + 1) % totalSlides_x;

        slides_x[img_en_cours_x].style.opacity = 1;
        slides_x[img_en_cours_x].style.transform = 'translateX(0%)';
    }

    window.onload = function() {
        slides[img_en_cours].style.opacity = 1;
        slides[img_en_cours].style.transform = 'translateX(0%)';
        setInterval(show_next_slide, 8000);

        slides_x[img_en_cours_x].style.opacity = 1;
        slides_x[img_en_cours_x].style.transform = 'translateX(0%)';
        setInterval(show_next_slide_x, 12000);
    };

    let currentIndex = 0;
    const pagination = document.getElementById('pagination');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = 0;
            slide.style.transform = 'translateX(100%)';
        });

        slides[index].style.opacity = 1;
        slides[index].style.transform = 'translateX(0)';
        updatePagination(index);
    }

    function updatePagination(index) {
        const dots = document.querySelectorAll('.pagination span');
        dots.forEach((dot, i) => {
            dot.classList.remove('active');
            if (i === index) {
                dot.classList.add('active');
            }
        });
    }

    function createPagination() {
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('span');
            dot.addEventListener('click', () => showSlide(i));
            pagination.appendChild(dot);
        }
    }

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
        showSlide(currentIndex);
    });

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
        showSlide(currentIndex);
    });

    createPagination();
    showSlide(currentIndex);

    let currentIndex_x = 0;
    const pagination_x = document.getElementById('pagination-x');

    function showSlide_x(index) {
        slides_x.forEach((slide, i) => {
            slide.style.opacity = 0;
            slide.style.transform = 'translateX(100%)';
        });

        slides_x[index].style.opacity = 1;
        slides_x[index].style.transform = 'translateX(0)';
        updatePagination_x(index);
    }

    function updatePagination_x(index) {
        const dots = document.querySelectorAll('.pagination-x span');
        dots.forEach((dot, i) => {
            dot.classList.remove('active');
            if (i === index) {
                dot.classList.add('active');
            }
        });
    }

    function createPagination_x() {
        for (let i = 0; i < totalSlides_x; i++) {
            const dot = document.createElement('span');
            dot.addEventListener('click', () => showSlide_x(i));
            pagination_x.appendChild(dot);
        }
    }

    document.getElementById('prev-x').addEventListener('click', () => {
        currentIndex_x = (currentIndex_x === 0) ? totalSlides_x - 1 : currentIndex_x - 1;
        showSlide_x(currentIndex_x);
    });

    document.getElementById('next-x').addEventListener('click', () => {
        currentIndex_x = (currentIndex_x === totalSlides_x - 1) ? 0 : currentIndex_x + 1;
        showSlide_x(currentIndex_x);
    });

    createPagination_x();
    showSlide_x(currentIndex_x);
});
