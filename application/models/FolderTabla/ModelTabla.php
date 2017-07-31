<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class ModelTabla extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}


		public function getElmentostabla($offset,$limit,$search)
		{
			


			// sacamos el total de registros de la consulta a plasmar en nuestra tabla de boostrap  


			$sqlDatosUsuarios = "select id_usuario,
										nombre,
										apellidos,
										email,
										fecha_registro ,
										'<button  type=''button'' class=''btn btn-primary btnModificar''> <span class=''glyphicon glyphicon-pencil''></span> </button>' as modificar,
										'<button  type=''button'' class=''btn btn-danger btnEliminar''> <span class=''glyphicon glyphicon-circle-arrow-down''></span> </button>' as eliminar 
								from usuarios ";
		    $query = $this->db->query($sqlDatosUsuarios);

		     $totalData = $query->num_rows();
			// $totalFiltered = $totalData;



			//verificamos si es que existen datos que se filtraran en nuestra consulta 

			if( !empty($search) ) 
			{   

				$sqlDatosUsuarios = "select id_usuario,
											nombre,
											apellidos,
											email,
											fecha_registro,
										    '<button  type=''button'' class=''btn btn-primary btnModificar''> <span class=''glyphicon glyphicon-pencil''></span> </button>' as modificar,
										'<button  type=''button'' class=''btn btn-danger btnEliminar''> <span class=''glyphicon glyphicon-circle-arrow-down''></span> </button>' as eliminar 
									 from usuarios where ( 
														 nombre like '%".$this->db->escape_str($search)."%' or  
														 apellidos like '%".$this->db->escape_str($search)."%' or  
														 email like '%".$this->db->escape_str($search)."%' or
														 fecha_registro like '%".$this->db->escape_str($search)."%' ) ";

									
				$query = $this->db->query($sqlDatosUsuarios);
				$totalData = $query->num_rows(); 
				

			}
			

			$limitQuery = " LIMIT ".$offset." ,".$limit." ";
            $sqlDatosUsuarios .= $limitQuery;
                
            $query = $this->db->query($sqlDatosUsuarios);

			

		$json_data = array(
			// "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"total"    => intval( $totalData ),  // total number of records
			// "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"rows"            => $query->result()  // total data array
			);


		return $json_data;


		}








	}

	


?>