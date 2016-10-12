<?php 
namespace App\Entities;	

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
	/**

	 * @Entity
	 * @Table(name="Mantenimiento")
	 */
	class Mantenimiento	
	{

		public function __construct() {
			$this->$detalleMantenimiento =  new ArrayColection();
		}	
		/**
	     * @Id @Column(type="integer")
	     * @GeneratedValue
	     */
		private $id;
		/** @Column(type="integer") */
		private $idBien;
		/** @Column(length=3000) */
		private $descripcion;
		/** @Column(type="datetime", name="Fecha") */
		private $fecha;
		/** @Column(length=20) */
		private $tipo;
		/** @Column(type="integer") */
		private $idUsuario;
		/** @Column(type="decimal") */
		private $importe;
		/**
    		@ManyToOne(targetEntity="Usuario", inversedBy="mantenimientos")
     		@JoinColumn(name="IdUsuario", referencedColumnName="Id")
    	 */
		private $usuario
		/**
	     * @OneToMany(targetEntity="DetalleMantenimiento", mappedBy="usuario")
	     */
		private $detallesMantenimiento;

		public function getDescripcion()
    	{
        	return $this->descripcion;
    	}

		public function getFecha()
    	{
        	return $this->fecha;
    	}

		public function getTipo()
    	{
        	return $this->tipo;
    	}

		public function getImporte()
    	{
        	return $this->importe;
    	}

		public function getUsuario()
    	{
        	return $this->usuario;
    	}

		public function getDetallesMantenimiento()
    	{
        	return $this->detallesMantenimiento;
    	}


		public function setDescripcion($descripcion)
    	{
        	$this->descripcion = $descripcion;
    	}	

    	public function setFecha($fecha)
    	{
        	$this->fecha = $fecha;
    	}	    	

    	public function setTipo($tipo)
    	{
        	$this->tipo = $tipo;
    	}	    	

    	public function setImporte($importe)
    	{
        	$this->importe = $importe;
    	}	    	

		public function setUsuario($usuario)
    	{
        	$this->usuario = $usuario;
    	}	

    	public function setDetallesMantenimientos($detallesMantenimiento)
    	{
        	$this->detallesMantenimiento = $detallesMantenimiento;
    	}	
	}

 ?>