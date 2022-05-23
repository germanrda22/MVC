<?php
namespace Models;
use Config\BaseDatos;

class Contacto{

    private BaseDatos $conexion;
    private string $id;
    private string $nombre;
    private string $apellidos;
    private string $correo;
    private string $direccion;
    private string $telefono;
    private ?string $fecha_nacimiento;

    public function __construct(){
        $this->conexion = new BaseDatos;
    }

    public function save()
    {
        
    }
    
    public function getAll(): ?array{
        $this->conexion->consulta("SELECT * FROM contactos");
        return $this->conexion->extraerTodos();
    }

    public function extraer_registro():?array{
        return ($contact = $this->conexion->extraerRegistro())?$contact:null;
    }
    
    public function getConexion()
    {
        return $this->conexion;
    }
 
    public function setConexion($conexion)
    {
        $this->conexion = $conexion;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }
 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }
 
    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }
}