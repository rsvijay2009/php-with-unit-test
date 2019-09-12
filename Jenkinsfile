pipeline {
	agent any
	options { buildDiscarder(logRotator(numToKeepStr: '5')) }
	stages {
		stage('Build') {
		  steps {
			sh 'make install'
		  }
		}
		stage('Test') {
	      steps {
	        parallel(
	          "Test Coverage": {
	            sh 'make test-cov'
	          },
	          "Cobertura Test Coverage": {
        		cobertura coberturaReportFile: 'reports/coverage.xml'
      		  }
	        )
	      }
		}
		stage('Analyse') {
	      steps {
	        parallel(
	          "Checkstyle": {
	            sh 'make checkstyle-cov'
	          }
	        )
	      }
		}
	}
}