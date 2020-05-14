/*
  Default gulp file
  with all general tasks like build & watch
  everything else should be moved in separate files
*/
var config = require('../gulpconfig');

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    runSequence = require('gulp4-run-sequence');


gulp.task('default', function(callback) {
  runSequence(
  [
    'sass'
  ],
  [
    'sass:watch',
    'serve'
  ],
  callback);
});
