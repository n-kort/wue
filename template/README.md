# {{ name }}

> {{ description }}

## Build Setup

``` bash
# install dependencies
npm install

# serve with hot reload at a valet link
npm run dev

# build for production with minification
npm run build

# build for production and view the bundle analyzer report
npm run build --report
{{#unit}}

# run unit tests
npm run unit
{{/unit}}
{{#e2e}}

# run e2e tests
npm run e2e
{{/e2e}}
{{#if_or unit e2e}}

# run all tests
npm test
{{/if_or}}
```

This template is meant to be run locally, as a WordPress theme served by [valet](https://laravel.com/docs/5.5/valet). Built files (`/dist`) can be deployed as a live theme to pretty much any wp site.

See [wue](https://github.com/n-kort/wue) for further setup instructions.
