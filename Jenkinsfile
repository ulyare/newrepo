PROGECT_NAME = "test"
pipeline {
    agent any

    stages {
        stage('Check Application') {
            steps {
                script {
                    def appURL = 'http://127.0.0.1:1501' // Замените 'http://your-app-url' на URL вашего приложения
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
