# [Sprout](https://jasen.dev/)

Sprout is a WordPress starter theme based on HTML5 Boilerplate, Sage theme 8.5, Webpack 5, Bootstrap and Sass.

* Sage Reference: [https://github.com/roots/sage](https://github.com/roots/sage)
* Sage Documentation: [https://roots.io/sage/docs/](https://roots.io/sage/docs/)

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 8.x.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js >= 7.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |

## Features

* [Bootstrap](http://getbootstrap.com/)
* [Webpack](https://webpack.js.org/)
* [Theme wrapper](https://roots.io/sage/docs/theme-wrapper/)

Install the [Soil](https://github.com/roots/soil) plugin to enable additional features:

* Cleaner output of `wp_head` and enqueued assets
* Cleaner HTML output of navigation menus
* Root relative URLs
* Nice search (`/search/query/`)
* Google CDN jQuery snippet from [HTML5 Boilerplate](http://html5boilerplate.com/)
* Google Analytics snippet from [HTML5 Boilerplate](http://html5boilerplate.com/)

## Theme setup

Edit `lib/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, post formats, and sidebars.

After deploying and enabling the theme on a WordPress instance, install the theme dependencies by running the following command in the theme root (e.g. `/wp-content/themes/sprout-starter`):

```
npm install
```

### Available build commands

* `npm run build` — Compile and optimize the files in your assets directory
* `npm run watch` — Compile assets when file changes are made
* `npm run dist` — Compile assets for production (no source maps).


## Documentation

Webpack integration [https://taylor.callsen.me/using-webpack-5-and-sass-with-wordpress/](https://taylor.callsen.me/using-webpack-5-and-sass-with-wordpress/).
Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

