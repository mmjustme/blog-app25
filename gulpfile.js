    const gulp = require('gulp');
    const sass = require('gulp-sass')(require('sass'));
    const browserSync = require('browser-sync').create();

    const paths = {
        scss: {
            assets: 'assets/scss/**/*.scss',
            dest: 'assets/css'
        },
        php: 'blog-app/**/*.php' // де твої php-файли
    };
     function styles() {
            return gulp.src('assets/scss/**/*.scss')
                .pipe(sass().on('error', sass.logError))
                .pipe(gulp.dest('assets/css'))
                .pipe(browserSync.stream());
    };
    function watch() {
        browserSync.init({
            proxy: "blog-app",
            notify: false,
            open: false
        });
        gulp.watch(paths.scss.assets, styles);
        gulp.watch(paths.php).on('change', browserSync.reload); // оновлення при зміні PHP
    }

    gulp.task('default', gulp.series(styles, watch));
