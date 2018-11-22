## esoForum for Projects
Using *Projects* (esoForum for Projects), anyone can create their own forum—taking on the same look and feel as esoForum—for a group, organisation, or project. **It's entirely free, forkable, and downloadable.**

*Projects* uses the esoTalk framework, providing comfortable attractiveness while maintaining speedy performance.  Thanks to simplicity, both maintaining and developing third-party addons for a project are tasks accomplishable by the layperson.

![](https://image.ibb.co/gr7izq/Screen-Shot-2018-11-21-at-10-48-46-PM.png)

### Development
**Foremost credit is due to [Simon and Toby Zerner](https://tobyzerner.com)**, who originally developed esoTalk (the software upon which esoForum is built) almost a decade ago.  Now, their work is being continued in the form of this project, and the esoForum board.

Current development is brought to you by:
* ir1x (`admin`) — the founder and foremost active developer of esoForum.
* `scuba` — an early member and planner of our project.

### Requirements
esoProjects needs PHP 5 and a recent version of MySQL.
<br>
Official support is provided for Apache.  It is also tested to have worked on lighttpd.

---

If you're completely inexperienced with server hosting, we recommend DigitalOcean.  esoForum is currently held up by a $15/mo droplet running Ubuntu 14.04 (16+ does not support PHP 5) and a basic LAMP stack.

We also strongly recommend that, for production usage, your forum be served over HTTPS.  This can be easily done by installing LetsEncrypt.  esoProjects requires no additional configuration for HTTPS/TLS other than changing the URL in your `config.php` from `http://example.com` -> `https://example.com`.

**If all this sounds like a foreign language to you**, we've written some nifty tutorials for novice forum admins.

### Installation
Download the latest stable release, unzip it, and place its contents within `/var/www/html` (or your alternate webserver's equivalent).  Then, `chmod 777` the `html` folder's contents (`cd ../var/www`; `chmod 777 -R html`).  You'll also need to create an empty MySQL database for your server.

Once that's done, visit your server through a browser (`http://12.23.45.56`) and follow the setup wizard.  You'll have to specify a MySQL account with access to the database, pick the name of your forum, and specify the forum admin's desired credentials.  **All these settings can be later modified in the `config/config.php`.**
