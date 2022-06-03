<?php
    namespace Config;
    use PDO;
    use PDOException;

    class BaseDatos
    {
        private PDO $conexion;
        private mixed $resultado; //mixed novedad en PHP cualquier valor

        public function __construct(
            private string $servidor = SERVIDOR,
            private string $usuario = USUARIO,
            private string $pass = PASS,
            private string $base_datos = BASE_DATOS
        )
        {
            $this->conexion = $this->conectar();
        }

        public function conectar(): PDO
        {
            try
            {
                $opciones = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::MYSQL_ATTR_FOUND_ROWS => true
                );
                $conexion = new PDO("mysql:host={$this->servidor}; dbname={$this->base_datos}", $this->usuario, $this->pass, $opciones);
                return $conexion;
            }catch(PDOException $e){
                echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: '.$e->getMessage();
                exit;
            }
        }

        public function consulta(string $consultaSQL): mixed
        {
            $this->resultado = $this->conexion->query($consultaSQL);
        }

        public function extraerRegistro(): mixed
        {
            return ($fila = $this->resultado->fetch(PDO::FETCH_ASSOC))? $fila:false;
        }

        public function extraerTodos(): array
        {
            return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }