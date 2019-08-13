/* INSTALAÇÃO DE PLUGINS
npm install -g gulp@3.9.1
npm install --save-dev gulp@3.9.1
npm install gulp@3.9.1 gulp-connect-php browser-sync gulp.spritesmith gulp-newer gulp-imagemin vinyl-buffer gulp-sourcemaps gulp-sass gulp-plumber gulp-uglify gulp-concat gulp-rename merge-stream gulp-notify --save-dev

// PROCURAR MODELO DO SPRITE EM NODE MODULES: scss.template.handlebars

SUBTITUIR CONTEÚDO POR: 

{{#sprites}}
.{{name}} {
  display: block;
  background-image: url({{{escaped_image}}});
  background-position: {{px.offset_x}} {{px.offset_y}};
  width: {{px.width}};
  height: {{px.height}};
}
{{/sprites}} */

var gulp        = require('gulp'),
    //webserver   = require('gulp-webserver'),
    connectPHP = require('gulp-connect-php'),
    sass        = require('gulp-sass'),
    newer       = require('gulp-newer'),
    imagemin    = require('gulp-imagemin'),
    spritesmith = require('gulp.spritesmith'),
    buffer      = require('vinyl-buffer'),
    plumber     = require('gulp-plumber'),
    sourcemaps  = require('gulp-sourcemaps');
    uglify      = require('gulp-uglify'),
    concat      = require('gulp-concat'),
    rename      = require("gulp-rename"),
    merge       = require('merge-stream'),
    browserSync = require('browser-sync'),
    notify      = require('gulp-notify'),
    reload      = browserSync.reload;

// /////////////////////////////////////////////////
// PATHS
// ////////////////////////////////////////////////
var ROOT_PATH       = '.',
    SASS_PATH       = 'dev/scss/**/*.scss',
    JS_DEV_PATH     = 'dev/js/*.js',
    SPRITES_PATH    = 'dev/sprites/*.+(png|jpg|jpeg|gif|svg)',
    IMGS_DEV_PATH   = 'dev/img/**/*.+(png|jpg|jpeg|gif|svg)',

    HTML_PATH       = 'site/*.php',
    CSS_PATH        = 'site/',
    JS_PATH         = 'site/js/',
    IMGS_PATH       = 'site/img/',
    MAPS_PATH       = 'site/maps/'

    // HTML_PATH       = 'wp/wp-content/themes/urbanizze/*.php',
    // CSS_PATH        = 'wp/wp-content/themes/urbanizze/',
    // JS_PATH         = 'wp/wp-content/themes/urbanizze/js/',
    // IMGS_PATH       = 'wp/wp-content/themes/urbanizze/img/'


// /////////////////////////////////////////////////
// BROWSER-SYNC / CONNECT task
// ////////////////////////////////////////////////

gulp.task('connect', function(){
    connectPHP.server({ base: 'urbanizze', keepalive:true, hostname: 'localhost', port:8080, open:false});
});
gulp.task('browserSync',['connect'], function() {
    browserSync({
      proxy:'http://localhost/urbanizze/site/',
      // proxy: 'http://localhost/urbanizze/wp/',
      port: 8080,
      open: false,
      notify: true
    });
});

// gulp.task('connect-sync', function() {
//   connect.server({
//     base: 'urbanizze',
//     keepalive:true,
//     hostname: 'localhost',
//     port:8080,
//     open:false
//   }, function (){
//     browserSync({
//       proxy:'http://localhost/urbanizze/site/',
//       // proxy:'http://localhost/urbanizze/wp/',
//       port: 8080,
//       open: true,
//       notify: true
//     });
//   });

//   gulp.start('sass');
//   gulp.start('watch');

// });

// ////////////////////////////////////////////////
// SASS / MINIFICAÇÃO DE CSS task
// ///////////////////////////////////////////////

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'compressed'
};
gulp.task('sass', function () {
  return gulp
    .src(SASS_PATH)
    .pipe(sourcemaps.init({largeFile: true}))
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(sourcemaps.write('maps', {
      addComment: false,
      includeContent: false,
      sourceRoot: MAPS_PATH
    }))
    .pipe(gulp.dest(CSS_PATH))
    .pipe(browserSync.reload({stream:true}));
});

// ////////////////////////////////////////////////
// MINIFICAÇÃO DE JS
// ///////////////////////////////////////////////

gulp.task('js', function() {
    gulp.src(JS_DEV_PATH)
        .pipe(gulp.dest(JS_PATH))
        .pipe(browserSync.stream());
});

gulp.task('scripts', function() {
    gulp.src([
          'dev/js/jquery-3.2.1.js',
          //'dev/js/jquery-3.2.1.slim.js',
          'dev/js/popper.min.js',
          'dev/js/bootstrap.min.js',
          //'dev/js/jquery.fancybox.js',
          'dev/js/slick.js',
          'dev/js/jquery.matchHeight-min.js',
          'dev/js/jquery.smooth-scroll.js',
          //'dev/js/validator.min.js',
          'dev/js/jquery.mask.min.js',
          // 'dev/js/form-masks.js',
          'dev/js/scripts.js',
      ])
      .pipe(sourcemaps.init({largeFile: true}))
      .pipe(plumber())
      .pipe(concat('scripts.js'))
      .pipe(uglify())
      .pipe(rename(function (path) {
          path.basename += ".min"
      }))
      .pipe(sourcemaps.write('../maps', {
        addComment: false,
        includeContent: false,          
        sourceRoot: MAPS_PATH
      }))
      .pipe(gulp.dest(JS_PATH))
});


// ////////////////////////////////////////////////
// COMPRESS - SPRITES IMGS task
// ///////////////////////////////////////////////

gulp.task('imgmin', function() {
  gulp.src(IMGS_DEV_PATH)
    return gulp.src(IMGS_DEV_PATH)
    .pipe(newer(IMGS_PATH))
    .pipe(imagemin([
        imagemin.gifsicle({interlaced: true}),
        imagemin.jpegtran({progressive: true}),
        imagemin.optipng({optimizationLevel: 5}),
        imagemin.svgo({plugins: [{removeViewBox: true,collapseGroups: true}]})
    ]))
    .pipe(gulp.dest(IMGS_PATH));
});

gulp.task('sprites', function() {
  var data = gulp.src(SPRITES_PATH)
    .pipe(spritesmith({
      imgName: 'sprites.png',
      imgPath: 'img/sprites.png',
      cssName: '_sprites.scss'
    }));

  var imgStream = data.img
    .pipe(buffer())
    .pipe(imagemin())
    .pipe(gulp.dest(IMGS_PATH));

  var cssStream = data.css
    .pipe(gulp.dest('dev/scss'));

  return merge(imgStream, cssStream);
});

// ////////////////////////////////////////////////
// WATCH - RELOAD BROWSERS
// ///////////////////////////////////////////////

gulp.task('default', ['connect', 'browserSync'], function() {
  gulp.watch(SASS_PATH, ['sass']);
  gulp.watch(JS_DEV_PATH, ['scripts']);
  gulp.watch(SPRITES_PATH, ['sprites']);
  gulp.watch(IMGS_DEV_PATH, ['imgmin']);
  //gulp.watch(HTML_PATH, ['html']);

  gulp.watch(HTML_PATH).on('change', browserSync.reload);

});