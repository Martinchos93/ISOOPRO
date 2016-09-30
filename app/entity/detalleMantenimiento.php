<?php 
	
	/**
	 * @Entity
	 * @Table(name="DetalleMantenimiento")
	 */
	class detalleMantenimiento	{
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
		private $cantidad;
	
	}

 ?>