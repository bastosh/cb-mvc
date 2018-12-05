let gulp          = require('gulp');
let sass          = require('gulp-sass');

let sassPaths = [
    'node_modules/foundation-sites/scss',
    'node_modules/motion-ui/src'
];

gulp.task('sass', () => {
    return gulp
        .src(['src/scss/app.scss'])
        .pipe(sass({
            includePaths: sassPaths,
            // outputStyle: 'compressed'
        })
        .on('error', sass.logError))
        .pipe(gulp.dest('public/css'))
});

gulp.task('watch', () => {
    gulp.watch('src/scss/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);
