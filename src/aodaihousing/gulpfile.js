var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');
const cssbeautify = require('gulp-cssbeautify');
const autoprefixer = require("gulp-autoprefixer");


var paths = {
    styles: {
        src: 'assets/sass/*.scss',
        dest: 'css/'
    },
    scripts: {
        src: 'assets/js/*.js',
        dest: 'js/'
    }
};

function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sass({
            indent: '  ',
            openbrace: 'separate-line',
            autosemicolon: true
        }))
        .pipe(cssbeautify())
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(autoprefixer());
}

function scripts() {
    return gulp.src(paths.scripts.src, { sourcemaps: true })
        .pipe(gulp.dest(paths.scripts.dest));
}

function watch() {
    gulp.watch(paths.scripts.src, scripts);
    gulp.watch(paths.styles.src, styles);
}

exports.styles = styles;
exports.scripts = scripts;

exports.watch = watch;

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.series(gulp.parallel(styles, scripts));

/*
 * You can still use `gulp.task` to expose tasks
 */
gulp.task('build', build);

gulp.task('watch', watch);