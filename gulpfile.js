var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    del             = require('del'),
    sourcemaps      = require('gulp-sourcemaps'),
    autoprefixer    = require('gulp-autoprefixer'),
    imagemin        = require('gulp-imagemin'),
    changed         = require('gulp-changed'),
    gutil           = require('gulp-util'),
    ftp             = require('vinyl-ftp'),
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




// ======================================================================================//
// DEPLOY

var user = 'opensul';
var password = 'aefgz541a85e4';
var host = 'ftp.opensul.net.br';
var port = 21;

/*
* Arquivos que serão ou não enviados ao servidor,
* para não enviar um arquivo ou pasta se deve inserir o ! (exclamação) antes do arquivo ou da pasta
*/
var localFilesGlob = ['./**/*',
                        '!node_modules'
                    ];

/*
* Pasta do servidor para onde os arquivos serão enviados
*/
var remoteFolder = '/hm.opensul.net.br'

/*
* Função para conexão
*/
function getFtpConnection()
{
    return ftp.create({
        host: host,
        port: port,
        user: user,
        password: password,
        parallel: 5,
        log: gutil.log
    });
}

/*
* Tarefa que enviará os arquivos
*/
gulp.task('ftp-deploy', function()
{
    var conn = getFtpConnection();
    return gulp.src(localFilesGlob, {base: '.', buffer: false})
        .pipe(conn.newer(remoteFolder)) // only upload newer files
        .pipe(conn.dest(remoteFolder));
});


  