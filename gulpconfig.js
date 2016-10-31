/*
  Gulp configuration file.
  inhabited by source & build folder variables
  and gulp task configurations (tasks located in ./gulp/**)
*/
var src               = './themes/edutheme',
    dest              = './themes/edutheme/',
    version           = "1.0.0";

// all gulp task configurations & settings will be found here
module.exports = {
  browserSync: {                                  // https://www.npmjs.com/package/browser-sync
    src: src,
    port: 1893,
    open: "external",
    notify: true,
    proxy: {
      target: 'localhost:8080',
      ws: true
    },
    files: dest,
    // port: 1893,
    // https: true,
    open: "local",
    browser: "google chrome"
  },
  sass: {                                         // https://www.npmjs.com/package/gulp-sass
    src: src + "/styles/**/*.scss",
    dest: dest
  }
};
