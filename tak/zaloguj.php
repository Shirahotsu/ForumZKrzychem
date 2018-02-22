<?php
       session_start();
    require_once 'daneSerwera.php';
    
    $polaczenie = @new mysqli($host, $user, $password, $db);
    if($polaczenie->connect_errno!=0){
        echo "Error: ".$polaczenie->connect_errno;
    }
    else{
        $login = $_POST['login'];
        $passwordZPosta = $_POST['password'];
        $sql = "SELECT * FROM Usersandpasswords WHERE User='$login' AND password='$passwordZPosta'";
        
        if($rezultat = @$polaczenie->query($sql))
        {
            $ileRekordow = $rezultat->num_rows;
            if($ileRekordow==0)
            {
                echo "Błędny login lub hasło";
            }
            else{
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['User'] = $wiersz['User'];
                $rezultat->close();
                header('Location: panelZalogowanego.php');
            }
        }
        
        
        $polaczenie->close();
        }
    
?>

