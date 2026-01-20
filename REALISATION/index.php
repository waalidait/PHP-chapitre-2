 <?php
   session_start();
   if (!isset($_SESSION['utilisateur'])) {
       header('Location: login.php');
       exit;
   }
   echo "<h1>Bienvenue " . $_SESSION['utilisateur'] . " !</h1>";
   echo "<a href='logout.php'>Se déconnecter</a>"; 
 ?>
 <style>
body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    font-family: Arial, sans-serif;
    color: white;
    text-align: center;
    margin: 0;
}

h1 {
    font-size: 32px;
    margin-bottom: 20px;
    text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}

a {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 25px;
    background-color: #ff9800;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: background 0.3s, transform 0.2s;
}

a:hover {
    background-color: #e68900;
    transform: scale(1.05);
}
</style>
