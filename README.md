## esoForum for Projects
***Projects* (esoForum for Projects) is a web forum software** created for the sandbox discussion site [esoForum](https://esotalk.net) with which anyone can easily **create a functional and speedy forum.**  It's a roughly 200¹ KB ZIP (120² KB GZIP) download.
<br>
<br>
![](https://image.ibb.co/g8KXuq/whole.png)

*Projects* is based off the now-defunct [esoTalk](#) forum software, created by Simon and [Toby Zerner](http://tobyzerner.com) — so remember that this isn't affiliated with the original project. Current development is provided by [esoForum](https://esotalk.net) moderators and administrators.

### Creating your own forum
**It's very easy to create your own forum** and doesn't require much (if any) command-line experience.  **For an extremely novice tutorial, see [this tutorial](https://github.com/esoForum/esoProjects/wiki/The-novice's-guide-to-creating-an-esoProject)** but otherwise dependencies are specified below.

1. **[Apache](https://apache.org)** or [lighttpd](https://www.lighttpd.net).
2. A recent (latest, recommended) version of **MySQL** and an empty database.
3. **PHP 5.3-5.6** as version seven is not yet supported.
4. **PHP GD** for scaling avatars.

**PHP GD isn't *required*** but otherwise your members will have to upload their avatars at an exact 200x200 resolution.

If you're completely inexperienced with server hosting, we recommend [DigitalOcean](https://www.digitalocean.com/pricing/).  esoForum is currently held up by a $15/mo droplet running [Ubuntu 14.04](http://releases.ubuntu.com/14.04/) and a basic [LAMP stack](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-14-04).

**For a production forum, you should serve all traffic over HTTPS/TLS.**  This can easily be done by installing [LetsEncrypt](https://letsencrypt.org/).  esoProjects requires no additional configuration for HTTPS/TLS other than changing the URL in your `config.php` from `http://example.com` -> `https://example.com`.
