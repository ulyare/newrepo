PROGECT_NAME = "test"
pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                // Установка и настройка окружения
                script {
                    // Установка JDK
                    def jdkInstallation = tool name: 'JDK', type: 'jdk'
                    env.JAVA_HOME = "${jdkInstallation}"

                    // Установка MySQL клиента
                    sh 'apt-get install -y mysql-client'
                }
            }
        }

        stage('Test Connection') {
            steps {
                // Соединение с MySQL сервером и выполнение запроса
                script {
                    def mysqlHost = 'localhost'
                    def mysqlPort = '3306'
                    def mysqlDatabase = 'db'
                    def mysqlUser = 'root'
                    def mysqlPassword = '1'

                    def connectionResult = sh(returnStatus: true, script: "mysql --host=${mysqlHost} --port=${mysqlPort} --user=${mysqlUser} --password=${mysqlPassword} --execute='SELECT 1;'")
                    if (connectionResult == 0) {
                        echo 'Connection to MySQL successful'
                    } else {
                        error 'Failed to connect to MySQL'
                    }
                }
            }
        }
    }
}
