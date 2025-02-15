


<?php
/*
Template Name: Unsplash Gallery
*/

get_header(); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        .image-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .image-item img:hover {
            transform: scale(1.05);
        }
    </style>

<div class="container">
    <div class="unsplash-feed row g-4" id="imageGallery"></div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
const accessKey = '31c23c40f8a048d6fc0e45dd58fb7b70fbeae4e085810d1c39c856aa8118e573';
const username = 'creativenerds';
const photoCount = 50; // Increase the number of photos displayed

function initUnsplashFeed() {
    const feed = document.querySelector('.unsplash-feed');
    if (feed) {
        fetchImages();
    }
}

async function fetchImages() {
    try {
        const response = await fetch(`https://api.unsplash.com/users/${username}/photos?client_id=${accessKey}&count=${photoCount}`);
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

document.addEventListener('DOMContentLoaded', initUnsplashFeed);
</script>

<?php

get_footer(); ?>