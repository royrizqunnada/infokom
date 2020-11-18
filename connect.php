<?php
class database{
	var $host = "127.0.0.1:3307";
	var $username = "root";
	var $password = "";
	var $database = "order";
	var $koneksi;

    function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
    }
    
    function input($name,$phone,$email,$tanggal,$durasi,$service,$description)
	{	
        $input = mysqli_query($this->koneksi,"INSERT INTO order2 VALUES ('','$name','$phone','$email','$tanggal','$durasi','$service','$description')");
        return $input;
	}

	function delete($id)
    {
		$delete = mysqli_query($this->koneksi,"delete from order2 where id_order=$id");
		return $delete;
	}
	function edit($name,$phone,$email,$tanggal,$durasi,$service,$description)
	{	
		$edit = mysqli_query($this->koneksi,"UPDATE INTO order2 VALUES ('','$name','$phone','$email','$tanggal','$durasi','$service','$description')");
        return $edit;
	}
}
?>