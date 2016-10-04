<?php 


	/**
	 * @Entity
	 * @Table(name="Rubros")
	 */
	class Rubro 
	{

		public function __construct(){
			$this->$bienes = new ArrayCollection();
		}
		/**
	     * @Id @Column(type="integer")
	     * @GeneratedValue
	     */
		private $id;
		/** @Column(length=20) */
		private $nombre;
		/** @Column(length=200) */
		private $descripcion;


		/** @OneToMany(targetEntity="Bien", mappedBy="rubro")
		private $bienes;

	}

 ?>