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
		stage("Build & SonarQube analysis") {
           steps {
              withSonarQubeEnv('SonarQubeScanner') {
                sh 'mvn clean package sonar:sonar'
              }
            }
          }
          stage("Quality Gate") {
            steps {
              timeout(time: 1, unit: 'HOURS') {
                waitForQualityGate abortPipeline: true
              }
            }
          }
	}
}