<?php 
	/**
	 * @Entity
	 * @Table(name="Usuarios")
	 */
	class Usuario
	{

		public function __construct() {
			$this->$mantenimientos =  new ArrayCollection();
		} 

		/**
	     * @Id @Column(type="integer")
	     * @GeneratedValue
	     */
		private $id;
		/** @Column(length=20) */
		private $username;
		/** @Column(length=20) */
		private $password;
		/** @Column(type="integer") */
		private $nivel;

		/**
	     * @OneToMany(targetEntity="Mantenimientos", mappedBy="usuario")
	     */
		private $mantenimientos

	}

 ?>