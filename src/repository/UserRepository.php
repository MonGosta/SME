<?php 
namespace Mongosta\Repository;

use \PDO;
use Mongosta\Bootstrap\Database as Db;
use Mongosta\Model\UserModel as User;

class UserRepository{


  	static public function getAll(){
  		$db = Db::getInstance();
  	    $req = $db->query('SELECT * FROM sme_usuarios');

  	    foreach ($req as $usuario) {
  	    	$nombres[] = new User($usuario['nombre'],$usuario['usuario'],$usuario['contrasena'],
  	    		              $usuario['email'],$usuario['telefono'],$usuario['dni'],
  	    		              $usuario['id_cliente']);
  	    }
  	    //$nombres = $req;
  		return $nombres;
      }

    static public function findById($id){
    	    $db = Db::getInstance();
    	    $id = intval($id);
  	    $req = $db->prepare('SELECT * FROM sme_usuarios WHERE id= :id');
  	     $req->execute(array('id' => $id));
  	     $req = $req->fetch();
  	    // var_dump($req);
          $user = new um($req['nombre'],$req['usuario'],$req['contrasena'],
  	    		              $req['email'],$req['telefono'],$req['dni'],
  	    		              $req['id_cliente']);
          
  	 
     	    return $user;
     }

     static public function create(){

     	  $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO sme_usuarios ( nombre, usuario, contrasena, email, 
        												  telefono,dni, id_cliente) 
        	                    VALUES (:nombre, :usuario, :contrasena, :email, :telefono, :dni, 
        	                             :id_cliente);');
        $req->execute(array(':nombre' => $this->getNombre(),
                             ':usuario' => $this->getUsuario(),
                              ':contrasena' => $this->getContrasena(),
                              ':email' => $this->getEmail(),
                              ':telefono' => $this->getTelefono(),
                              ':dni' => $this->getDni(),
                              ':id_cliente' => $this->getId_cliente()

                           )
                      );


     }

      public static function delete($id){
           $db = Db::getInstance();
           $id = intval($id);
           $req = $db->prepare('DELETE FROM sme_usuarios WHERE id = :id');
           $req->execute(array('id' => $id));

      }


      public function update(){
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE sme_usuarios SET nombre = :nombre, usuario = :usuario , 
                             contrasena = :contrasena , email = :email , telefono = :telefono , 
                             dni = :dni , id_cliente = :id_cliente  WHERE id = :id;');
       
        $req->execute(array(':id' => $this->getId(),
                            ':nombre' => $this->getNombre(),
                            ':usuario' => $this->getUsuario(),
                            ':contrasena' => $this->getContrasena(),
                            ':email' => $this->getEmail(),
                            ':telefono' => $this->getTelefono(),
                            ':dni' => $this->getDni(),
                            ':id_cliente' => $this->getId_cliente()
                            )
                      );

      }

     static public function save($user){
        $id=$user->getEmail();
        if(findById($id)!=null){
          update();        
        }else{
          User::save();
        }
     }
      
}
