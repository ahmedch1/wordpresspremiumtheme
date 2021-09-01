// var gulp = require('gulp');
//
// gulp.task('default', defaultTask);
//
// function defaultTask(done) {
//     // place code for your default task here
//     console.log('hey');
//     done();
// }
//
// gulp.task('hello', function (done) {
//     console.log('hello');
//     done();
// })

import gulp from 'gulp';

export const hello = (done) => {
    console.log('hello');
    done();
}

export default hello;
