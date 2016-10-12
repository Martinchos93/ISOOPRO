<?php 

namespace App\Entities;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
	/**
	 * @Entity
	 * @Table(name="Rubros")
	 */
	class Rubro 
	{
		public function __construct(){
			$this->$bienes = new ArrayCollection();
		}
		/**
	     * @Id @Column(type="integer")
	     * @GeneratedValue
	     */
		private $id;
		/** @Column(length=20) */
		private $nombre;
		/** @Column(length=200) */
		private $descripcion;


		/** @OneToMany(targetEntity="Bien", mappedBy="rubro")
		private $bienes;

		*/

		public function getNombre()
    	{
        	return $this->nombre;
    	}

		public function getDescripcion()
    	{
        	return $this->descripcion;
    	}


		public function setNombre($nombre)
    	{
        	$this->nombre = $nombre;
    	}	

		public function setDescripcion($descripcion)
    	{
        	$this->descripcion = $descripcion;
    	}	


	}

 ?>