'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var plumber = require('gulp-plumber');
var autoprefixer = require('autoprefixer');
var server = require('browser-sync').create();
var rename = require('gulp-rename');
var minify = require('gulp-csso');
var runSequence = require('gulp-run-sequence');
var svgstore = require('gulp-svgstore');
var svgmin = require('gulp-svgmin');
var mqpacker = require('css-mqpacker');

gulp.task('style', function() {
  gulp.src('www/css/default.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(postcss([
      autoprefixer({browsers: [
        'last 2 versions'
      ]})
    ]))
    .pipe(gulp.dest('www/css'))

    .pipe(server.stream());
});

gulp.task('symbols', function() {
  return gulp.src('img/*.svg')
    .pipe(svgmin())
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(rename('symbols.svg'))
    .pipe(gulp.dest('img'));
});

gulp.task('serve', ['style'], function() {

  gulp.watch('www/css/**/*.{scss,sass}', ['style']);
  gulp.watch('www/*.php').on('change', server.reload);
});
