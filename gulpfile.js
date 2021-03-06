/**
 * gulpfile.js - Watch and automatically process CSS and JS
 *
 * @version     2.1.0
 * @package     tpl_lyquix
 * @author      Lyquix
 * @copyright   Copyright (C) 2015 - 2018 Lyquix
 * @license     GNU General Public License version 2 or later
 * @link        https://github.com/Lyquix/tpl_lyquix
 */

var gulp = require('gulp'),
	shell = require('gulp-shell'),
	cwd = process.cwd();

function errorLog (error) {
	console.error.bind(error);
	this.emit('end');
}

gulp.task('process-css', function(){
	return gulp.src(['css/styles.scss'])
		.on('error', errorLog)
		.pipe(shell(['bash ' + cwd + '/css/css.sh']));
});

gulp.task('process-js', function(){
	return gulp.src(['js/scripts.js'])
		.on('error', errorLog)
		.pipe(shell(['bash ' + cwd + '/js/js.sh']));
});

gulp.task('default', function () {
	gulp.watch(['./css/styles.scss', './css/custom/*.scss'], ['process-css']);
	gulp.watch(['./js/scripts.js', './js/custom/*.js', './js/custom/components/*.js', './js/custom/controllers/*.js'], ['process-js']);
});
