module.exports = (grunt) ->

	grunt.initConfig(
		pkg: grunt.file.readJSON('package.json')

		sass:
			dist:
				files:
					'BULAC/style.css': 'BULAC/style.sass'
					'BULAC-child/style.css': 'BULAC-child/style.sass'
				options:
					loadPath: 'bower_components/foundation/scss'
		watch:
			styles:
				files: ['**/*.sass']
				tasks: ['sass','copy']
				options:
					spawn: false
			php:
				files: ['*/*.php','*/*.js']
				tasks: ['copy']
				options:
					spawn: false
			js:
				files: ['*.js']
				tasks: ['uglify']

		uglify:
			options:
				mangle: false
			js:
				files:
					'BULAC/bulac.min.js': [
						'bower_components/fastclick/lib/fastclick.js',
						'bower_components/foundation/js/foundation.js',
						'bower_components/foundation/js/foundation/foundation.topbar.js',
						'bower_components/foundation/js/foundation/foundation.alert.js',
						'global.js']

		copy:
			main:
				files: [expanded: true, src: ['BULAC/**','BULAC-child/**'], dest: '../themes/']

		'ftp-deploy':
			parent:
				auth:
					host: 'bulac.org'
					port: 21
					authKey: 'bulac'
				src: 'BULAC'
				dest: 'wp-content/themes/BULAC'
			child:
				auth:
					host: 'bulac.org'
					port: 21
					authKey: 'bulac'
				src: 'BULAC-child'
				dest: 'wp-content/themes/BULAC-child'
	)
	grunt.loadNpmTasks('grunt-contrib-copy')
	grunt.loadNpmTasks('grunt-contrib-watch')
	grunt.loadNpmTasks('grunt-contrib-uglify')
	grunt.loadNpmTasks('grunt-contrib-sass')
	grunt.loadNpmTasks('grunt-ftp-deploy')
	grunt.registerTask('default', ['watch'])
	grunt.registerTask('deploy', ['ftp-deploy'])