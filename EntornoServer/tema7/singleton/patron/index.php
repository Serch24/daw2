<?php
class patronSingleton
{
        private $ldb;
        private $fila = [];
        private static $intancia;

        private function __construct()
        {
                $this->ldb = new PDO("");
        }

        public static function singleton()
        {
                if (!isset(self::$intancia)) {
                        $miclase = __CLASS__;
                        self::$intancia = new $miclase();
                }
                return self::$intancia;
        }

        public function __clone()
        {
                trigger_error("no se puede honey", E_USER_ERROR);
        }

        public function usuarios()
        {
                $consulta = $this->ldb->prepare("consulta");
                $consulta->execute();
                if ($consulta->rowCount() > 0) {
                        while ($row = $consulta->fetch()) {
                                $this->fila[] = $row;
                        }
                        return $this->fila;
                }
        }
}

?>
