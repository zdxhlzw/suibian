var gulp=require('gulp');
var uglify=require('gulp-uglify');
gulp.task('q',function(){
	gulp.src('jquery-1.12.0.js').pipe(uglify()).pipe(gulp.dest('wq'))
})
