'use strict';
var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer');
var sass = require('gulp-sass');
var rename = require("gulp-rename");
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {   
  var plugins = [
    autoprefixer()
];
  return gulp.src('./assets/sass/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(plugins))
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./assets/production/mincss'));
});

gulp.task('scripts', () =>
    gulp.src('./assets/js/*.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./assets/production/minjs'))
);

gulp.task('watch', function() {
  gulp.watch('./assets/sass/**/*.scss', gulp.series('sass'));
  gulp.watch('./assets/js/*.js', gulp.series('scripts'));
  // gulp.watch('app/img/*', gulp.series('images'));
});