// JavaScript for dark mode toggle
document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.getElementById('darkModeToggle');
    
    // Check for saved user preference
    const darkMode = localStorage.getItem('darkMode');
    
    // Set initial theme
    if (darkMode === 'enabled') {
      document.documentElement.setAttribute('data-theme', 'dark');
    }
    
    darkModeToggle.addEventListener('click', () => {
      // Toggle dark mode
      if (document.documentElement.getAttribute('data-theme') === 'dark') {
        document.documentElement.removeAttribute('data-theme');
        localStorage.setItem('darkMode', null);
      } else {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('darkMode', 'enabled');
      }
    });
  });

document.addEventListener('DOMContentLoaded', function() {
  let albumId;
  if (document.querySelector('.spain-black-madona')) {
    albumId = '72177720321502467'; // Replace with the album ID for Spain Black Madona
  } else if (document.querySelector('.singapore-album')) {
    albumId = '72177720315696953'; // Replace with the album ID for Singapore Album
  } else if (document.querySelector('.vietnam-album')) {
    albumId = '72157710084219487'; // Replace with the album ID for Vietnam Album
  } else if (document.querySelector('.cyprus-album')) {
    albumId = '72157707776585095'; // Replace with the album ID for Cyprus Album
  } else if (document.querySelector('.cuba-album')) {
    albumId = '72157661850597657'; // Replace with the album ID for Cuba Album
  } 
  else if (document.querySelector('.mexico-album')) {
    albumId = '72177720302562773'; // Replace with the album ID for Cuba Album
  } 
  else if (document.querySelector('.corfu-album')) {
    albumId = '72157661500791078'; // Replace with the album ID for Cuba Album
  } 
  else if (document.querySelector('.singapore-zoo-album')) {
    albumId = '72177720315683966'; // Replace with the album ID for Cuba Album
  } 
  else if (document.querySelector('.costa-rica-album')) {
    albumId = '72157711600085536'; // Replace with the album ID for Costa Rica Album
  }  else if (document.querySelector('.florida-album')) {
    albumId = '72177720318517831'; // Replace with the album ID for FloridaAlbum
  }  else if (document.querySelector('.majorca-album')) {
    albumId = '72177720316546614'; // Replace with the album ID for Majorca Album
  }  else if (document.querySelector('.tarragona-album')) {
    albumId = '72177720321456896'; // Replace with the album ID for Cuba Album
  } 
  else if (document.querySelector('.phucket-album')) {
    albumId = '72177720307823547'; // Replace with the album ID for Singapore Zoo Album
  }else if (document.querySelector('.chiang-mai-album')) {
    albumId = '72177720322630409'; // Replace with the album ID for Singapore Zoo Album
  } else if (document.querySelector('.batman-unmsaked-album')) {
    albumId = '72177720322434550'; // Replace with the album ID for Singapore Zoo Album
  } else if (document.querySelector('.bangkok-album')) {
    albumId = '72177720322841654'; // Replace with the album ID for Bangkok Album
  }  
  

  const apiKey = 'c0f370f474c5a216959d03cb350954b1';
  const userId = '139917624@N04';

  
  // Function to fetch album photos from Flickr API
  async function getAlbumPhotos() {
    try {
      const response = await fetch(`https://www.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=${apiKey}&photoset_id=${albumId}&user_id=${userId}&format=json&nojsoncallback=1&extras=url_l,title`);
      const data = await response.json();
      return data.photoset.photo;
    } catch (error) {
      console.error('Error fetching photos:', error);
      return [];
    }
  }

  // Function to create an image element for each photo
  function createImageElement(photo) {
    const columnDiv = document.createElement('div');
    columnDiv.className = 'col-md-4 col-xl-4 col-xxl-3';

    const itemWrapper = document.createElement('div');
    itemWrapper.className = 'item-wrapper h-100';

    const imageContainer = document.createElement('div');
    imageContainer.className = 'image-item';

    const img = document.createElement('img');
    img.src = photo.url_l;
    img.alt = photo.title;

    const titleHeading = document.createElement('h3');
    titleHeading.textContent = photo.title;

    imageContainer.appendChild(img);
    itemWrapper.appendChild(imageContainer);
    itemWrapper.appendChild(titleHeading);
    columnDiv.appendChild(itemWrapper);

    // Add click event listener to open lightbox
    imageContainer.addEventListener('click', () => openLightbox(photo));

    return columnDiv;
  }
  

  // Function to open the lightbox with the selected photo
  function openLightbox(photo) {
    const lightbox = document.querySelector('.lightbox');
    const lightboxImg = document.querySelector('.lightbox-content');
    const imageTitle = document.querySelector('.image-title');

    lightboxImg.src = photo.url_l;
    imageTitle.textContent = photo.title;
    lightbox.style.display = 'block';
  }

  // Function to initialize the lightbox functionality
  function initializeLightbox() {
    const lightbox = document.querySelector('.lightbox');
    const closeButton = document.querySelector('.close-lightbox');

    // Add click event listener to close the lightbox
    closeButton.addEventListener('click', () => {
      lightbox.style.display = 'none';
    });

    // Add click event listener to close the lightbox when clicking outside the image
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) {
        lightbox.style.display = 'none';
      }
    });
  }

  // Function to initialize the photo gallery
  async function initialize() {
    const photos = await getAlbumPhotos();
    const imageGrid = document.querySelector('.image-grid');

    // Create image elements for each photo and append them to the image grid
    photos.forEach(photo => {
      const imageElement = createImageElement(photo);
      imageGrid.appendChild(imageElement);
    });

    // Initialize the lightbox functionality
    initializeLightbox();
  }

  // Call the initialize function to start the photo gallery
  initialize();



  // RECENT FLICKR PHOTOS

   // Function to fetch recent photos from Flickr API
   async function getRecentPhotos() {
    try {
      const response = await fetch(`https://www.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=${apiKey}&user_id=${userId}&format=json&nojsoncallback=1&extras=url_l,title`);
      const data = await response.json();
      return data.photos.photo;
    } catch (error) {
      console.error('Error fetching recent photos:', error);
      return [];
    }
  }

  // Function to initialize the recent photos gallery
  async function initializeRecentPhotos() {
    if (document.querySelector('.flickrgallery')) {
      const photos = await getRecentPhotos();
      const imageGrid = document.querySelector('.flickrgallery');

      // Create image elements for each photo and append them to the grid
      photos.forEach(photo => {
        const imageElement = createImageElement(photo);
        imageGrid.appendChild(imageElement);
      });

      // Initialize the lightbox functionality
      initializeLightbox();
    }
  }

  // Call the initialize function
  initializeRecentPhotos();

});


// Scroll to the 
function initializeScrollButton() {
  const scrollBtn = document.getElementById("scrollBtn");

  // Show button when user scrolls down 20px from top
  window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  };

  // Scroll to top when button is clicked
  scrollBtn.addEventListener("click", function() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
}

initializeScrollButton();




// JavaScript
const scrollBtn = document.getElementById("scrollBtn");

// Show button when user scrolls down 20px from top
window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollBtn.style.display = "block";
  } else {
    scrollBtn.style.display = "none";
  }
};

// Scroll to top when button is clicked
scrollBtn.addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});



// MOVE PHOTO GALLERY IN ON SINGLE POST PAGE


// Function to move photo gallery inside content-wrap
function movePhotoGallery() {
    const photoGallery = document.querySelector('.photo-gallery');
    const contentWrap = document.querySelector('.content-wrap');
    
    if (photoGallery && contentWrap) {
      // Clone the photo gallery
      const galleryClone = photoGallery.cloneNode(true);
      
      // Remove the original photo gallery
      photoGallery.remove();
      
      // Append the clone to content-wrap
      contentWrap.appendChild(galleryClone);
    }
  }
  
  // Call the function when DOM is loaded
  document.addEventListener('DOMContentLoaded', function() {
    movePhotoGallery();
  });



  
 // HAMBURGER MENU
document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.querySelector('.hamburger-menu');
  const fullscreenMenu = document.querySelector('.fullscreen-menu');
  let isMenuOpen = false;

  hamburger.addEventListener('click', () => {
      isMenuOpen = !isMenuOpen;
      
      // Toggle hamburger animation
      hamburger.classList.toggle('change');
      
      // Toggle menu visibility
      fullscreenMenu.classList.toggle('active');
      
      // Prevent body scrolling when menu is open
      document.body.style.overflow = isMenuOpen ? 'hidden' : 'auto';
  });

  // Close menu when clicking on a link
  const menuLinks = document.querySelectorAll('.fullscreen-menu nav ul li a');
  menuLinks.forEach(link => {
      link.addEventListener('click', () => {
          isMenuOpen = false;
          hamburger.classList.remove('change');
          fullscreenMenu.classList.remove('active');
          document.body.style.overflow = 'auto';
      });
  });
});

