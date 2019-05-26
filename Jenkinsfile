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
		stage('Sonarqube Analysis') {
		    steps {
		    	script {
          			scannerHome = tool 'SonarQube Scanner 2.8'
        		}
		        withSonarQubeEnv('sonarqube') {
		            sh "${scannerHome}/bin/sonar-scanner"
		        }
		        timeout(time: 10, unit: 'MINUTES') {
		            waitForQualityGate abortPipeline: true
		        }
		    }
		}
	}
}