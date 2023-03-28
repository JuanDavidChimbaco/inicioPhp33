<?php 

interface compra {
    public function validar();
}

abstract class carrito{
    abstract protected function registrar();
    public function mostrar(){
        echo "Implementando Información";
    }
    
}
class Pokemon
{
    public $nombre;
    protected $cantidad;
    private $imagen;

    public function __construct($nombre, $cantidad, $imagen){
        $this -> nombre = $nombre;
        $this -> cantidad = $cantidad;
        $this -> imagen = $imagen;
    }

    public function listar(){
        return $this -> nombre . $this -> cantidad . $this -> imagen;
    }
    public function setImagen($imagen){
        $this -> imagen = $imagen;
    }
}

class Roca extends carrito implements compra{
    public $color;
    public $nombre;
    protected $cantidad;
    protected $imagen;
    const COLOR = 'Negro';
    public function __construct($nombre,$cantidad,$imagen,$color){
        $this -> nombre = $nombre;
        $this -> cantidad = $cantidad;
        $this -> imagen = $imagen;
        $this -> color = $color;
    }

    function registrar(){
        echo "Registrando Elemntos Sl carrito";
    }

    function validar(){
        Echo "validando informaciom";
    }

    public function getColor() {
		return $this->color;
	}

	public function setColor($value) {
		$this->color = $value;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getCantidad() {
		return $this->cantidad;
	}

	public function setCantidad($value) {
		$this->cantidad = $value;
	}

	public function getImagen() {
		return $this->imagen;
	}

	public function setImagen($value) {
		$this->imagen = $value;
	}
}

$pikachu = new Pokemon("pikachu",10,"img/pikachu.png");

$lista = $pikachu->listar();

echo $lista;
echo "<br>";

$onix = new Roca("Onix",16,"img/onix.png", "girs");
// echo $onix->listar();
echo $onix ->registrar();
echo $onix ->validar();
echo "<br>";

$charmander = new Pokemon("Charmander",1,"img/charander.png");
echo $charmander->nombre;
$charmander-> nombre = "CHARMANDER";
echo $charmander->nombre;
echo "<br>";
// acceder a un elemento de la clase que sea estatico, sin estanciar
echo Roca::COLOR;