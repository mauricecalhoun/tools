Tools
=============
borrowed from
* [thoughtbot/laptop](https://github.com/thoughtbot/laptop)
* [newism/osx-dev-tools](https://github.com/newism/osx-dev-tools)

Tools is a script to set up your Max OS X laptop as a web development machine.

Requirements
------------

* OSX Mountain Lion (This is what I'm using so it's the only version I'm targeting, sorry)
* XCode 4.4
* [X11](http://xquartz.macosforge.org/trac/wiki)
* [MySQL](http://www.mysql.com/downloads/mysql/)

Install
-------

Run the script:

    git clone https://github.com/mauricecalhoun/tools.git
    ./tools/install


What it sets up
---------------

* SSH public key (for authenticating with services like Github and Heroku)
* Homebrew (for managing operating system libraries)
* Git
* Git Flow
* PhantomJS (For headless JavaScript testing)
* Ack (for finding things in files)
* ImageMagick (for cropping and resizing images)
* RVM (for managing versions of the Ruby programming language)
* Ruby language (for writing general-purpose code)
* Bunch of commonly used gems (Sass, Compass, Stitch etc...)
* Node (The awesome Javascript runtime)
* NPM (Node package manager)
* Coffeescript
* Bunch of commonly-used node packages
* PHP 5.4 w/ intl, apc, xdebug, twig and composer (https://github.com/josegonzalez/homebrew-php)
* POW Ruby and PHP
* POW Rails
* and more....

It should take about 30 minutes for everything to install, depending on your machine.

What it doesn't setup
---------------------

* MySQL
* Apache
* Enabling PHP in Apache
* Setting up VirtualHosts
* Apps

The installer doesn't do these things because it's a) Already installed in MacOSX by default or b) It needs admin rights. 

Setting up Apache
-----------------

Find this line in `/etc/apache2/httpd.conf` starting with:

    LoadModule php5_module /some/path

And replace the path with:
    # PHP 5.4
    LoadModule php5_module /usr/local/opt/php54/libexec/apache2/libphp5.so
    
Add this line to the bottom of the file:

    Include /private/etc/apache2/extra/httpd-vhosts.conf

Recommended Apps
----------------

* [Chrome](https://www.google.com/chrome/)
* [Firefox](http://www.mozilla.org/en-US/firefox/new/)
* [Sequel Pro](http://www.sequelpro.com/)
* [Brackets](http://www.brackets.io/)
