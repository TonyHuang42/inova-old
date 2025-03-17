//move up items when scrolling
function handleScrollMoveUp() {
    if (window.innerWidth >= 992) {
        const elements = document.querySelectorAll('.scroll-move-up');
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const scrollProgress = (windowHeight - rect.top) / windowHeight;
            if (rect.top < windowHeight && rect.bottom > 0) {
                const movement = Math.min(scrollProgress * 100, 200);
                element.style.transform = `translateY(-${movement}px)`;
            } else {
                element.style.transform = 'translateY(0)';
            }
        });
    } else {
        resetTransformations();
    }
}

function resetTransformations() {
    document.querySelectorAll('.scroll-move-up').forEach(element => {
        element.style.transform = 'translateY(0)';
    });
}

function manageScrollListener() {
    if (window.innerWidth >= 768) {
        handleScrollMoveUp();
        window.addEventListener('scroll', handleScrollMoveUp);
    } else {
        window.removeEventListener('scroll', handleScrollMoveUp);
        resetTransformations();
    }
}

// Initialize on page load and window resize
window.addEventListener('DOMContentLoaded', manageScrollListener);
window.addEventListener('resize', manageScrollListener);