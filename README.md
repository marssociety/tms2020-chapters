# tms2020=chapters Readme File
# Author: James Burk <jburk@marssociety.org>
This is the Chapters version of the new Mars Society wordpress theme - tms2020.
tms2020 is the new custom theme for The Mars Society's news design & style guidelines created in 2019, built for Wordpress.
It is based on the Basic Child Theme for UnderStrap Theme Framework: https://github.com/understrap/understrap

#License
Copyright &copy; 2019 The Mars Society.  This theme is distributed under the terms of the GNU GPL version 2.

http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

It is based on the UnderStrap WordPress Theme, Copyright 2013-2018 Holger Koenemann and also distributed under GPLv2.

## How it works
This is a child theme of Understrap, which means it shares with the parent theme all PHP files and adds its own functions.php on top of the UnderStrap parent theme's functions.php.

**IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!** Instead it uses the UnderStrap Parent Theme as a dependency via npm and compiles its own CSS file from it.

Understrap Child Theme uses the Enqueue method to load and sort the CSS file the right way instead of the old @import method.

## Installation
1. Install the parent theme UnderStrap first: `https://github.com/understrap/understrap`
   - IMPORTANT: If you download UnderStrap from GitHub make sure you rename the "understrap-master.zip" file to "understrap.zip" or you might have problems using this child theme!
1. Upload the tms2020-chapters folder to your wp-content/themes directory
1. Go into your WP admin backend 
1. Go to "Appearance -> Themes"
1. Activate the tms2020-chapters theme

## Editing CSS & JS
Our CSS styles live in:
`/sass/theme/_tms2020.scss`
To overwrite Bootstrap's or UnderStrap's base variables just add your own value to:
`/sass/theme/_tms2020_variables.scss`

Using gulp, it will be outputted into:
`/css/tms2020.min.css` and `/css/tms2020.css`

The goal here is we have one clean CSS file at the end and just one request.

Understrap does the same with scripts, compiling all JS from /src/js (which includes Bootstrap's JS) into a single child-theme.min.js file.

## Developing With NPM, Gulp, SASS and Browser Sync

### Installing Dependencies
- Make sure you have installed Node.js, NPM, Gulp, and Browser-Sync [1] on your computer globally
- Open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install` then: `$ gulp copy-assets`

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:
```javascript
  "browserSyncOptions" : {
    "proxy": "localhost/wordpress/",
    "notify": false
  }
};
```
- then run: `$ gulp watch-bs`

[1] Visit [https://browsersync.io/](https://browsersync.io/) for more information on Browser Sync