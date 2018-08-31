var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    del             = require('del'),
    sourcemaps      = require('gulp-sourcemaps'),
    autoprefixer    = require('gulp-autoprefixer'),
    imagemin        = require('gulp-imagemin'),
    changed         = require('gulp-changed'),
    browserSync     = require('browser-sync').create(),
    reload          = browserSync.reload;

//CLEAN CSS
gulp.task('clean-css', function () {
    return del('wp-content/themes/opensul/style.css');
});

//IMAGEMIN
gulp.task('images', function() {
    gulp.src('wp-content/themes/opensul/assets/*')
        .pipe(changed('wp-content/themes/opensul/img'))
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest('wp-content/themes/opensul/img'));
});
    
// SASS:
gulp.task('sass', ['clean-css'], function() {
    return gulp.src('wp-content/themes/opensul/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({browsers: 'last 3 versions'}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('wp-content/themes/opensul/'));
  });

//COPY SCSS
gulp.task('copy-scss', ['bootstrap-scss','fontawesome-scss', 'slick-scss']);

//SASS BOOTSTRAP
gulp.task('bootstrap-scss', function() {
    return gulp.src('wp-content/themes/opensul/scss/bootstrap.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('wp-content/themes/opensul/css'));
  });

//SASS FONTAWESOME
gulp.task('fontawesome-scss', function() {
    return gulp.src('wp-content/themes/opensul/scss/fontawesome.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('wp-content/themes/opensul/css'));
  });

//SASS SLICK
gulp.task('slick-scss', function() {
    return gulp.src('wp-content/themes/opensul/scss/slick.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('wp-content/themes/opensul/css'));
  });

// WATCH:
gulp.task('watch', function () {
    return gulp.watch(['wp-content/themes/opensul/scss/**/*.scss'], ['sass']);
});


//SERVE
gulp.task('serve', function () {
    browserSync.init({
        proxy: 'http://localhost:8080/opensul',
        notify: false
    });

    gulp.watch('wp-content/themes/opensul/*').on('change', reload);
});

// INIT: 
gulp.task('default', ['images', 'sass', 'copy-scss', 'watch', 'serve']);

  