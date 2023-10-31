PROGECT_NAME = "test"
pipeline {
    agent any

    stages {
        stage('Test Application') {
            steps {
                script {
                    def appURL = 'http://localhost:1501'  // Замените порт и путь к вашему приложению при необходимости
                    try {
                        sh "curl -s -f $appURL -o /dev/null"
                        echo "Приложение на $appURL отвечает успешно."
                    } catch (Exception e) {
                        error "Приложение на $appURL недоступно: ${e.getMessage()}"
                    }
                }
            }
        }
    }
}
