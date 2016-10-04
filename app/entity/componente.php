<?php 

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
	}

 ?>