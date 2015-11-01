var browserify = require('browserify');
var browserifyShim = require("browserify-shim");
var babelify = require("babelify");
var watchify = require('watchify');
var gulp = require('gulp');
var sourcemaps = require("gulp-sourcemaps");
var gutil = require("gulp-util");
var rename = require("gulp-rename");
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var minifyCSS = require("gulp-minify-css");
var transform = require("vinyl-transform");
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var es = require('event-stream');
var fs = require('fs');
var fileDetailPath = require('path');
var argv = require('yargs').argv;

function sucessMessage(module) {
	if (module === 'sass') {
		gutil.log("SCSS has been compiled");
	} else if (module === 'minifyCSS') {
		gutil.log("CSS has been minified");
	} else if (module === 'jsFull') {
		gutil.log("JS has been compiled");
	}
}

gulp.task('scss-debug', function() {
	return gulp.src('./styles/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({ errLogToConsole: true, onSuccess: sucessMessage('sass') }))
	.pipe(minifyCSS({ errLogToConsole: true, onSuccess: sucessMessage('minifyCSS') }))
	.pipe(sourcemaps.write())
	.pipe(rename(function(path) {
		path.basename += '';
	}))
	.pipe(gulp.dest('./styles/css/'));
});

gulp.task('scss-build', function() {
	return gulp.src('./styles/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({ errLogToConsole: true, onSuccess: sucessMessage('sass') }))
	.pipe(sourcemaps.write())
	.pipe(rename(function(path) {
		path.basename += '';
	}))
	.pipe(gulp.dest('./styles/css/'));
});

gulp.task('js-build', function() {
	var tasks;
    fs.readdir('./js/src/pages/',function(err,files){
        tasks = files.map(function(entry) {
            if(fileDetailPath.extname(entry) == '.js') {
                entry = './js/src/pages/' + entry;
                return browserify({
                    entries: [entry],
                    debug: true,
                    transform: [browserifyShim]
                })
                .transform(babelify)
                .bundle()
                .on('error', function(err) {
                    console.log(err);
                })
                .pipe(source(entry))
                .pipe(rename(function(path) {
                	path.dirname = ".";
                    path.basename += ".min";
                }))
                .pipe(gulp.dest('./js/compiled'));
            }
        });
    });
    // sucessMessage('jsFull')
    return es.merge.apply(tasks);
});

gulp.task('watch', function() {
    gulp.watch([ './styles/*.scss' ], [ 'scss-debug' ]);
    // gulp.watch([ './js/src/pages/*.js', './js/src/components/*.js' ], [ 'js-debug' ]);
});

gulp.task('debug', [ 'scss-debug','watch' ], function () {
    var bundler, rebundle;
    bundler = browserify('./js/src/pages/' + argv.page, {
        debug: true,
        transform: [babelify],
        cache: {}, // required for watchify
        packageCache: {}, // required for watchify
        fullPaths: true // required to be true only for watchify
    });
    bundler = watchify(bundler);
    rebundle = function () {
        return bundler.bundle()
            .on('error', function (err) {
                console.log(err.message);
                this.emit('end');
            })
            .pipe(source(argv.page))
            .pipe(rename(function (path) {
                console.log('current page - ', argv.page);
                path.basename += ".min";
            }))
            .pipe(gulp.dest('./js/compiled'));
    };

    bundler.on('update', rebundle);
    bundler.on('log', gutil.log);
    return rebundle();

});

gulp.task('build', [ 'js-build', 'scss-build']);
