<?php

class Admin{
    public $id_admin,
            $username,
            $password,
            $name;

    public function __construct($id_admin, $username, $password, $name){
        $this -> id_admin = $id_admin;
        $this -> username = $username;
        $this -> password = $password;
        $this -> name = $name;

    }

    public function login(){

    }
    public function logout(){

    }
    public function addWisata(){

    }
    public function removeWisata(){

    }

}

Class Wisata extends Admin{
    public $id_wisata,
            $jaraktempatwisata,
            $lokasi,
            $informasiwisata,
            $jam_buka,
            $jam_tutup;

    public function __construct($id_wisata, $jaraktempatwisata, $lokasi, $informasiwisata, $jam_buka, $jam_tutup){
        $this -> id_wisata = $id_wisata;
        $this -> jaraktempatwisata = $jaraktempatwisata;
        $this -> lokasi = $lokasi;
        $this -> informasiwisata = $informasiwisata;
        $this -> jam_buka = $jam_buka;
        $this -> jam_tutup = $jam_tutup;
        
    }

    public function showWisata(){
        $str = "id wisata : {$this -> id_wisata} | jarak wisata : {$this -> jaraktempatwisata} | lokasi : {$this -> lokasi} | 
        informasi wisata : {$this -> informasiwisata} | jam buka : {$this -> jam_buka} | jam tutup : {$this -> jam_tutup}";
        return $str;
    }


}

class User extends Wisata{
    public $user_id,
            $nama_depan,
            $nama_belakang,
            $username,
            $password,
            $email,
            $bio;
    
    public function __construct($user_id, $nama_depan, $nama_belakang, $username, $password, $email, $bio){
        $this -> user_id = $user_id;
        $this -> nama_depan = $nama_depan;
        $this -> nama_belakang = $nama_belakang;
        $this -> username = $username;
        $this -> password = $password;
        $this -> email = $email;
        $this -> bio = $bio;
                
     }
    
     public function login(){

     }
     public function register(){

     }
     public function showmaps(){

     }
     public function memberiRating(){

     }
    
     public function memberiReview(){
        
     }

}

$Admin1 = new Admin(232,"SOBAT","namau24","rangga");
$Wisata1 = new Wisata(2324,"10 km","bandung", "wisata kolam renang cipanas", "8:00 AM", "21:00 PM");
$User1 = new User(24,"farhan","santa", "santa22", "akucintaama22", "farhansanta@gmail.com", "Mencari rejeki");
var_dump($User1);
echo $Wisata1->showWisata(Wisata1);



?>