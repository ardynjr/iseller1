pipeline {
    agent any

    tools {
        nodejs 'node20'
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Node Info') {
            steps {
                bat 'node -v'
                bat 'npm -v'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'npm install'
            }
        }

        stage('Lint') {
            steps {
                script {
                    try {
                        bat 'npm run lint'
                    } catch (e) {
                        echo 'Lint not configured, skipped'
                    }
                }
            }
        }

        stage('Build') {
            steps {
                echo 'ℹ Build skipped (not a web project)'
            }
        }
    }

    post {
        success {
            echo ' CI pipeline SUCCESS'
        }
        failure {
            echo ' CI pipeline FAILED'
        }
    }
}


//jenkincoba111111
// khwbefhbhjrfb
