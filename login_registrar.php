<?php

include("conexion.php");

$nombre = $_POST['usuario'];
$pass =$_POST['pass'];

//login
if(isset($_POST["btningresar"])){
    $query=mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' AND password='$pass'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        @session_start();
        $_SESSION['usuario']=$nombre;
        $_SESSION['validada']="SI";
        echo "<script> alert('Bienvenido $nombre'); window.location='index.php'</script>";
    }else{
        echo "<script> alert('Usuario no existe'); window.location='login.html'</script>";
    }
}

//nuevaCuenta
if(isset($_POST["btnregistrar"])){
    $sqlgrabar= "INSERT INTO login(usuario,password) values  ('$nombre','$pass')";
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.html'</script>";
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }    
}
?>