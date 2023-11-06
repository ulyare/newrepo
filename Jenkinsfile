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
            sh 'kubectl create ns crud6'
            sh 'kubectl apply -f ./manifests -n crud6'
          }
        }
      }
    }
    
    stage('Test'){
      steps{
        script{
         container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl get svc -n crud6'
            sleep time: 90, unit: 'SECONDS'
            sh 'kubectl get po -n crud6'
            sh 'ping 192.168.49.1'

          }
        }          
          }
        }
      }
    }  
}
