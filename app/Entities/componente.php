<?php 

namespace App\Entities;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
	/**
	 * @Entity
	 * @Table(name="Componente")
	 */
	class Componente 
	{
		/**
	     * @Id @Column(type="integer")
	     * @GeneratedValue
	     */
		private $id;
		/**
	     *  @Column(type="integer")
	     */
		private $idBien;
		/** @Column(length=3000) */
		private $descripcion;
		/** @Column(type="decimal") */
		private $importe;
	    /**
	     * @ManyToOne(targetEntity="Bien", inversedBy="Componentes")
	     * @JoinColumn(name="IdBienes", referencedColumnName="id")
	     */
		private $bien;

		public function getDescripcion()
    	{
        	return $this->descripcion;
    	}

		public function getImporte()
    	{
        	return $this->importe;
    	}

		public function getBien()
    	{
        	return $this->bien;
    	}

		public function setDescripcion($descripcion)
    	{
        	$this->descripcion = $descripcion;
    	}	

		public function setImporte($importe)
    	{
        	$this->importe = $importe;
    	}	

		public function setBien($bien)
    	{
        	$this->bien = $bien;
    	}	


	}

 ?>