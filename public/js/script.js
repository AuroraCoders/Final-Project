let currentImageIndex = 0;
const images = [
    'chair.webp', 
    'lamp.jpg', 
    'set.webp'
];  // Ensure that these files exist in public/images folder

const imageElement = document.getElementById('sliderImage');
const imageTextElement = document.getElementById('imageText');

function changeImage(direction) {
    currentImageIndex = (currentImageIndex + direction + images.length) % images.length;
    console.log("Current Image Index:", currentImageIndex);  // Debug line

    // Try using hardcoded URLs for the images
    imageElement.src = "/images/" + images[currentImageIndex];  // Static path

    // Update the text for the current image
    imageTextElement.textContent = `Stylish  Art - Rs.${(currentImageIndex + 1) * 1500}`;
}

// Left and Right Arrow Event Listeners
document.querySelector('.left-arrow').addEventListener('click', function() {
    changeImage(-1);
});

document.querySelector('.right-arrow').addEventListener('click', function() {
    changeImage(1);
});

  

        let currentSlide = 0;
        const cardsPerSlide = 3; // Number of cards shown per slide
        
        function showSlide(slideIndex) {
            const productSlider = document.getElementById("productSlider");
            const dots = document.getElementsByClassName("dot");
            const totalSlides = Math.ceil(productSlider.children.length / cardsPerSlide);
            
            // Calculate the transform percentage based on slide index
            currentSlide = slideIndex - 1;
            const offset = -(currentSlide * 100); // Move by 100% of container width per slide
            productSlider.style.transform = `translateX(${offset}%)`;
        
            // Update active dot
            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove("active");
            }
            dots[slideIndex - 1].classList.add("active");
        }
        
        // Get all hover points and cards
       const hoverPoints = document.querySelectorAll('.hover-point');
const infoCards = document.querySelectorAll('.info-card');
let hideTimeouts = {}; // Object to store timeouts for each card

// Show the info card on hover
hoverPoints.forEach(point => {
    point.addEventListener('mouseover', () => {
        const cardId = point.getAttribute('data-card');
        const infoCard = document.getElementById(cardId);

        // Clear any existing timeout for this card to prevent it from hiding unexpectedly
        clearTimeout(hideTimeouts[cardId]);

        // Show the card
        infoCard.style.visibility = 'visible';
        infoCard.style.opacity = '1';
    });

    point.addEventListener('mouseout', () => {
        const cardId = point.getAttribute('data-card');
        const infoCard = document.getElementById(cardId);

        // Set a timeout to hide the card after 5 seconds
        hideTimeouts[cardId] = setTimeout(() => {
            infoCard.style.visibility = 'hidden';
            infoCard.style.opacity = '0';
        }, 5000); // 5 seconds
    });
});


        document.querySelector(".left-arrow").addEventListener("mouseover", () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateSlider(currentIndex);
        });

        document.querySelector(".right-arrow").addEventListener("mouseover", () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateSlider(currentIndex);
        });
        

       
      