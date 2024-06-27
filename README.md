# Current Year Shortcode WordPress Plugin

## Description
The Current Year Shortcode plugin adds a simple shortcode `[year]` to WordPress, allowing you to easily display the current year anywhere in your posts, pages, or widgets.

## Installation
1. Upload the `current-year-shortcode` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. You can now use the shortcode `[year]` in your posts, pages, or widgets to display the current year.

## Usage
To display the current year, simply insert the `[year]` shortcode into any post, page, or widget content.

Example usage:
- In a post or page: `[year]`
- In a widget (Text widget): `[year]`

## Frequently Asked Questions
### How does this plugin work?
This plugin registers a shortcode `[year]` which, when used in your content, is replaced with the current year when the content is displayed.

### Can I customize the output format of the year?
Currently, the plugin outputs the current year in the format YYYY (e.g., 2024). If you need a different format, you can modify the `current_year_shortcode` function in the plugin file (`current-year-shortcode.php`).

## Credits
- **Author:** Joel Gratcyk
- **Author URI:** [https://joel.gr](https://joel.gr)

## Changelog
### 1.0
- Initial release

## License
This plugin is licensed under the GPLv2 or later. See the `LICENSE` file for details.
