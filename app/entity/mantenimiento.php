<?php 
	
	/**
	 * @Entity
	 * @Table(name="Mantenimiento")
	 */
	class mantenimiento	
	{
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

		private $detalleMantenimiento;
	}

 ?>