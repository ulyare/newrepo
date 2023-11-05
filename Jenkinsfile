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
            sh 'kubectl create ns crud1'
            sh 'kubectl apply -f ./manifests -n crud1'
          }
        }
      }
    }
    
    stage('Test'){
      steps{
        script{
          
         
          echo '-------------Link test started-------------'
         container('kubectl') {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'kubectl get svc -n crud2'
            sh 'kubectl get po -n crud2'

          }
        }
          echo '-------------Link test finished-------------'
          
          }
        }
      }
    }

  
}
