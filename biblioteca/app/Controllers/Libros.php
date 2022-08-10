<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;

class Libros extends Controller{
    public function index(){

        $libro = new Libro();
        $datos['libros'] = $libro -> orderBy('id', 'ASC') -> findAll();
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');

        return view ('listar_libros', $datos);
    }

    public function crear () {
        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');

        return view ('crear_libro', $datos);
    }

    public function guardar(){    

        $libro = new Libro();
        $imagen = $this->request->getFile('imagenLibro');

        $nuevoNombre = $imagen -> getRandomName();

        $imagen -> move('../public/uploads/', $nuevoNombre);
    
        $datos = [
            'nombre' => $this -> request -> getVar('nombre'),
            'imagen' => $nuevoNombre
        ];

        $libro -> insert ($datos);

        return $this -> response -> redirect(site_url('listar')); 

    }

    public function borrar ($id=null) {
        $libro = new Libro();
        $datosLibro = $libro -> where('id', $id) -> first();

        $ruta = ('../public/uploads/'.$datosLibro['imagen']);
    
        unlink($ruta);

        $libro -> where('id', $id) -> delete($id);

        return $this -> response -> redirect(site_url('listar')); 
    }

    public function editar($id=null) {
        $libro = new Libro();

        $datos['libro'] = $libro -> where ('id', $id) -> first();


        $datos['header'] = view('template/header');
        $datos['footer'] = view('template/footer');

        return view ('editar_libro', $datos);
    }

    public function actualizar(){
        $libro = new Libro();

        $datos = [
            'nombre' => $this -> request -> getVar('nombre'),
        ];

        $id = $this -> request -> getVar('id');
        
        $libro -> update ($id, $datos);

    }
}