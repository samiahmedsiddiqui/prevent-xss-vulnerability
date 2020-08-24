=== Prevent XSS Vulnerability ===
Contributors: sasiddiqui
Tags: attack, cross-site scripting, security, vulnerability, xss, self-xss
Requires at least: 3.5
Tested up to: 5.5
Stable tag: 1.0.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

This plugin provides the functionality for `Reflected XSS` and `Self-XSS`.

For Reflected XSS, it checks the URL and redirects it if you enabled the `Enable Blocking` option and URL contains any Vulnerable code in it. It only block some parameters which are not allowed in URL and shown Block Parameters section. You can skip some of the parameters from it if you still like them to be used.

To provide more security, `Prevent XSS Vulnerability` also escape the HTML in the `$_GET` parameter which is commonly used to get parameters in PHP from the URL and print them in the HTML. This way, HTML properties will not work if anyone provided it in the URL.

There are many ways by which the plugin can be tested but it may varies for different sites according to their structure and development functionality.

=== Block Parameters ===

`Prevent XSS Vulnerability` block the following parameters in the URL if enabled from the Plugin Settings.

* Opening Round Bracket `(`
* Closing Round Bracket `)`
* Less than Sign `<`
* Greater than Sign `>`
* Opening Square Bracket `[`
* Closing Square Bracket `]`
* Opening Curly Bracket `{`
* Pipe or Vertical Bar `|`
* Closing Curly Bracket `}`

=== Encode Parameters ===

`Prevent XSS Vulnerability` encode the following parameters in the URL if enabled from the Plugin Settings.

* Exclamation Mark `!`
* Double Quotation `"`
* Single Quotation `'`
* Opening Round Bracket `(`
* Closing Round Bracket `)`
* Asterisk Sign `*`
* Less than Sign `<`
* Greater than Sign `>`
* Grave Accent <code>`</code>
* Cap Sign `^`
* Opening Square Bracket `[`
* Closing Square Bracket `]`
* Opening Curly Bracket `{`
* Pipe or Vertical Bar `|`
* Closing Curly Bracket `}`

=== Escape HTML in `$_GET` Variable ===

`Prevent XSS Vulnerability` escape HTML  in `$_GET` variable. `$_GET` variable is mostly used to put the values in HTML from the URL. This Check is quite useful if your site using/getting anything from the URL and printing it in HTML. It secures your Search and other sections as per your site functionality.

> NOTE: Make sure to check your forms after activating the plugin and if you have woocommerce site then please also check the cart and checkout process.

=== Bug reports ===

Bug reports for `Prevent XSS Vulnerability` are [welcomed on GitHub](https://github.com/yasglobal/prevent-xss-vulnerability). Please note GitHub is not a support forum, and issues that aren't properly qualified as bugs will be closed.

== Installation ==

This process defines you the steps to follow either you are installing through WordPress or Manually from FTP.

**From within WordPress**

1. Visit 'Plugins > Add New'
2. Search for Prevent XSS Vulnerability
3. Activate Prevent XSS Vulnerability from your Plugins page.
4. Go to "after activation" below.

**Manually**

1. Upload the `prevent-xss-vulnerability` folder to the `/wp-content/plugins/` directory
2. Activate Prevent XSS Vulnerability through the 'Plugins' menu in WordPress
3. Go to "after activation" below.

**After activation**

1. Navigate to the `Prevent XSS Vulnerability` page from the Admin Dashboard
2. Make the changes as per your site functionality
3. You're done!

== Screenshots ==

* It removes the parameters from the URL which are used in XSS Attack and redirects the user (Recommended).

* It encodes the parameters from the URL which are used in XSS Attack.

* It escapes the HTML from the `$_GET` PHP variable which is mostly used to read the data from the URL (Recommended).

* Add the message in developer console for the user to alert about the XSS attack.

* Show message in developer console to alert user about the Self-XSS attack. This message can be customized from the settings page.

== Frequently Asked Questions ==

= Q. Why should I install this plugin? =
A. Installing this plugin is the easiest way to prevent your site from XSS Vulnerability.

= Q. Does this plugin escape HTML in printing search? =
A. Yes, this plugin escape HTML in `$_GET` variable which is mostly use to print the data from the URL to HTML. If your site is using `$_GET` then it is safe and the HTML will be escaped otherwise you need to check.

= Q. Does this plugin has any conflict with any other plugin? =
A. No, this plugin doesn't have any conflict with any plugin.

== Changelog ==

= 1.0.0 - Aug 24, 20 =

  * Enhancements
    * Escape array values
    * Set headers to prevent caching before redirect
    * Applied PHP Standard and removed couple of discouraged methods

= 0.3.5 - May 14, 19 =

  * Fixing issue with `update_option`

= 0.3.4 - May 11, 19 =

  * Added `wp_kses` to make the textarea messages more secure

= 0.3.3 - Apr 08, 19 =

  * Added `wp_kses` to make the warning message secure

= 0.3.2 - Mar 21, 19 =

  * Added Upgrade Notice above the Self XSS

= 0.3.1 - Mar 19, 19 =

  * Enhancements
    * Changing function name to be more generic for `Self-XSS` Functionality

= 0.3.0 - Mar 14, 19 =

  * Enhancements
    * Added Self-XSS Functionality
  * Bugs
    * Fixed wrong protocol issue on redirecting URL

= 0.2.1 - Feb 27, 19 =

  * Bugs
    * Used Absolute URL to redirect instead of Relative URL to avoid site redirection issues

= 0.2 - Dec 02, 18 =

  * Enhancements
    * Added Escaped HTML Feature in `$_GET` variable
    * Optimized Function to have better performance

= 0.1 - Aug 24, 17 =

  * First release on wordpress.org.
