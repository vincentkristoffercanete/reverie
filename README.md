Reverie is a versatile HTML5 responsive WordPress framework based on ZURB's Foundation, Gulp and Bower.

A Brief Introduction
====================
Reverie Framework is an extremely versatile HTML5 WordPress framework based on ZURB's [Foundation](http://foundation.zurb.com), Bower (http://bower.io/) and Gulp(http://gulpjs.com/). Reverie follows [HTML5 Boilerplate](http://html5boilerplate.com) standard and is [hNews microformat](https://www.readability.com/publishers/guidelines) ready. It is optimized for Search Engine while at the same time improves readability.

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

For more installation notes, refer to the [Install gulp and Bower](#install-gulp-and-bower) section in this document.

## Features

* [gulp](http://gulpjs.com/) build script that compiles both Sass and Less, checks for JavaScript errors, optimizes images, and concatenates and minifies files
* [BrowserSync](http://www.browsersync.io/) for keeping multiple browsers and devices synchronized while testing, along with injecting updated CSS and JS into your browser while you're developing
* [Bower](http://bower.io/) for front-end package management
* [asset-builder](https://github.com/austinpray/asset-builder) for the JSON file based asset pipeline
* Sass compatible.
* Mobile first.
* HTML5 Boilerplate standard and is hNews microformat ready.
* SEO friendly.
* Basic CSS included, you can also use it as a finished theme.

###WordPress Features###
* Clean image HTML output for TinyMCE, only class and alt are returned. Post title will be automatically used for alt.
* Post formats support.
* Pagination for Foundation
* Custom Background Image and Color support
* Custom menu output for ZURB's top bar.
* Custom caption output for HTML5 figure and figcaption tags.
* Custom filter for images, will automatically wrap images with figure tag.
* Two Widget: sidebar and footer.
* Two menus: top navigation menu and footer information menu.
* Several custom page templates are included in the package.

Please note Reverie Framework is under MIT License, the same as Foundation.
