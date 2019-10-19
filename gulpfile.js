/*
   Importing all the installed/required `devDependencies` 
*/
const gulp = require('gulp'),
   sass = require('gulp-sass'),
   cssmini = require('gulp-uglifycss'),
   cssprefix = require('gulp-autoprefixer'),

   babel = require('gulp-babel'),
   jsmini = require('gulp-uglify'),
   concat = require('gulp-concat'),

   phpServe = require('gulp-connect-php'),

   srcmaps = require('gulp-sourcemaps'),

   browserSync = require('browser-sync').create();

/*
   Watch the files for changes
*/
const paths = {
   sass: {
      src: "./app/lib/sass/**/*.scss",
      dest: "./app/lib/css"
   },
   css: {
      src: "./app/lib/css/**/*.css",
      map: "../sourcemaps/css",
      dest: "./public/css"
   },
   js: {
      src: ['./app/lib/js/**/*.js'],
      map: "../sourcemaps/js",
      dest: "./public/js"
   },
   jsmini: {
      src: ["./public/js/**/*.js"],
      dest: "./public/js"
   },
   html: {
      src: "./app/views/**/*.html"
   },
   php: {
      src: "./**/*.php"
   },
   images: {
      src: ['./src/lib/images/**/*.svg', './src/lib/images/**/*.png', './src/lib/images/**/*.jpg', './src/lib/images/**/*.jpeg'],
      dest: "./app/lib/images"
   }
}


/*
   Watch the files for changes
*/
// Process `scss` files to `css` and autoprefix them
function style() {
   return gulp.src(paths.sass.src)
      .pipe(srcmaps.init())
      .pipe(sass())
      .pipe(cssprefix('last 2 versions'))
      .pipe(srcmaps.write(paths.css.map))
      .pipe(gulp.dest(paths.sass.dest))
      .pipe(browserSync.stream());
}
exports.style = style;

// Minify `css` files
const cssMin = gulp.series(style, (cb) => {
   gulp.src(paths.css.src)
      .pipe(srcmaps.init())
      .pipe(cssmini())
      .pipe(srcmaps.write(paths.css.map))
      .pipe(gulp.dest(paths.css.dest))
      .pipe(browserSync.stream());

   cb();
});
exports.cssMin = cssMin;

// Concat `js` files to `main.js` file
function es6() {
   return gulp.src(paths.js.src)
      .pipe(srcmaps.init())
      .pipe(babel())
      .pipe(srcmaps.write(paths.js.map))
      .pipe(gulp.dest(paths.js.dest))
      .pipe(browserSync.stream());
}
exports.es6 = es6;

// Concat `js` files to `main.js` file
function concatjs() {
   return gulp.src(paths.js.src)
      .pipe(concat('main.js'))
      .pipe(gulp.dest(paths.js.dest))
      .pipe(browserSync.stream());
}
exports.concatjs = concatjs;

// Concat `js` files to `main.js` file
const jsMin = gulp.series(concatjs, (cb) => {
   gulp.src(paths.jsmini.src)
      .pipe(jsmini())
      .pipe(gulp.dest(paths.jsmini.dest));

   cb();
});
exports.jsmin = jsMin;

// Watch all the files for changes and stream/reload for changes
function php(cb) {
   phpServe.server({
      base: './public',
      port: 8080,
      keepalive: true
   });

   cb();
}
exports.serve = php;

const sync = gulp.series(php, (cb) => {
   browserSync.init({
      proxy: 'http://phpmvc.test',
      port: 3001,
      baseDir: './public',
      open: true,
      notify: false,

      options: {
         scrollProportionally: false
      }
   });

   cb();
});
exports.sync = sync;

const watch = gulp.series(sync, (cb) => {
   gulp.watch(paths.sass.src, cssMin);
   gulp.watch(paths.js.src, concatjs);
   gulp.watch(paths.html.src).on('change', browserSync.reload);
   gulp.watch(paths.php.src).on('change', browserSync.reload);

   cb();
});
exports.watch = watch;