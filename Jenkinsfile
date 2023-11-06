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
            sh 'kubectl create ns crud7'
            sh 'kubectl apply -f ./manifests -n crud7'
          }
        }
      }
    }
    
    stage('Test'){
      steps{
        script{
         container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl get svc -n crud7'
            sleep time: 10, unit: 'SECONDS'
            sh 'kubectl get po -n crud7'
            sh 'telnet 192.168.49.1 80'

          }
        }          
          }
        }
      }
    }  
}
