<?php 
include_once('koneksi.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST ['nama_panggilan'];
    $nama = $_POST['email'];
    $lahir = $_POST [' tanggal_lahir'];
    $gender = $_POST ['umur'];
    $agama = $_POST ['no_hp'];
    $pekerjaan = $_POST ['jenis_kelamin'];
    if($database->register($username,$password,$nama_panggilan,$email,$tanggal_lahir,$umur,$no_hp,$jenis_kelamin))
    {
      header('location:login.php');
    }
}

$usernameErr = $passwordErr = $nama_panggilanErr = $emailErr = $tanggal_lahirErr = $umurErr = $no_hpErr = $jenis_kelaminErr = "";
$username = $email = $password = $nama = $lahir = $gender = $agama = $pekerjaan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username tidak boleh kosong";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email tidak boleh kosong";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $passwordErr = "Password tidak boleh kosong";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["nama"])) {
    $namaErr = "Nama tidak boleh kosong";
  } else {
    $nama = test_input($_POST["nama"]);
  }

  if (empty($_POST["lahir"])) {
    $lahirErr = "Lahir tidak boleh kosong";
  } else {
    $lahir = test_input($_POST["lahir"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender tidak boleh kosong";
  } else {
    $gender = test_input($_POST["lahir"]);
  }

  if (empty($_POST["agama"])) {
    $agamaErr = "Agama tidak boleh kosong";
  } else {
    $agama = test_input($_POST["agama"]);
  }

  if (empty($_POST["pekerjaan"])) {
    $pekerjaanErr = "Pekerjaan tidak boleh kosong";
  } else {
    $pekerjaan = test_input($_POST["pekerjaan"]);
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    
 
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Register Form</title>
  </head>
<style>

.error {color: #FF0000;}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>

<body>

  <div>
    <h1 class="mt-5">Registrasi</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <p><span class="error">* wajib diisi</span></p>
    <hr/>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form">
      <label for="username">Username</label>
      <div>
        <span class="error">* <?php echo $usernameErr;?></span>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
    </div>

    <div class="form">
      <label for="password">password</label>
      <div>
        <span class="error">* <?php echo $passwordErr;?></span>  
        <input type="text" class="form-control" id="password" name="password" placeholder="password">
      </div>
    </div>

    <div class="form">
    <label for="nama_panggilan">nama_panggilan</label>
    <span class="error">* <?php echo $nama_panggilanErr;?></span>
    <div>
      <input type="password" class="form-control" id="nama_panggilan" name="nama_panggilan" placeholder="nama_panggilan">
    </div>
  </div> 
 
    <div class="form">
      <label for="email">email</label><span class="error">* <?php echo $emailErr;?></span>
      <div>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
      </div>
    </div>
 
    <div class="form">
      <label for="tanggal_lahir">tanggal_lahir</label>
      <span class="error">* <?php echo $tanggal_lahirErr;?></span>
      <div>
        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal_lahir">
      </div>
    </div>  

    <div class="form">
      <label for="umur">umur</label>
      <span class="error">* <?php echo $umurErr;?></span>
      <div>
        <input type="text" class="form-control" id="umur" name="umur" placeholder="umur">
      </div>
    </div>

    <div class="form">
      <label for="no_hp">no_hp</label>
      <span class="error">* <?php echo $no_hpErr;?></span>
      <div>
        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp">
      </div>
    </div>

    <div class="form">
      <label for="jenis_kelamin">jenis_kelamin</label>
      <span class="error">* <?php echo $jenis_kelaminErr;?></span>
      <div>
        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin">
      </div>
    </div>
  
  <div class="form">
  <a href="login.php">Login</a>
  <button type="submit" name="register">Register</button>
  </div>

  
</form>
  </div>
</main>
 
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Warung Belajar@2019</span>
  </div>
</footer>
</body>
</html>