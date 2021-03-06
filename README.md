FreeGeo API
===

[![Github made-in](https://img.shields.io/badge/Made_In-Berlin-green.svg)](#) [![Build Status](https://travis-ci.org/YupItsZac/FreeGeoAPI.svg?branch=master)](https://travis-ci.org/YupItsZac/FreeGeoAPI) [![Coverage Status](https://coveralls.io/repos/github/YupItsZac/FreeGeoAPI/badge.svg?branch=master)](https://coveralls.io/github/YupItsZac/FreeGeoAPI?branch=master)

The primary goals of the FreeGeo API are to:

 - Promote learning, and the advancement of geospatial abilities
 - Provide a completely free, and open source platform that lets developers add geo abilities to their applications

 The FreeGeo API is completely free for use, and 100% open source. This project is governed by the MIT license.

 > Note:
 > The FreeGeo API is now part of the OpenGeoNet organization, but is still the same project with the same goals.

This project is generously hosted by [DigitalOcean](http://www.digitalocean.com) at [https://freegeoapi.org](https://freegeoapi.org). You can find API docs, usage examples and details on contributing to the project there.

Contribute
===

Like most projects, the FreeGeo API is never finished. We are constantly making changes and updates to enhance the functionality, performance and security of the API. It is strongly encouraged that interested developers from anywhere in the world contribute to the project. 

######Areas of Interest

There are three areas of primary interest on this project. Each area presents it's own unique challenges, and opportunities fr contribution. Experience with the Symfony2 framework is very useful, but not required. The entire API wa sbuilt as a tool for me (@YupItsZac) to learn the framework. 

**Backend** 

The API is built on the [Symfony2 framework](https://symfony.com/doc/current/index.html). This means that the bulk of the project is written in PHP. Interested in contributing on the backend? Great! We need your help. Experience with PHP, MVC structures, routing, etc would be ideal.

**Frontend**

For the FreeGEO API, we refer to the frontend as anything rendered in the browser. This means pages on the main website, emails the API delivers, etc. This area will utilize CSS, JS, and other frontend tools that might be added later on. 

**Documentation**

This is a HUGE area for the project. We need clear usage documentation so developers know how to use the API and can see which endpoints are available. This documentation would be rather technical, so it might be useful if you have a background in technical writing but that is not required. 

**Usage Examples**

Currently, usage examples are provided for each endpoint in PHP and Python. We would like to expand this to include more languages to make API access possible for most projects. 

**Translations**

Right now, the FreeGeo API is only available in English. I'd like to expand this offering to as many languages as possible, but I need help! [This website](http://freegeo.yupitszac.com) and the API responses would need translation. Interested in contributing here? Open an issue and we can discuss the best way to accomplish this.


**Other Stuff**

Don't want to help out in one of the areas above? No worries! The beauty of open source projects is that you can work on whatever your good at (or want to be good at). Think another area should be added? Let me know!


######How to Contribute

Fork the repo! That way you can play around with whatever changes you want to make without affecting this repo. After your changes have been made, tested and reviewed, submit a pull request to the staging branch. 

Your new code will be reviewed again, tested again, then if it makes sense to move it to Master, it will be added to prod in the next release.

Happy coding! :)

Local Dev
===

[@nater1067](http://github.com/nater1067) has put together a [quick guide to getting setup](http://nater1067.github.io/blog/2014/08/25/spinning-up-symfony-2-development-environments-with-vagrant/) with [Symfony2](https://symfony.com/doc/current/index.html) (that's what the FreeGeo API is based on) and [Vagrant](http://www.vagrantup.com), using [puppet](https://puppetlabs.com/puppet/). You can, of course, use whatever configuration you'd like, but I strongly reccommend setting up your local dev like I have for contributions to the FreeGeo API. 


Special Thanks
===

Special thanks to these guys for their help on the project!

- [DigitalOcean](http://www.digitalocean.com) has generously provided the hosting needed at no cost to us.
- [GlobalSign](http://www.globalsign.com) helped us secure requests to the API with a free SSL certificate for a year.
- [@arabek](http://www.github.com/arabek) setup and configured our SSL with the appropriate rewrite for non-SSL requests.
- [@HaxxonHax](http://www.github.com/HaxxonHax) assisted with SSL installation and configuration.



