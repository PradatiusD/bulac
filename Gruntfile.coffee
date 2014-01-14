module.exports = (grunt) ->

    # Project configuration.
	grunt.initConfig(
		pkg: grunt.file.readJSON('package.json')
		sass:
			dist:
				files:
					'BULAC/style.css': 'BULAC/style.scss'
					'BULAC-city/style.css': 'BULAC-city/style.scss'
		watch:
		  scripts:
		    files: ['**/*.scss']
		    tasks: ['sass']
		    options:
		      spawn: false
    )

	grunt.loadNpmTasks('grunt-contrib-watch')
	grunt.loadNpmTasks('grunt-contrib-sass')