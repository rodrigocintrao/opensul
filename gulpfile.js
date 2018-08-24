var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    del             = require('del'),
    sourcemaps      = require('gulp-sourcemaps'),
    autoprefixer    = require('gulp-autoprefixer'),
    browserSync     = require('browser-sync').create(),
    reload          = browserSync.reload;

//CLEAN CSS
gulp.task('clean-css', function () {
    return del('wp-content/themes/opensul/style.css');
});

//COPY JS
gulp.task('copy-js', function() {
    return gulp.src(['node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js']).pipe(gulp.dest('wp-content/themes/opensul/js'));
});

//COPY FONTS
gulp.task('copy-fonts', ['copy-fonts-bootstrap','copy-fonts-fontawesome']);

//COPY FONTS BOOTSTRAP
gulp.task('copy-fonts-bootstrap', function() {
    return gulp.src('node_modules/bootstrap-sass/assets/fonts/bootstrap/*').pipe(gulp.dest('wp-content/themes/opensul/fonts'));
});

//COPY FONTS FONTAWESOME
gulp.task('copy-fonts-fontawesome', function() {
    return gulp.src('node_modules/@fortawesome/fontawesome-free/webfonts/*').pipe(gulp.dest('wp-content/themes/opensul/webfonts'));
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

//SASS BOOTSTRAP
gulp.task('bootstrap', function() {
    return gulp.src('wp-content/themes/opensul/scss/bootstrap.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('wp-content/themes/opensul/css'));
  });

//SASS FONTAWESOME
gulp.task('fontawesome', function() {
    return gulp.src('wp-content/themes/opensul/scss/fontawesome.scss')
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
gulp.task('default', ['sass', 'bootstrap', 'fontawesome', 'watch', 'copy-fonts', 'copy-js', 'serve']);


  