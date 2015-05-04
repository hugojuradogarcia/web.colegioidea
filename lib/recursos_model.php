<?php 

require_once('db_abstract_model.php');

class Recursos extends DBAbstractModel
{

	public 		$row 		= 0;
	public 		$rows_recursos = array();

	function __construct()
	{
		$this->db_name = 'admin.recursos';
	}

	function __destruct()
	{
		unset($this);
	}

	// SELECT
	public function get( $id_recursos = '' )
	{
		if( $id_recursos != '' ):
			$this->query = "
				SELECT 		id_recursos, editor, producto, descriptivo, logo, ficha_a, ficha_b, video
				FROM 		recursos
				WHERE 		id_recursos = '$id_recursos'
			";
			$this->get_results_from_query();
		endif;

		// COUNT user
		$this->row = count( $this->rows );

		
		
		$i = 0;
		if ( count( $this->rows ) > 0 ):
			while ( $i < count( $this->rows ) ):
				$this->rows_recursos[ 0 ]["id_recursos"] = $this->rows[$i]["id_recursos"];
				$this->rows_recursos[ 0 ]["editor"] = $this->rows[$i]["editor"];
				$this->rows_recursos[ 0 ]["producto"] = $this->rows[$i]["producto"];
				$this->rows_recursos[ 0 ]["descriptivo"] = $this->rows[$i]["descriptivo"];
				$this->rows_recursos[ 0 ]["logo"] = $this->rows[$i]["logo"];
				$this->rows_recursos[ 0 ]["ficha_a"] = $this->rows[$i]["ficha_a"];
				$this->rows_recursos[ 0 ]["ficha_b"] = $this->rows[$i]["ficha_b"];
				$this->rows_recursos[ 0 ]["video"] = $this->rows[$i]["video"];

				$i ++;
			endwhile;

		endif;	
	}


}

?>