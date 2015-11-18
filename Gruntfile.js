module.exports = function(grunt) {
	'use strict';

	var path = 'resources/assets/';

	// configuração do projeto
	var gruntConfig = {

		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			target: {
				files: {
					// 'assets/js/app.min.js': [
					// 	path + 'js/app.js'
					// ]
				}
			}
		},

    sass: {
      dist: {
        options: {
          compass: true,
          style: 'expanded'
        },
        files: {
          'assets/css/app.css': [
						path + 'scss/app.scss'
					]
        }
      }
    },

		cssmin: {
			target: {
				files: {
					'assets/css/app.min.css': [
						path + 'bower_components/font-awesome/css/font-awesome.css',
						path + 'bower_components/din-style/style.css',
						'assets/css/app.css'
					]
				}
			}
		},

        cachebreaker: {
            dev: {
                options: {
                    match: [
                    	// 'assets/js/app.min.js',

                    	'assets/css/app.min.css'
                    ]
                },
                files: {
                    src: ['*.php']
                }
            }
        },

		/*cssmin: {
		  target: {
		    files: [{
		      expand: true,
		      cwd: 'assets/css',
		      src: ['*.css', '!*.min.css'],
		      dest: 'assets/css',
		      ext: '.min.css'
		    }]
		  }
		}*/

	    watch : {
	      minsass : {
	        files : [
	          // 'front/sass/**/*'
						path + 'scss/**/*'
	        ],

	        tasks : [ 'sass', 'cssmin' ]
	      },

	      minjs : {
	        files : [
	          // 'front/js/**/*'
						path + 'js/**/*'
	        ],

	        tasks : [ 'uglify' ]
	      }
	    } // watch

	};

	grunt.initConfig(gruntConfig);

  	// plugins
  	grunt.loadNpmTasks('grunt-contrib-uglify');
   	grunt.loadNpmTasks('grunt-contrib-sass');
  	grunt.loadNpmTasks('grunt-contrib-cssmin');
  	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks('grunt-cache-breaker');

	// tarefas
	grunt.registerTask('default', ['uglify', 'sass', 'cssmin']);
	grunt.registerTask('deploy', ['cachebreaker']);

  	// Tarefa para Watch
  	grunt.registerTask( 'w', [ 'watch' ] );
};
