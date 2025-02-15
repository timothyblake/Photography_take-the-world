
# Photography Portfolio Website

## Overview
A WordPress-based photography portfolio website that showcases travel photographs from various locations around the world. The website automatically pulls and displays images from my Flickr profile albums through a custom WordPress theme.

## Features
- WordPress-powered content management
- Custom theme development
- Dynamic photo gallery integration with Flickr API
- Responsive image grid layout
- Location-based photo collections
- Automatic updates when new photos are added to Flickr albums
- Mobile-friendly design

## Technical Stack
- CMS: WordPress
- Theme: Custom WordPress theme
- Frontend: HTML, CSS, JavaScript, PHP
- Photo Integration: Flickr API
- Image CDN: Flickr's content delivery network

## WordPress Theme Setup
1. Install WordPress
2. Upload the theme to wp-content/themes/
3. Activate the theme in WordPress admin
4. Configure Flickr API credentials in theme settings
5. Customize theme appearance through WordPress customizer

## Theme Configuration
```php
// theme-config.php example
define('FLICKR_API_KEY', 'your_api_key');
define('FLICKR_USER_ID', 'your_user_id');
define('FLICKR_ALBUM_IDS', ['album1', 'album2']);
```

## Usage
The WordPress theme automatically fetches and displays photos from specified Flickr albums. To add new photos:
1. Upload photos to your Flickr account
2. Add them to the relevant album
3. The website will automatically update with new content

## Theme Customization
The theme can be customized through:
- WordPress Customizer
- Theme Options Panel
- Custom CSS
- Template modifications

## Contributing
Feel free to submit issues and enhancement requests.

## License
[Your chosen license]

## Contact
For any queries, reach out at [your contact information]
