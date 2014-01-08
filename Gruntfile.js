module.exports = function(grunt) {
  'use strict';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    less: {
      compileCore: {
        options: {
          strictMath: true,
          sourceMap: true,
          outputSourceFiles: true
        },
        files: {
          'css/strapit.css': 'less/style.less'
        }
      },
      minify: {
        options: {
          cleancss: true,

        },
        files: {
          'css/strapit.min.css': 'css/strapit.css'
        }
      }
    },

    concat: {
      dist: {
        src: [
          '_/js/functions.js'
        ],
        dest: '_/js/functions_bk.js'
      }
    },

    uglify: {
      build: {
        src: '_/js/functions_bk.js',
        dest: '_/js/functions_bk.min.js'
      }
    },
    watch: {
      reloader: {
        files: ['*.html', '*.php'],
        options: {
          livereload: true
        }
      },
      styles: {
        // Which files to watch (all .less files recursively in the less directory)
        files: ['less/style.less'],
        tasks: ['less'],
        options: {
          livereload: true
        }
      },
      scripts: {
        // Which files to watch (all .less files recursively in the less directory)
        files: ['_/js/functions.js'],
        tasks: ['concat', 'uglify'],
        options: {
          livereload: true
        }
      }
    }

  });

  require('load-grunt-tasks')(grunt);

  // Default Task(s)
  grunt.registerTask('default', ['watch']);

};
