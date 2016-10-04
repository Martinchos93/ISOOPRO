<?php 
	
	/**
	 * @Entity
	 * @Table(name="DetalleMantenimiento")
	 */
	class DetalleMantenimiento {
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
	}

 ?>