<?php 
		
		
	/**
	 * @Entity
	 * @Table(name="Bienes")
	 */
	class ClassName	{
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
		private $mubroId;
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
     	* @OneToMany(targetEntity="componente")
     	* @JoinColumn(name="Id", referencedColumnName="IdComponente")
     	*/
		private $componentes;
	}

 ?>