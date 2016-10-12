<?php 
	namespace App\Entities;
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
		public $id;
		/** @Column(length=20) */
		public $username;
		/** @Column(length=20) */
		public $password;
		/** @Column(type="integer") */
		public $nivel;

		/**
	     * @OneToMany(targetEntity="Mantenimientos", mappedBy="usuario")
	     */
		public $mantenimientos;

	}

 ?>