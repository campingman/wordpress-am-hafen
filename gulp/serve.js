// Load config variables from ../gulpconfig.js
var config = require('../gulpconfig').browserSync;

var gulp = require('gulp'),
    browserSync = require('browser-sync');


gulp.task('serve', function(callback) {
  browserSync.init(config);
  // gulp.watch(config.files, browserSync.reload)
  gulp.watch(config.src, browserSync.reload);
});
