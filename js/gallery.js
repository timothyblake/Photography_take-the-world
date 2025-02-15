jQuery(document).ready(function($) {
    function initUnsplashFeed() {
        const feed = document.querySelector('.unsplash-feed');
        if (feed) {
            fetchImages();
        }
    }

    async function fetchImages() {
        try {
            const response = await fetch(`https://api.unsplash.com/photos/random?client_id=${unsplashConfig.accessKey}&count=12`);
            const images = await response.json();
            
            const gallery = document.getElementById('imageGallery');
            images.forEach(image => {
                const col = document.createElement('div');
                col.className = 'col-md-4 col-xl-4 col-xxl-3';
                col.innerHTML = `
                    <div class="item-wrapper h-100">
                        <div class="image-item">
                            <a href="${image.urls.full}" data-lightbox="gallery" data-title="${image.description || 'Unsplash Image'}">
                                <img src="${image.urls.regular}" alt="${image.description || 'Unsplash Image'}" class="img-fluid">
                            </a>
                        </div>
                        <h3 class="mt-2">${image.user.name}</h3>
                    </div>
                `;
                gallery.appendChild(col);
            });
        } catch (error) {
            console.error('Error fetching images:', error);
        }
    }

    initUnsplashFeed();
});