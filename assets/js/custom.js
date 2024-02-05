jQuery(document).ready(function ($) {
    // Smooth scroll to top
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 2000);
        return false;
    });

    // Show/hide the scroll-to-top button based on scroll position
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
});


//footer link
jQuery(document).ready(function ($) {
    // Smooth scroll to menu anchor links
    $('a.scroll-link[href^="#"]').on('click', function (event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1500);
        }
    });
});


//Navbar Menu
$(document).ready(function () {
    // Smooth scroll on click for navigation links in the navbar
    $('nav a.nav-link').on('click', function (event) {
        if (this.hash !== '') {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1200, function () {
                window.location.hash = hash;
            });
        }
    });
});


// models 
document.addEventListener('DOMContentLoaded', function () {
    let modelHoverTimer;

    // Function to start rotating the model
    function startRotation(modelViewer) {
        modelViewer.classList.add('rotate-on-hover');
    }

    // Function to stop rotating the model
    function stopRotation(modelViewer) {
        modelViewer.classList.remove('rotate-on-hover');
    }

    // Function to handle visibility, loading, and rotation of the 3D model
    function handleModelInteraction(card) {
        const image = card.querySelector('.custom-image');
        const modelViewer = card.querySelector('.custom-model');
        const loadingSpinner = card.querySelector('.loading-spinner');

        card.addEventListener('mouseenter', function () {
            modelHoverTimer = setTimeout(function () {
                image.style.display = 'none';

                if (!modelViewer.hasLoadedModel) {
                    loadingSpinner.classList.add('active'); // Show loading spinner
                    setTimeout(function () {
                        modelViewer.setAttribute('src', modelViewer.getAttribute('data-src'));
                        modelViewer.hasLoadedModel = true;
                    }, 100); // Delayed loading after 0.1 seconds
                }

                modelViewer.style.display = 'block';
                startRotation(modelViewer);
            }, 500); // Delayed rendering after 0.5 second
        });

        card.addEventListener('mouseleave', function () {
            clearTimeout(modelHoverTimer);
            image.style.display = 'block';
            modelViewer.style.display = 'none';
            stopRotation(modelViewer);
        });

        // Add an event listener for model load
        modelViewer.addEventListener('load', function () {
            loadingSpinner.classList.remove('active'); // Hide loading spinner after the model has loaded
        });

        // Add an event listener for model load error
        modelViewer.addEventListener('error', function () {
            clearTimeout(modelHoverTimer);
            loadingSpinner.classList.remove('active'); // Hide loading spinner on error
            console.error('Error loading the 3D model:', modelViewer.getAttribute('data-src'));
        });
    }

    // Function to handle model viewer rotation based on mouse movement
    function handleModelViewerRotation() {
        document.addEventListener('mousemove', throttle(function (event) {
            const modelViewers = document.querySelectorAll('.rotate-on-hover');

            modelViewers.forEach(modelViewer => {
                const boundingRect = modelViewer.getBoundingClientRect();
                const offsetX = event.clientX - boundingRect.left;
                const percentageX = (offsetX / boundingRect.width) * 100;

                const rotationSpeed = 1;

                modelViewer.cameraOrbit = `${percentageX * rotationSpeed}deg auto auto`;
            });
        }, 50)); // Adjust the throttle interval as needed
    }

    // Throttle function to limit the frequency of function calls
    function throttle(func, limit) {
        let inThrottle;
        return function () {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    // Get all card elements and apply the interaction functions
    const cards = document.querySelectorAll('.card');
    cards.forEach(handleModelInteraction);

    // Handle model viewer rotation based on mouse movement
    handleModelViewerRotation();
});



//modal
// document.addEventListener("DOMContentLoaded", function () {
//     var cards = document.querySelectorAll('.common-card');
//     var modal = $('#modelModal');

//     cards.forEach(function (card, index) {
//         card.addEventListener('click', function () {
//             // Set content or other dynamic changes based on card or index if needed

//             modal.modal('show');
//         });
//     });
// });


// modal 
$(document).ready(function () {
    $('#allModelsModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var modelSrc = button.data('model-src'); // Extract info from data-* attributes
        var modalModelContainer = $('#modal_model_container');

        // Clear previous content
        modalModelContainer.empty();

        // Add the model-viewer to the modal
        modalModelContainer.append('<model-viewer src="' + modelSrc + '" camera-controls auto-rotate id="modal_model" style="width: 100%; height: 400px;" exposure="1.0" shadow-intensity="1.5" background-color="#f0f0f0" shadow-softness="0.5" loading="lazy" poster="<?php echo esc_url(get_template_directory_uri()) ?>/forerunner_car_poster.jpg"></model-viewer>');
    });
});