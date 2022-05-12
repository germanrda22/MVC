<?php
    namespace Models;

    class Contacto
    {
        private string $id;
        private string $nombre;
        private string $apellidos;
        private string $correo;
        private string $direccion;
        private string $telefono;
        private ?string $fechaNacimiento;

        public function getId(): int
        {
                return $this->id;
        }

        public function setId(int $id)
        {
                $this->id = $id;

                return $this;
        }

        public function getNombre(): string
        {
                return $this->nombre;
        }

        public function setNombre(string $nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getApellidos(): string
        {
                return $this->apellidos;
        }

        public function setApellidos(string $apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        public function getCorreo(): string
        {
                return $this->correo;
        }

        public function setCorreo(string $correo)
        {
                $this->correo = $correo;

                return $this;
        }

        public function getDireccion(): string
        {
                return $this->direccion;
        }

        public function setDireccion(string $direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }

        public function getTelefono(): string
        {
                return $this->telefono;
        }

        public function setTelefono(string $telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }

        public function getFechaNacimiento(): string
        {
                return $this->fechaNacimiento;
        }

        public function setFechaNacimiento(?string $fechaNacimiento)
        {
                $this->fechaNacimiento = $fechaNacimiento;

                return $this;
        }

        public function conseguirTodos(): string
        {
            return "Aqui mostraremos todos los contactos de nuestra agenda";
        }
    }