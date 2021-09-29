
node {
  stage('SCM') {
    checkout scm
  }
  stage('SonarQube Analysis') {
    def scannerHome = tool 'SonarScanner';
    withSonarQubeEnv() {
      bat "D:\sonar-scanner-4.6.2.2472-windows\bin\sonar-scanner.bat"
    }
  }
}
