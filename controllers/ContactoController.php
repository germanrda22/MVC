<?php
    namespace Controllers;
    use Models\Contacto;

    class ContactoController
    {
        public function mostrarTodos()
        {
            $contacto = new Contacto();
            $todos_mis_contactos = $contacto->conseguirTodos();
            require_once 'views/contacto/mostrarTodos.php';
        }
    }