//Show features on click
document.addEventListener('DOMContentLoaded', () => {
    const circles = document.querySelectorAll('.circle-inner, .highlight-wrap');
    const defaultImage = document.getElementById('battery');
    const hoverContent = document.querySelectorAll('.content');

    let currentTarget = null;

    // Function to show the targeted content and hide others
    function showContent(targetId) {
        // Hide all hover content
        hoverContent.forEach(content => {
            content.style.display = 'none';
            content.classList.remove('show');
        });

        if (targetId) {
            // Show the specific target content
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.style.display = 'block';
                setTimeout(() => targetElement.classList.add('show'), 10);
            }

            // Update the current visible target
            currentTarget = targetId;
        } else {
            // No target clicked: show default image and hide everything else
            defaultImage.style.display = 'block';
            defaultImage.classList.add('show');
            currentTarget = null;
        }
    }

    // Add event listeners to circles
    circles.forEach(circle => {
        const targetId = circle.getAttribute('data-target');

        // On click, show the corresponding content
        circle.addEventListener('click', () => {
            showContent(targetId);
        });
    });

    // Set default state on page load
    showContent(null);

    // Set default state when resizing to desktop
    let lastWidth = window.innerWidth;
    function checkScreenWidth() {
        let currentWidth = window.innerWidth;
        if (lastWidth < 1200 && currentWidth >= 1200) {
            showContent(null);
        }

        lastWidth = currentWidth;
    }
    window.addEventListener("resize", checkScreenWidth);
});



//show navbar on scroll
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById("phone-nav-container");
    const posterImages = Array.from(document.getElementsByClassName('phone-banner'));
    let imageHeights = [];

    // Function to update image heights
    function updateImageHeights() {
        imageHeights = posterImages.map(img => img?.offsetHeight || 0);
    }

    // Ensure each image is fully loaded before getting its height
    posterImages.forEach((img) => {
        if (img) {
            img.onload = () => {
                updateImageHeights();
                handleScroll();
            };
            
            // Fallback in case the image is cached and already loaded
            if (img.complete) {
                updateImageHeights();
            }
        }
    });

    // Function to handle scroll logic
    function handleScroll() {
        const scrollPosition = window.scrollY || window.pageYOffset;
        const maxHeight = Math.max(...imageHeights);

        if (scrollPosition > maxHeight) {
            navbar.classList.remove("hidden");
            navbar.classList.add("visible");
        } else {
            navbar.classList.remove("visible");
            navbar.classList.add("hidden");
        }
    }

    // Add event listeners
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', () => {
        updateImageHeights();
        handleScroll();
    });
});



// Function to resize all feature-wrapper-mobile elements to match image-wrapper-mobile
function resizeFeatureWrappers() {
    const imageWrapper = document.querySelector('.image-wrapper-mobile');
    const featureWrappers = document.querySelectorAll('.feature-wrapper-mobile');

    if (imageWrapper && featureWrappers.length > 0) {
        // Get the width and height of the image-wrapper-mobile
        const width = imageWrapper.offsetWidth;
        let height = imageWrapper.offsetHeight;

        if (height < 620) {
            height = 620;
        }

        // Loop through all feature-wrapper-mobile elements
        featureWrappers.forEach(featureWrapper => {
            featureWrapper.style.width = `${width}px`;
            featureWrapper.style.height = `${height}px`;
            featureWrapper.style.minHeight = "620px";
        });
    }
}

window.addEventListener('load', resizeFeatureWrappers);
window.addEventListener('resize', resizeFeatureWrappers);



//Show and close feature-wrapper-mobile on click
document.addEventListener('DOMContentLoaded', function() {
    const hoverCircles = document.querySelectorAll('.circle-inner, .highlight-wrap');
    const closeButtons = document.querySelectorAll('.xmark');
    const featureContainer = document.querySelector('.features-container-mobile');
    const engineeringDrawing = document.querySelector('.engineering-drawing-mobile');

    hoverCircles.forEach(circle => {
        circle.addEventListener('click', function() {
            document.querySelectorAll('.feature-wrapper-mobile').forEach(wrapper => {
                wrapper.classList.add('hidden');
                wrapper.classList.remove('visible');
            });

            const targetId = circle.getAttribute('data-target');
            const featureWrapper = document.getElementById(targetId);
            if (featureWrapper) {
                featureWrapper.classList.add('visible');
                featureWrapper.classList.remove('hidden');
            }
            featureContainer.classList.add('open');
            engineeringDrawing.classList.add('open');
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const featureWrapper = button.closest('.feature-wrapper-mobile');
            if (featureWrapper) {
                featureWrapper.classList.add('hidden');
                featureWrapper.classList.remove('visible');
            }
            featureContainer.classList.remove('open');
            engineeringDrawing.classList.remove('open');
        });
    });
});



//Toggle Features
document.querySelectorAll(".text-overlay, .text-overlay-mobile, .senario-wrap").forEach(section => {
    const toggleContainers = section.querySelectorAll(".toggle-container");

    toggleContainers.forEach((container, index) => {
        const content = container.nextElementSibling;

        if (index === 0) {
            container.classList.add("active");
            content.classList.add("open");
        }

        container.addEventListener("click", function() {
            toggleContainers.forEach(item => {
                if (item !== this) {
                    item.classList.remove("active");
                    item.nextElementSibling.classList.remove("open");
                }
            });

            const isActive = this.classList.contains("active");

            if (isActive) {
                content.classList.remove("open");
                this.classList.remove("active");
            } else {
                content.classList.add("open");
                this.classList.add("active");
            }
        });
    });
});

//initialize slider
$(document).ready(function() {
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        fade: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="img/phone/icons/icons_slider.svg" alt="Previous"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="img/phone/icons/icons_slider.svg" alt="Next"></button>',
    });

    $(".senario-wrap").hide().eq(0).show();

    $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $(".senario-wrap").hide();
        $(".senario-wrap").eq(nextSlide).fadeIn();
    });
});