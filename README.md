# Ayup Development Boilerplate

## To-do
- [ ] - Add JavaScript ES7 Modules functionality
- [ ] - Possibly add option to use CSS Grid
- [ ] - Add cache busting
- [ ] - Add render blocking method. This library looks interesting and we could use it on a build command [https://github.com/addyosmani/critical](https://github.com/addyosmani/critical)
- [ ] - Add web accessibility compliant to AA standard

## Installation
Run `npm install`

The boilerplate uses laravel-mix for asset management.

## Webpack Commands
`npm run dev` - This builds our assets but does not minify or produce a production-ready build.

`npm run watch` - Similar to `npm run dev` but will watch for changes to our assets and automatically re-compile any changed asset.

`npm run hot` - Will not just refresh the page when a piece of JavaScript is changed, but it will also maintain the current state of the component in the browser.

`npm run production` - Will compile all our assets and produce a production-ready build. It will run all Mix tasks, and it will minify the output.