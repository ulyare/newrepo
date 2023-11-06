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
            sh 'kubectl create ns crud11'
            sh 'kubectl apply -f ./manifests -n crud11'
          }
        }
      }
    }
    
    stage('Test'){
      steps{
        script{
         container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl get svc -n crud11'
            sleep time: 10, unit: 'SECONDS'
            sh 'kubectl get po -n crud11'
            sh 'ping -c 4 192.168.49.1'

          }
        }          
          }
        }
      }
    }  
}
