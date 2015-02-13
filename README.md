WP CSRF Protector
======================
**WP CSRF Protector** is based on **[OWASP CSRF Protector php](https://github.com/mebjas/CSRF-Protector-PHP)** aims at providing full proof CSRF Protection to **wordpress**. Current CSRF mitigation in wordpress requires the plugin developers to call a method to attach a nonce to the HTML output, so if a developer (intensionally or unintensionally) leaves that part, it leaves the plugin and thus the whole admin panel vulnerable to CSRF.

On the other hand following the principle of OWASP CSRF Protector, this plugin once installed, will provide complete CSRF Mitigation without having to change a single line of code. So if you install this plugin, your blog will be safe despite having another vulnerable plugin (to CSRF) installed.

