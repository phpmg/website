# PHPMG Website

## Setup environment

You must have [Vagrant](https://vagrantup.com/) and [Composer](http://getcomposer.org/) installed to run this application. With these two pre-requisites instaled, run the following lines on your terminal.

`$ composer install`
`$ vagrant up`

This will create a Vagrant Virtual Machine. To access it, just run `vagrant ssh`.

To access the website, edit your `/etc/hosts` file, adding this: `192.168.10.12 site.phpmg.dev`

Go to [site.phpmg.dev](http://site.phpmg.dev/) at your browser.
