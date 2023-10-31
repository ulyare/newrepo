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
            sh 'kubectl create ns crudd'
            sh 'kubectl apply -f ./manifests -n crudd'
          }
        }
      }
    }

stage('Check Application') {
            steps {
                script {
                    def appURL = 'http://127.0.0.1:1501' 
                  def response = httpRequest(url: appURL, httpMode: 'GET')

                    if (response.status == 200) {
                        echo "Приложение отвечает со статусом ${response.status}"
                    } else {
                        currentBuild.result = 'FAILURE'
                        error "Приложение не отвечает (статус ${response.status})"
                    }
                }
            }
        }
     
  }
}
