<?php 

    require_once "conexaobd.php";
    require_once "session.php";
    require_once "route.php";

    //Classe de inicialização da aplicação - Nela todo o controle da aplicação é estabelecido.
    class Application {

        private $dataBase;
        private $session;
        private $config;
        private $routeController;

        static $instance;

        static function getInstance() {
            return Application::$instance;
        }

        public function __construct($autoConnect = true) {
            $this->initApp($autoConnect);  
        }

        private function getConfigFileName() {
            return "config.env";
        }

        public function getConfigEntry($group, $name) {
            if(isset($this->config)) {
                if(isset($this->config->{$group}->{$name})) {
                    return $this->config->{$group}->{$name};
                } else {
                    throw new Exception("Chave de configuração ".$group."->".$name." não encontrada");
                }
            } else {
                throw new Exception("Conteúdo de configuração não carregado");
            }
        }

        private function initApp($autoConnect) {
            //Carregar instância da aplicação estática para recuperar depois
            Application::$instance = $this;

            //Carregar a configuração a partir do arquvio config.env
            if(file_exists($this->getConfigFileName())) {
                $this->config = json_decode(file_get_contents($this->getConfigFileName()));
            } else {
                throw new Exception("Arquivo de configuração não encontrado.");
            }

            //Caso a aplicação deve iniciar já conectada ao banco de dados...
            if($autoConnect) {
                $this->conectaBd();
            }

            //Inicializar sessão;
            $this->session = new session();
            $this->session->iniciaSessao();

            //Instanciar controlador de rota
            $this->routeController = new Route();
        }

        public function conectaBd() {
            if(!isset($this->dataBase)) {
                $this->dataBase = new Conexaobd();
                $this->dataBase->setHost($this->getConfigEntry("database", "host"));
                $this->dataBase->setPort($this->getConfigEntry("database", "port"));
                $this->dataBase->setDatabase($this->getConfigEntry("database", "dbname"));
                $this->dataBase->setUser($this->getConfigEntry("database", "user"));
                $this->dataBase->setPassword($this->getConfigEntry("database", "password"));
            }
            return $this->dataBase->conecta();
        }

        public function getDataBase() {
            return $this->dataBase;
        }

        public function getSession() {
            return $this->session;
        }

        public function route() {
            $this->routeController->execute();
        }

        public function getModel($context) {
            return $this->routeController->getInstanceHelper('model', $context);
        }

        public function display($content) {
            echo $content;
        }

        public function displayFile($file) {
            if(file_exists($file)) {
                echo file_get_contents($file);
            }
        }

    }

?>