## esoForum for Projects
***Projects* (esoForum for Projects) is a web forum software** created for the sandbox discussion site [esoForum](https://esotalk.net) with which anyone can easily **create a functional and speedy forum.**  It's a roughly 200¹ KB ZIP (120² KB GZIP) download.
<br>
<br>
![](https://image.ibb.co/g8KXuq/whole.png)

*Projects* is based off the now-defunct [esoTalk](#) forum software, created by Simon and [Toby Zerner](http://tobyzerner.com) — so remember that this isn't affiliated with the original project. Current development is provided by [esoForum](https://esotalk.net) moderators and administrators.

### Creating your own forum
**It's very easy to create your own forum** and doesn't require much (if any) command-line experience.  **For an extremely novice tutorial, see this documentation page** but otherwise dependencies are specified below.

1. A recent (latest, recommended) version of **MySQL** and an empty database.
2. **PHP 5.3-5.6** as version seven is not yet supported.
3. **PHP GD** for scaling avatars.

**PHP GD isn't *required*** but otherwise your members will have to upload their avatars at an exact 200x200 resolution.

If you're completely inexperienced with server hosting, we recommend [DigitalOcean](https://www.digitalocean.com/pricing/).  esoForum is currently held up by a $15/mo droplet running [Ubuntu 14.04](http://releases.ubuntu.com/14.04/) and a basic [LAMP stack](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-14-04).

**For a production forum, you should serve all traffic over TLS/HTTPS.**  This can easily be done by installing [LetsEncrypt](https://letsencrypt.org/).  esoProjects requires no additional configuration for HTTPS/TLS other than changing the URL in your `config.php` from `http://example.com` -> `https://example.com`.

**If all this sounds like a foreign language to you**, we've written some nifty tutorials for novice forum admins.

> **Note:** `php-gd` is highly recommended, or the software will not be able to scale images, requiring users to upload their profile pictures at an exact `100x100` resolution.  The previously-linked LAMP guide includes `php-gd` installation.

#### Installing esoProjects
Download the latest stable release, unzip it, and place its contents within `/var/www/html` (or your alternate webserver's equivalent).  Then, `chmod 777` the `html` folder's contents (`cd ../var/www`; `chmod 777 -R html`).  You'll also need to create an empty MySQL database for your server.

Once that's done, visit your server through a browser (`http://12.23.45.56`) and follow the setup wizard.  You'll have to specify a MySQL account with access to the database, pick the name of your forum, and specify the forum admin's desired credentials.  **All these settings can be later modified in the `config/config.php`.**
