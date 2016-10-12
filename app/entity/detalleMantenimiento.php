<?php 
namespace App\Entities;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
	/**
	 * @Entity
	 * @Table(name="DetalleMantenimiento")
	 */
	class DetalleMantenimiento 
	{
		/**
	     * @Id @Column(type="integer")
	     * @GeneratedValue
	     */
		private $id;
		/** @Column(type="integer") */
		private $idMantenimiento;
		/** @Column(type="integer") */
		private $idComponente;
		/** @Column(type="integer") */	


		/** 
			@ManyToOne(targetEntity="Mantenimiento", inversedBy="detallesMantenimiento")
     		@JoinColumn(name="IdMantenimiento", referencedColumnName="Id")
		*/
		private $detalleMantenimiento;

		public function getDetalleMantenimiento()
    	{
        	return $this->detalleMantenimiento;
    	}

		public function setDetalleMantemiento($detalleMantenimiento)
    	{
        	$this->detalleMantenimiento = $detalleMantenimiento;
    	}	
	}

 ?>