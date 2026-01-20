<?php
session_start();
$message = "";   

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nom = trim($_POST["nom"]);

    if (!empty($nom)){
        $_SESSION['utilisateur'] = $nom;
        header('Location: index.php');
        exit;
    } else {
        $message = "Veuillez entrer votre nom.";
    }
}
?>

<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom">
    <button type="submit">Se connecter</button>
</form>

<?php
if (!empty($message)) {
    echo "<p style='color:red;'>$message</p>";
}
?>

<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background: #f0f2f5;
    font-family: Arial, sans-serif;
}

form {
    background-color: #1e90ff;   
    padding: 30px 25px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    width: 360px;
    text-align: center;
}

form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: white;
    text-align: left;
}

form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 2px solid #00bfff;
    box-sizing: border-box;
    font-size: 14px;
}

form input:focus {
    outline: none;
    border-color: #ffeb3b; 
    box-shadow: 0 0 5px #ffeb3b;
}

form button {
    width: 100%;
    padding: 12px;
    background-color: #ff9800; 
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    font-weight: bold;
    transition: background 0.3s;
}

form button:hover {
    background-color: #e68900;
}

p {
    margin-top: 10px;
    font-weight: bold;
}
</style>
