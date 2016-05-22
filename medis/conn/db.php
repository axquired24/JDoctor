<?php
define('hostname','localhost');
define('username','root');
define('password','root');
define('dbname','jdoctor');

class db
{
/*
	var $conn;
	var $query;
	var $dbNames;
	var $result;
	var $row;
	var $num;
*/	
	function __construct()
	{
		$this->conn=mysql_connect(hostname,username,password) or die("gagal koneksi");
		$this->dbNames=mysql_select_db(dbname) or die("gagal db");
	}
	
	function BuatQuery($query)
	{
		$this->result=mysql_query($query,$this->conn);
		return $this->result;
	}
	
	function BuatArray()
	{
		$this->row=mysql_fetch_array($this->result);
		return $this->row;	
	}
	
	function MencariJumlah()
	{
		$this->num=mysql_num_rows($this->result);
		return $this->num;
	}
}

class session
{
/*
	var $email;
	var $password;
	var $nama;
	var $gambar;
*/	
	function __construct($arrayColom,$arrayPost)
	{
		$this->a = $arrayPost;
		$this->c = $arrayColom;
	}
	
	function startSession()
	{	
		for($d=0; $d<count($this->c); $d++)
		{
			session_register('$this->c[$d]');
			$_SESSION[$this->c[$d]]=$this->a[$d];
		}
/*		
		$_SESSION[email]=$this->email;
		$_SESSION[password]=$this->password;
		$_SESSION[nama]=$this->nama;
		$_SESSION[gambar]=$this->gambar;
*/		
	}
}
?>