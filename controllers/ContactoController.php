<?php
    namespace Controllers;
    use Models\Contacto;

    class ContactoController
    {
        public function mostrarTodos()
        {
            $contacto = new Contacto();
            $todos_mis_contactos = $contacto->getAll();
            require_once 'views/contacto/mostrarTodos.php';
        }

        public function save()
        {
            if(isset($_POST))
            {
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
                $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
                $fecha_nac = isset($_POST['fecha_nac']) ? $_POST['fecha_nac'] : false;
                if($nombre && $apellidos && $email && $direccion && $telefono)
                {
                    $contacto = new Contacto();
                    $contacto->setId(null);
                    $contacto->setNombre($nombre);
                    $contacto->setApellidos($apellidos);
                    $contacto->setCorreo($email);
                    $contacto->setDireccion($direccion);
                    $contacto->setTelefono($telefono);
                    if(isset($fecha_nac))
                    {
                        $contacto->setFecha_nacimiento($fecha_nac);
                    }
                    $contacto->save();
                }
            }
        }
    }