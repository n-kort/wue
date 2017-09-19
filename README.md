# wue

Efficient WP/Valet/Webpack/Vue workflow

## Usage

Project setup (seems long, pretty easy irl, working on condensing much of it into the `vue init` command):

1. Install [Valet](https://laravel.com/docs/5.5/valet)
2. Install MySQL. Try `brew install mysql` and `brew services start mysql`
3. `mkdir` and `cd` into a new project folder
4. Fetch the latest version of WP and unzip to `./public`: `wget https://wordpress.org/latest.tar.gz && tar -xzf latest.tar.gz && mv wordpress public`
5. Link the public folder to a Valet site: `cd public && valet link your-site`. Complete the WP installation in your browser (your-site.dev), or edit the `public/wp-config.php` file. DB credentials will be `root` with an empty password (read the Valet docs for other options)
6. Init this template in a new theme directory: `vue init n-kort/wue public/wp-content/themes/new-theme`
7. Make a handy shortcut `ln -s public/wp-content/themes/new-theme new-theme`
8. `cd new-theme` and install deps `{npm|yarn} install` and `npm run dev`
9. Log in to the local WP and activate your new theme. Start working on that theme


## Deploy

* `npm run build`: Production ready build.

  * JavaScript minified with [UglifyJS](https://github.com/mishoo/UglifyJS2).
  * HTML minified with [html-minifier](https://github.com/kangax/html-minifier).
  * CSS across all components extracted into a single file and minified with [cssnano](https://github.com/ben-eb/cssnano).
  * All static assets compiled with version hashes for efficient long-term caching, and a production `index.html` is auto-generated with proper URLs to these generated assets.
  * Use `npm run build --report` to build with bundle size analytics.

Built files are output to the `/dist` folder — this can be deployed as a live theme to any wp site

### src

Forked from the excellent [vue-webpack-boilerplate](https://github.com/vuejs-templates/webpack). Much more info there.
