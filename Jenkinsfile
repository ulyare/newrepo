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
            sh 'kubectl create ns crudapp_db_1'
            sh 'kubectl apply -f ./manifests -n crudapp_db_1'
          }
        }
      }
    }

  }
}
