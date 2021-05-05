<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
    var $nama_panggilan = "";
    var $email = "";
    var $tanggal_lahir = "";
    var $umur = "";
    var $no_hp = "";
    var $jenis_kelamin = "";
	var $database = "user";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($username,$password,$nama_panggilan,$email,$tanggal_lahir,$umur,$no_hp,$jenis_kelamin)
	{	
		$insert = mysqli_query($this->koneksi,"insert into pendaftaran values ('','$username','$password','$nama_panggilan','$email','$tanggal_lahir','$umur','$no hp','$jenis_kelamin')");
		return $insert;
	}
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from pendaftaran where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from pendaftaran where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>