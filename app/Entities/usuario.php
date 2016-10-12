<?php 
namespace App\Entities;
	
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
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

    	public function getUserName()
    	{
        	return $this->userName;
    	}

    	public function getPassword()
    	{
        	return $this->Password;
    	}

		public function getNivel()
    	{
        	return $this->nivel;
    	}

    	public function setUserName($userName)
    	{
        	$this->username = $userName;
    	}

    	public function setPassword($password)
    	{
        	$this->password = md5($password);
    	}

		public function setNivel($nivel)
    	{
        	$this->nivel = $nivel;
    	}	

	}

 ?>