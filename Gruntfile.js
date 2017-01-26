module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    sass: {
      options: { 
        sourcemap: 'none',
        // includePaths: [
        //   './node_modules/bootstrap/scss/',
        // ],                      
        outputStyle: 'compressed'
      },
      dist: {
        files: {
          'css/style.css' : 'sass/style.scss'
        }
      }
    },
    browserSync: {
      bsFiles: {
        src : [
          'css/*.css'
        ]
      },
      options: {
        watchTask: true,
        proxy: "forma.dev"
      }
    },
    
    watch: {
      options: {
        livereload: true,
      },
      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass']
      }
    },
    
    clean: {
      example: ['css/*.{css}']
    }

  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');

  // Default task(s).
  grunt.registerTask('default', ['sass', 'clean', 'browserSync', 'watch']);

};