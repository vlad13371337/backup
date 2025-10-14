# Paris Creative Agency — WordPress Theme

A lightweight custom theme tailored for an English-language advertising agency based in Paris, France. The layout highlights services, recent collaborations, testimonials, and contact details while leveraging WordPress features such as featured images and custom menus.

## Features

- Sticky navigation with a primary menu location.
- Hero section with call-to-action and support for featured images.
- Service, portfolio, testimonial, and contact sections populated via PHP arrays for quick setup.
- Responsive design using CSS grid and fluid typography.
- Translation-ready text domain: `paris-creative-agency`.

## Installation

1. Copy the `paris-creative-agency` folder into your WordPress installation under `wp-content/themes/`.
2. Log in to the WordPress admin dashboard and navigate to **Appearance → Themes**.
3. Activate the **Paris Creative Agency** theme.
4. Optionally assign a custom menu to the "Primary Menu" location and set a featured image for the front page to replace the default hero image.

## Downloading the theme

There are a few easy ways to obtain the theme files:

- **Download the ZIP archive**: If you are viewing this repository on GitHub, click the green **Code** button and choose **Download ZIP**. Extract the archive and move the `paris-creative-agency` folder into `wp-content/themes/`.
- **Clone with Git**: Run `git clone <repository-url>` and copy the `wp-content/themes/paris-creative-agency` directory into your WordPress site.
- **Upload via WordPress**: Compress the `paris-creative-agency` directory into a `.zip`, then go to **Appearance → Themes → Add New → Upload Theme** in your WordPress dashboard and upload the archive.

## Customisation Tips

- Update contact details in `front-page.php` to match your agency information.
- Replace hard-coded service and portfolio arrays with custom post types or Advanced Custom Fields for dynamic content.
- Extend `functions.php` to enqueue additional scripts or register widgets as needed.
