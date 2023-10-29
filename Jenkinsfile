PROJECT_NAME = "test"
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
            sh 'kubectl create ns crud'
            sh 'kubectl apply -f ./manifests -n crud'
          }
        }
      }
    }
    stage('Tест 1. проверка имени проекта') {
      steps {
        script {
          echo "Start of stage test1"
          echo "Имя задачи, заданное в Jenkins:" + env.JOB_NAME // вывести имя задачи в Jenkins
          echo "Имя в Jenkinsfile: ${PROJECT_NAME}"
          if (env.JOB_NAME==PROJECT_NAME) { // если имя задачи в Jenkins совпадает с именем проекта, определенное в environment, то все ок
            echo "Имя корректное"
          }
          else {
            echo "Имена не совпадают"
            error('Проверка имени не прошла') // если имя задачи в Jenkins НЕ совпадает с именем проекта, определенное в environment, то прерываем

           }
        }
      }
    }
    stage("Тест 2. Наличие файла") {
      steps {
         script {
           echo "Start of stage test2"
           if (fileExists('1.txt')) {
             echo "Файл найден. Открываю"
             sh 'cat 1.txt'
           }
           else {
             echo "Файл не найден"
             error('Проверка наличия файла не прошла')
           }
        }
      }
    }
  }
}