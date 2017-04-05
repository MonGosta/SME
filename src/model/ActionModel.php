<?php
namespace Mongosta\Model;
use Mongosta\Repository\ActionRepository as ActionRepo;

class ActionModel
{
    private $id;
    private $nombre;
    private $texto;
    private $modo_foto;
    private $registro_en_accion;
    private $texto_personalizado;
    private $sin_foto;
    private $etiquetado_multiple;
    private $id_evento;
    private $overlay_url;
    private $overlay_margin_x;
    private $overlay_margin_y;

    public function __construct( $nombre = "",$texto = "", $modo_foto = "", $registro_en_accion = "", $texto_personalizado = "", $sin_foto = "", $etiquetado_multiple = "", $id_evento = "", $overlay_url = "", $overlay_margin_x = "", $overlay_margin_y = "",$id = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->texto = $texto;
        $this->modo_foto = $modo_foto;     
        $this->registro_en_accion = $registro_en_accion;
        $this->texto_personalizado = $texto_personalizado;
        $this->sin_foto = $sin_foto;
        $this->etiquetado_multiple = $etiquetado_multiple;
        $this->id_evento = $id_evento;
        $this->overlay_url = $overlay_url;
        $this->overlay_margin_x = $overlay_margin_x;
        $this->overlay_margin_y = $overlay_margin_y;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getTexto()
    {
        return $this->texto;
    }
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    public function getModo_foto()
    {
        return $this->modo_foto;
    }
    public function setModo_foto($modo_foto)
    {
        $this->modo_foto = $modo_foto;
    }

    public function getRegistro_en_accion()
    {
        return $this->registro_en_accion;
    }
    public function setRegistro_en_accion($registro_en_accion)
    {
        $this->registro_en_accion = $registro_en_accion;
    }

    public function getTexto_personalizado()
    {
        return $this->texto_personalizado;
    }
    public function setTexto_personalizado($texto_personalizado)
    {
        $this->texto_personalizado = $texto_personalizado;
    }

    public function getSin_foto()
    {
        return $this->sin_foto;
    }
    public function setSin_foto($sin_foto)
    {
        $this->sin_foto = $sin_foto;
    }

    public function getEtiquetado_multiple()
    {
        return $this->etiquetado_multiple;
    }
    public function setEtiquetado_multiple($etiquetado_multiple)
    {
        $this->etiquetado_multiple = $etiquetado_multiple;
    }

    public function getId_evento()
    {
        return $this->id_evento;
    }
    public function setId_evento($id_evento)
    {
        $this->id_evento = $id_evento;
    }

    public function getOverlay_url()
    {
        return $this->overlay_url;
    }
    public function setOverlay_url($overlay_url)
    {
        $this->overlay_url = $overlay_url;
    }

    public function getOverlay_margin_x()
    {
        return $this->overlay_margin_x;
    }
    public function setOverlay_margin_x($overlay_margin_x)
    {
        $this->overlay_margin_x = $overlay_margin_x;
    }

    public function getOverlay_margin_y()
    {
        return $this->overlay_margin_y;
    }
    public function setOverlay_margin_y($overlay_margin_y)
    {
        $this->overlay_margin_y = $overlay_margin_y;
    }

    public function save()
    {
        if ($this->isValid($this->getNombre())) {
            // comporbaciones si hacen falta
            ActionRepo::create($this);
        } else {
            ActionRepo::update($this);
        }
    }

    public function delete()
    {
        //comprobaciones
        //var_dump($this);
        ActionRepo::delete($this);
    }

    private function isValid($nombre){

        if(ActionRepo::findByNombre($nombre)->getNombre()!= NULL){
          return false;        
        }else{
          return true;


        }
    }

 
}

?>