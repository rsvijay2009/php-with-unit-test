pipeline {
	agent any
	options { buildDiscarder(logRotator(numToKeepStr: '5')) }
	stages {
		stage('First Step') {
		  steps {
			echo "Pipeline process is started"
		  }
		}
		stage('Install') {
		  steps {
			sh 'make install'
		  }
		}
		stage('Testing') {
		  steps {
			sh 'make test'
		  }
		}
		stage('Final Step') {
		  steps {
		   	echo "Pipeline is completed successfully!!!"
		  }
		}
	}
}