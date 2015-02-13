=== Plugin Name ===
Contributors: mebjas
Tags: CSRF, security
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Cross Site Request Forgery (CSRF) is a common attack and several plugins in this repository are vulnerable to it. Installing this, help you mitigate CSRF in your wordpress weblog.

== Description ==

**WP CSRF Protector** is based on **[OWASP CSRF Protector]()** php aims at providing full proof CSRF Protection to Wordpress. Current CSRF mitigation in wordpress requires the plugin developers to call a method to attach a nonce to the HTML output, so if a developer (intensionally or unintensionally) leaves that part, it leaves the plugin and thus the whole admin panel vulnerable to CSRF.

On the other hand following the principle of OWASP CSRF Protector, this plugin once installed, will provide complete CSRF Mitigation without having to change a single line of code. So if you install this plugin, your blog will be safe despite having another vulnerable plugin (to CSRF) installed.

WP CSRF Protector mitigates CSRF at:
1. Any HTML Forms
2. AJAX Requests
3. Dynamically created requests
4. All POST & selected GET requests


== Installation ==

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

