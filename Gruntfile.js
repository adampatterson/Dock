module.exports = function(grunt) {
 
  grunt.registerTask('watch', [ 'watch' ]);
 
  grunt.initConfig({
	
	recess: {
		options: {
            compile: true,
        },
	    min: {
	        options: {
				compress: true
	        },
	        files: {
	            "assets/css/style.min.css": "assets/less/style.less",
				"assets/css/responsive.min.css": "assets/less/responsive.less"
	        }
	    },
		dock: {
	        options: {
				compress: false
	        },
	        files: {
	            "assets/css/style.css": "assets/less/style.less",
				"assets/css/responsive.css": "assets/less/responsive.less"
	        }
	    }
	},
	
    concat: {
      js: {
        options: {
          separator: ';'
        },
        src: [
          // 'assets/js/*.js'
			'assets/js/jquery.js',
			'assets/js/html5shiv.js',
			'assets/js/retina.js',
			'assets/js/application.js'
        ],
        dest: 'assets/js/application.min.js'
      },
    },

    uglify: {
      options: {
        mangle: false
      },
      js: {
        files: {
          'assets/js/application.min.js': "assets/js/application.js"
        }
      }
    },

    watch: {
      js: {
        files: ['assets/js/*.js'],
        tasks: ['concat:js', 'uglify:js']
        // options: {
        //    livereload: true,
        //  }
      },
      css: {
        files: ['assets/less/*.less'],
        tasks: ['recess']
        // options: {
        //    livereload: true,
        //  }
      }
    }

  });
 
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-recess');
  grunt.loadNpmTasks('grunt-contrib-watch');
};