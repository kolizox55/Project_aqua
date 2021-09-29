
node {
  stage('SCM') {
    checkout scm
  }
  stage('SonarQube Analysis') {
    def scannerHome = tool 'test-demo';
    withSonarQubeEnv() {
      bat "D:\sonar-scanner-4.6.2.2472-windows\bin\sonar-scanner.bat"
    }
  }
}
