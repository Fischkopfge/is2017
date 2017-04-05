<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workmodel extends CI_Model {

/**
* Invocar al constructor de la superclase CI_Model
*  Me permite cargar la base de datos
*/
public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

/**
*    Método para insertar clave, nombre, sueldo en la tabla  workers
*/

public function insertWork($tclave,$tnombre, $tsueldo)
{

  $data = array(
          'Clave' => $tclave,
          'Nombre' => $tnombre,
          'Sueldo' => $tsueldo
  );

  $this->db->insert('workers', $data); 
} 



/**
*Método para consultar un trabajador
*/
public function consultaWorker($tclave)
{
       
 $query = $this->db->get_where('workers',array('clave' => $tclave));
 if($query->num_rows() > 0 )
 {
   return $query->row();
 }
    
}


public function getWorkers()
{
  $query = $this->db->get('workers');
  return $query->result();
}


/** Devuelve la lista de trabajadores que se encuentran en la 
 * tabla workers 
 */

 function obtenerListaTrabajadores()
  {
    $this->load->database();
    $trabajadores = $this->db->get('workers'); //select * from workers;

    return $trabajadores->result();
 }








public function modifyWorker($tclave,$tnombre, $tsueldo)
{
  $data = array(
        'Nombre' => $tnombre,
        'Sueldo' => $tsueldo
  );

  $this->db->where('Clave', $tclave);
  $this->db->update('workers', $data);
	
}

public function delWorker($tclave)
{
  $this->db->where('Clave', $tclave);
  $this->db->delete('workers');
}


}