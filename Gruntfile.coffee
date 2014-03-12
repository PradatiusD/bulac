module.exports = (grunt) ->

	grunt.initConfig(
		pkg: grunt.file.readJSON('package.json')

		sass:
			dist:
				files:
					'BULAC/style.css': 'BULAC/style.sass'
					'BULAC-child/style.css': 'BULAC-child/style.sass'
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
					'BULAC/bulac.min.js': ['bower_components/fastclick/lib/fastclick.js','bower_components/foundation/js/foundation.js','bower_components/foundation/js/foundation/foundation.topbar.js','global.js']

		copy:
			main:
				files: [expanded: true, src: ['BULAC/**','BULAC-child/**'], dest: '../themes/']



	)
	grunt.loadNpmTasks('grunt-contrib-copy')
	grunt.loadNpmTasks('grunt-contrib-watch')
	grunt.loadNpmTasks('grunt-contrib-uglify')
	grunt.loadNpmTasks('grunt-contrib-sass')
	grunt.registerTask('default', ['watch'])
