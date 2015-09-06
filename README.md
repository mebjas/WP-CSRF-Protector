WP CSRF Protector [![todofy badge](https://todofy.org/b/mebjas/WP-CSRF-Protector)](https://todofy.org/r/mebjas/WP-CSRF-Protector)
======================
**WP CSRF Protector** is based on **[OWASP CSRF Protector php](https://github.com/mebjas/CSRF-Protector-PHP)** aims at providing full proof CSRF Protection to **wordpress**. Current CSRF mitigation in wordpress requires the plugin developers to call a method to attach a nonce to the HTML output, so if a developer (intensionally or unintensionally) leaves that part, it leaves the plugin and thus the whole admin panel vulnerable to CSRF.

On the other hand following the principle of OWASP CSRF Protector, this plugin once installed, will provide complete CSRF Mitigation without having to change a single line of code. So if you install this plugin, your blog will be safe despite having another vulnerable plugin (to CSRF) installed.

How to test / install
=======================
 - Clone this repo `https://github.com/mebjas/WP-CSRF-Protector.git`
 - Compress the directory
 - Go to wordpress admin panel > plugins > add new > upload
 - Upload this zipped file
 - Install
 - Activate
 
**Yey!! you just got CSRF Protected**

References
=================
1. Exploit-db articles on `wordpress` + `CSRF` --> [link](http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=wordpress&filter_exploit_text=csrf&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=)

