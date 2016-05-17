<?php

class Producto{
	private $nidproducto;
	private $snombre;
	private $ntotalusd;
	private $nano;
	private $querysel;
	function __construct($nid=NULL,$snom=NULL,$ntot=NULL,$nano=NULL){
		$this->nidproducto=$nid;
		$this->snombre=$snom;
		$this->ntotalusd=$ntot;
		$this->nano=$nano;
		
	}
	
	function IdProducto(){
		return $this->nidproducto;
	}
	
	function Nombre(){
		return $this->snombre;
	}
	
	function TotalUSD(){
		return $this->ntotalusd;
	}
	function Ano(){
		return $this->nano;
	}
	function setNidproducto($nidproducto) {
            $this->nidproducto = $nidproducto;
        }

        function setSnombre($snombre) {
            $this->snombre = $snombre;
        }

        function setNtotalusd($ntotalusd) {
            $this->ntotalusd = $ntotalusd;
        }

        function setNano($nano) {
            $this->nano = $nano;
        }

        function setQuerysel($querysel) {
            $this->querysel = $querysel;
        }

        	
	function Selecciona(){
		
		if (!$this->querysel){
		$db=dbconnect();
		/*Definici�n del query que permitira ingresar un nuevo registro*/
		
			$sqlsel="select idproducto,nombre,totalusd,ano from productos order by nombre";
		
			/*Preparaci�n SQL*/
			$this->querysel=$db->prepare($sqlsel);
		
			$this->querysel->execute();
		}
		
		$registro = $this->querysel->fetch();
		if ($registro){
			return new self($registro['idproducto'], $registro['nombre'], $registro['totalusd'], $registro['ano']);			
		}
		else {
			return false;
			
		}
	}
	
	function Elimina($id){
	
		$db=dbconnect();
		
			/*Definici�n del query que permitira eliminar un registro*/
			$sqldel="delete from productos where idproducto=:id";
	
			/*Preparaci�n SQL*/
			$querydel=$db->prepare($sqldel);
			
			$querydel->bindParam(':id',$id);
			
			$valaux=$querydel->execute();
	
		return $valaux;
	}
        
        function Agrega($id,$nombre,$total,$ano){
	
		$db=dbconnect();
		
			/*Definicion del query que permitira agregar un registro*/
			$sqladd="INSERT INTO productos VALUES(:id,:nombre,:total,:ano)";
	
			/*Preparacion SQL*/
			$queryadd=$db->prepare($sqladd);
			
			$queryadd->bindParam(':id',$id);
			$queryadd->bindParam(':nombre',$nombre);
			$queryadd->bindParam(':total',$total);
			$queryadd->bindParam(':ano',$ano);
			
			$valaux=$queryadd->execute();
	
		return $valaux;
	}
					
}
?>