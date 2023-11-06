PROGECT_NAME = "test"
pipeline {

  agent {
    kubernetes {
      yamlFile 'builder.yaml'
    }
  }

  stages {

    stage('Deploy App to Kubernetes') {
      steps {
        container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl create ns crud9'
            sh 'kubectl apply -f ./manifests -n crud9'
          }
        }
      }
    }
    
    stage('Test'){
      steps{
        script{
         container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl get svc -n crud9'
            sleep time: 10, unit: 'SECONDS'
            sh 'kubectl get po -n crud9'
            sh "cd /usr/bin"
            sh "pwd"
            sh 'telnet 192.168.49.1 80'

          }
        }          
          }
        }
      }
    }  
}
