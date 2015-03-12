var gulp = require('gulp'),
	jshint = require('gulp-jshint'),
	autoprefix = require('gulp-autoprefixer'),
	sass = require('gulp-sass'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload;

gulp.task('default', ['browserSync', 'watch']);

gulp.task('styles', function(){
	gulp.src('*.scss')
		.pipe(sass({
			"sourcemap=none": true,
			errLogToConsole: true
		}))
		.pipe(autoprefix('last 2 version'))
		.pipe(gulp.dest('.'))
		.pipe(reload({ stream: true }))
});

gulp.task('jshint', function(){
	return gulp.src('js/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(reload({ stream: true }))
});

gulp.task('browserSync', function(){
	browserSync({
		proxy: 'http://localhost:8888/portfolio',
		notify: true,
	});
});

gulp.task('watch', function(){
	gulp.watch('js/**/*.js', ['jshint']);
	gulp.watch('**/*.scss', ['styles']);
	gulp.watch('**/*.php', reload);
});