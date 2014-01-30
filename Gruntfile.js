module.exports = function(grunt) {
	
  // grunt
  // grunt watch
  // grunt deploy { Both images and CSS }
  // grunt deploy:images
  // grunt deplot:css
 
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('watch', ['watch']);
  grunt.registerTask('deploy', ['deploy']);
 
  grunt.initConfig({
	
  less: {
    dist: {
      files: {
        'assets/css/style.min.css': [
          'assets/less/style.less'
        ],
        'assets/css/responsive.css': [
          'assets/less/responsive.min.less'
        ]
      },
      options: {
        compress: true,
        // LESS source map
        // To enable, set sourceMap to true and update sourceMapRootpath based on your install
        sourceMap: false,
        sourceMapFilename: 'assets/css/main.min.css.map',
        sourceMapRootpath: 'assets/'
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

  imagemin: {
      dist: {
          options: {
              optimizationLevel: 7,
              progressive: true
          },
          files: [{
              expand: true,
              cwd: 'assets/img/',
              src: '**/*',
              dest: 'assets/img/'
          }]
      }
  },

  copy: {
      images: {
          expand: true,
          flatten: true,
          src: ['_design/*/*'],
          dest: 'assets/img/',
          filter: 'isFile'
      }
  },

  'deploy': {
	// Username and Password located in .ftppass
     images: {
         auth: {
             host: 'domainname.com',
             port: 21,
             authKey: 'key1'
         },
         src: 'assets/img/',
         dest: 'path/on/server/img',
         exclusions: ['assets/img/.DS_Store']
     },
     css: {
         auth: {
             host: 'domainname.com',
             port: 21,
             authKey: 'key1'
         },
         src: 'assets/css/',
         dest: 'path/on/server/css',
         exclusions: ['assets/css/.DS_Store']
       }  
     },

    watch: {
  	  // Make sure you load the chrome extension
  	  // https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei
      options: {
          livereload: true
      },
      image: {
		  // Place your Adobe CC files here with asset generation turned on. 
		  // This will automatically move the images to your assets/img folder.
          files: ['_design/*/*'],
          tasks: ['copy:images']
      },
      js: {
        files: ['assets/js/*.js'],
        tasks: ['concat:js', 'uglify:js']
      },
      css: {
        files: ['assets/less/*.less'],
        tasks: ['less']
      },
      // Automatically FTP source? Otherwise run "grunt deploy"
      // 'ftp-images': {
      //     files: ['images/*'],
      //     tasks: ['ftp-deploy:images']
      // },
      // 'ftp-css': {
      //     files: ['css/*'],
      //     tasks: ['ftp-deploy:css']
      // }
    }

  });
 
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-ftp-deploy');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // grunt.loadNpmTasks('grunt-notify');
};