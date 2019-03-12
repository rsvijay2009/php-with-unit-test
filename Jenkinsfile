pipeline {
	agent any
	options { buildDiscarder(logRotator(numToKeepStr: '5')) }
	stages {
		stage('Step 1') {
		  steps {
		   	echo "This is first step in Jenkins pipeline"
		  }
		}
		stage('Unit test') {
		  steps {
		   	sh 'make test'
		  }
		}
		stage('Step 3') {
		  steps {
		   	echo "Pipeline is completed successfully!!!"
		  }
		}
	}
}