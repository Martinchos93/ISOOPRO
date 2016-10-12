<?php 

namespace App\Entities;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
	/**
	 * @Entity
	 * @Table(name="Bienes")
	 */
	class Bien 
	{
 
		public function __construct() {
			$this->$componentes = new ArrayCollection();
		}	
		/**
	     * @Id @Column(type="integer")
	     * @GeneratedValue
	     */
		private $id;

		/** @Column(length=20) */
		private $nombre;
		/** @Column(length=500) */
		private $descripcion;
		/** @Column(type="integer") */
		private $rubroId;
		/** @Column(length=20) */
		private $modelo;
		/** @Column(type="decimal") */
		private $valor;
		/**
     	* @OneToMany(targetEntity="mantenimiento")
     	* @JoinColumn(name="Id", referencedColumnName="IdMantenimiento")
     	*/
		private $mantenimientos;
		/**
	     * @OneToMany(targetEntity="Componente", mappedBy="bien")
	     */
		private $componentes;
		/**
	     * @ManyToOne(targetEntity="Rubro", inversedBy="Bienes")
	     * @JoinColumn(name="IdRubro", referencedColumnName="id")
	     */
		private $rubro

		public function getNombre()
    	{
        	return $this->nombre;
    	}
 
    	public function getDescripcion()
    	{
        	return $this->descripcion;
    	}

 		public function getModelo()
    	{
        	return $this->modelo;
    	}

		public function getValor()
    	{
        	return $this->valor;
    	}
		
		public function getMantenimientos()
    	{
        	return $this->mantenimientos;
    	}

		public function getComponentes()
    	{
        	return $this->componentes;
    	}

    	public function setNombre($nombre)
    	{
        	$this->nombre = $nombre;
    	}	

		public function setDescripcion($descripcion)
    	{
        	$this->descripcion = $descripcion;
    	}	

		public function setModelo($modelo)
    	{
	        $this->modelo = $modelo;
    	}	
		
		public function setValor($valor)
    	{
	        $this->valor = $valor;
    	}	

    	public function setMantenimientos($mantenimientos)
    	{
	        $this->mantenimientos = $mantenimientos;
    	}	
		
		public function setComponentes($componentes)
    	{
        	$this->componentes = $componentes;
    	}	


	}
 
 ?>