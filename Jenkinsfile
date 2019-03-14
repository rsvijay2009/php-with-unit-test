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
		stage('Create a Text file') {
		  steps {
		   	sh 'mkdir TestPipline.txt'
		  }
		}
		stage('Final Step') {
		  steps {
		   	echo "Pipeline is completed successfully!!!"
		  }
		}
	}
}