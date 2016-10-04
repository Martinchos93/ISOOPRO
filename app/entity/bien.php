<?php 
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
	}
 
 ?>