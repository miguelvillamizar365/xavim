/**
* Template Name: iPortfolio
* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
* Updated: Jun 29 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

const links = document.getElementsByClassName('my-link');
for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(event) {
      const clickedUrl = event.target.href;
      const videoFrame = document.getElementById('videoFrame');
      videoFrame.src = clickedUrl;
    });
  }
  

  
const newsViewer = document.getElementsByClassName('newsViewer');
for (let i = 0; i < newsViewer.length; i++) {
    newsViewer[i].addEventListener('click', function(event) {
      const anchor = event.currentTarget;
      const clickedUrl = anchor.href;
      const newsFrame = document.getElementById('newsFrame');
      const newsTitle = document.getElementById('newsModalTitle');
      const newsExcerpt = document.getElementById('newsModalExcerpt');
      newsFrame.src = clickedUrl;
      if (newsTitle) {
        newsTitle.textContent = anchor.dataset.title || '';
      }
      if (newsExcerpt) {
        newsExcerpt.textContent = anchor.dataset.excerpt || '';
      }
    });
  }
  
  
  /**
   * Header toggle
   */
  const headerToggleBtn = document.querySelector('.header-toggle');

  function headerToggle() {
    document.querySelector('#header').classList.toggle('header-show');
    headerToggleBtn.classList.toggle('bi-list');
    headerToggleBtn.classList.toggle('bi-x');
  }
  headerToggleBtn.addEventListener('click', headerToggle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.header-show')) {
        headerToggle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Init typed.js
   */
  const selectTyped = document.querySelector('.typed');
  if (selectTyped) {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Animate the skills items on reveal
   */
  let skillsAnimation = document.querySelectorAll('.skills-animation');
  skillsAnimation.forEach((item) => {
    new Waypoint({
      element: item,
      offset: '80%',
      handler: function(direction) {
        let progress = item.querySelectorAll('.progress .progress-bar');
        progress.forEach(el => {
          el.style.width = el.getAttribute('aria-valuenow') + '%';
        });
      }
    });
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }

    function updatePhotoByResolution() {
    const myPhotohero = document.getElementById('myPhotohero-bg');

    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotohero.src = 'assets/img/hero-430x932.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotohero.src = 'assets/img/hero-430x932.jpg'; // Replace with your image
    } else {
      myPhotohero.src = 'assets/img/hero-bg.jpg'; // Optional: fallback image
    }

    const myPhotobanner8 = document.getElementById('myPhotobanner8');

    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner8.src = 'assets/img/banner/banner8_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner8.src = 'assets/img/banner/banner8_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner8.src = 'assets/img/banner/banner8.jpg'; // Optional: fallback image
    }

    
    const myPhotobanner7 = document.getElementById('myPhotobanner7');

    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner7.src = 'assets/img/banner/banner7_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner7.src = 'assets/img/banner/banner7_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner7.src = 'assets/img/banner/banner7.jpg'; // Optional: fallback image
    }

    const myPhotobanner6 = document.getElementById('myPhotobanner6');
    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner6.src = 'assets/img/banner/banner6_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner6.src = 'assets/img/banner/banner6_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner6.src = 'assets/img/banner/banner6.jpg'; // Optional: fallback image
    }

    
    const myPhotobanner5 = document.getElementById('myPhotobanner5');
    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner5.src = 'assets/img/banner/banner5_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner5.src = 'assets/img/banner/banner5_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner5.src = 'assets/img/banner/banner5.jpg'; // Optional: fallback image
    }
    
    const myPhotobanner4 = document.getElementById('myPhotobanner4');
    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner4.src = 'assets/img/banner/banner4_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner4.src = 'assets/img/banner/banner4_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner4.src = 'assets/img/banner/banner4.jpg'; // Optional: fallback image
    }

    
    const myPhotobanner3 = document.getElementById('myPhotobanner3');
    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner3.src = 'assets/img/banner/banner3_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner3.src = 'assets/img/banner/banner3_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner3.src = 'assets/img/banner/banner3.jpg'; // Optional: fallback image
    }
    
    
    const myPhotobanner2 = document.getElementById('myPhotobanner2');
    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner2.src = 'assets/img/banner/banner2_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner2.src = 'assets/img/banner/banner2_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner2.src = 'assets/img/banner/banner2.jpg'; // Optional: fallback image
    }
    
    const myPhotobanner1 = document.getElementById('myPhotobanner1');
    if (window.innerWidth <= 430 && window.innerHeight <= 932) {
      myPhotobanner1.src = 'assets/img/banner/banner1_430x930.jpg'; // Replace with your image
    }
    else if (window.innerWidth <= 1220 && window.innerHeight <= 2652) {
      myPhotobanner1.src = 'assets/img/banner/banner1_430x930.jpg'; // Replace with your image
    } else {
      myPhotobanner1.src = 'assets/img/banner/banner1.jpg'; // Optional: fallback image
    }
  }
   
  window.addEventListener('load', updatePhotoByResolution);
  window.addEventListener('resize', updatePhotoByResolution);
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

    const videoModal = document.getElementById('videoModal');
    
    videoModal.addEventListener('hide.bs.modal', () => {
      videoFrame.src = '';
    });
  
    document.addEventListener('DOMContentLoaded', function() {
    // Add loading class to images initially
    document.querySelectorAll('.news-card-image').forEach(function(imageContainer) {
        imageContainer.classList.add('loading');
    });

    // Lazy loading animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'slideInUp 0.6s ease forwards';
            }
        });
    }, observerOptions);

    // Observe all news cards
    document.querySelectorAll('.news-card').forEach(function(card) {
        observer.observe(card);
    });
});

// Add slide-in animation
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);

            const video = $('#html5Video')[0];
            const playOverlay = $('#playOverlay');
            const loading = $('#loading');
            const statusMessage = $('#statusMessage');

            // Function to show status message
            function showStatus(message, duration = 2000) {
                statusMessage.text(message).fadeIn();
                setTimeout(() => {
                    statusMessage.fadeOut();
                }, duration);
            }

            // Function to attempt autoplay
            function attemptAutoplay() {
                const playPromise = video.play();

                if (playPromise !== undefined) {
                    playPromise.then(() => {
                        // Autoplay successful
                        console.log('Video autoplay successful');
                        playOverlay.addClass('hidden');
                        loading.hide();
                        showStatus('Video playing');
                    }).catch((error) => {
                        // Autoplay failed - show play button
                        console.log('Autoplay prevented:', error);
                        playOverlay.removeClass('hidden');
                        loading.hide();
                        showStatus('Tap to play video', 3000);
                    });
                }
            }

            // Video loaded - hide loading
            video.addEventListener('loadeddata', function() {
                loading.hide();
                console.log('Video loaded');
            });

            // Video can play through
            video.addEventListener('canplaythrough', function() {
                console.log('Video can play through');
                attemptAutoplay();
            });

            // Video started playing
            video.addEventListener('playing', function() {
                playOverlay.addClass('hidden');
                console.log('Video is playing');
            });

            // Video paused
            video.addEventListener('pause', function() {
                console.log('Video paused');
            });

            // Click on overlay to play
            playOverlay.on('click', function() {
                video.play();
                $(this).addClass('hidden');
                showStatus('Playing...');
            });

            // Try to play on page load
            $(window).on('load', function() {
                attemptAutoplay();
            });

            // iOS specific: Try to play on any user interaction
            let hasInteracted = false;
            $(document).one('touchstart click', function() {
                if (!hasInteracted) {
                    hasInteracted = true;
                    if (video.paused) {
                        attemptAutoplay();
                    }
                }
            });

            // Prevent video from stopping on page visibility change
            document.addEventListener('visibilitychange', function() {
                if (!document.hidden && video.paused) {
                    video.play();
                }
            });

            // iOS: Resume video on page focus
            $(window).on('focus', function() {
                if (video.paused) {
                    video.play();
                }
            });

            // Intersection Observer for autoplay when in viewport (iOS Safari)
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            if (video.paused) {
                                attemptAutoplay();
                            }
                        }
                    });
                }, { threshold: 0.5 });

                observer.observe(video);
            }
})();

