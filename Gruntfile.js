module.exports = function (grunt) {
  'use strict';

  // Force use of Unix newlines
  grunt.util.linefeed = '\n';

  RegExp.quote = function (string) {
    return string.replace(/[-\\^$*+?.()|[\]{}]/g, '\\$&')
  }

  var fs = require('fs')

  // Project configuration.
  grunt.initConfig({

    // Metadata.
    pkg: grunt.file.readJSON('package.json'),

    banner: '/*!\n' +
              ' * Strapit WP Theme v<%= pkg.version.strapit %> (<%= pkg.homepage %>)\n' +
              ' * \n' +
              ' * Copyright <%= grunt.template.today("yyyy") %> <%= pkg.author %>\n' +
              ' * Cobbled together and maintained by the design squad at Digital First Media\n' + 
              ' */\n'

    csslint: {
      options: {
        csslintrc: 'less/.csslintrc'
      },
      src: [
        'css/strapit.css'
      ]
    },

    less: {
      compileCore: {
        options: {
          //strictMath: true,
          sourceMap: true,
          outputSourceFiles: true
        },
        files: {
          'css/strapit.css': 'less/strapit.less'
        }
      },

      minify: {
        options: {
          cleancss: true,
          report: 'min'
        },
        files: {
          'css/strapit.min.css': 'css/strapit.css'
        }
      }
    },

    usebanner: {
      dist: {
        options: {
          position: 'top',
          banner: '<%= banner %>'
        },
        files: {
          src: [
            'css/strapit.css',
            'css/strapit.min.css'
          ]
        }
      }
    },

    csscomb: {
      sort: {
        options: {
          config: 'less/.csscomb.json'
        },
        files: {
          'css/strapit.css': 'css/strapit.css'
        }
      }
    },

    watch: {
      reloader: {
        files: ['/*.php'],
        options: {
          livereload: true
        }
      },
      less: {
        files: 'less/strapit.less',
        tasks: ['less'],
        options: {
          livereload: true
        }
      }
    },

  });


  // These plugins provide necessary tasks.
  require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

  // CSS distribution task.
  grunt.registerTask('dist-css', ['less', 'csscomb', 'usebanner']);

  // Default task.
  grunt.registerTask('default', ['dist-css']);

};