PROGECT_NAME = "test"
pipeline {
    agent any

    stages {
        stage('Test Application') {
            steps {
                script {
                    def appURL = 'http://127.0.0.1:1501'
                    def response = sh(script: "curl -s -o /dev/null -w \"%{http_code}\" $appURL", returnStatus: true)
                    
                    if (response == 200) {
                        echo "Приложение отвечает успешно. Код ответа: ${response}"
                    } else {
                        error "Приложение не отвечает. Код ответа: ${response}"
                    }
                }
            }
        }
    }
}
