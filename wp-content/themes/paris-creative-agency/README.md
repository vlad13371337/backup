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

## Customisation Tips

- Update contact details in `front-page.php` to match your agency information.
- Replace hard-coded service and portfolio arrays with custom post types or Advanced Custom Fields for dynamic content.
- Extend `functions.php` to enqueue additional scripts or register widgets as needed.
