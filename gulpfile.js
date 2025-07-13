    const gulp = require('gulp');
    const browserSync = require('browser-sync').create();


    function watch() {
        browserSync.init({
            proxy: "blog-app",
            notify: false,
            open: false
        });
        gulp.watch(['**/*.php', '**/*.html', '**/*.js','**/*.css']).on('change', browserSync.reload);

    }

    gulp.task('default', gulp.series(watch));
