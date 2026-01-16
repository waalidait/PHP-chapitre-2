<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         form{
    border: 3px solid #1e3c72;
    border-radius: 12px;
    width: 90%;
    max-width: 350px;
    margin: auto;
    margin-top: 70px;
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    color: white;
    padding: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

input, textarea {
    margin-left: 20px;
    border: 2px solid aqua;
    border-radius: 8px;
    padding: 10px;
    width: 85%;
}

label{
    margin-left: 20px;
    display: block;
    margin-top: 10px;
}

button {
    margin: 20px;
    padding: 10px 15px;
    background: aqua;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
}

button:hover {
    background: white;
    color: #1e3c72;
}

.result-success {
    background-color: #d4edda;
    color: #155724;
    border: 2px solid #c3e6cb;
    padding: 12px;
    border-radius: 8px;
    margin: 15px auto;
    width: 90%;
    max-width: 350px;
    text-align: center;
    font-weight: bold;
}

.result-error {
    background-color: #f8d7da;
    color: #721c24;
    border: 2px solid #f5c6cb;
    padding: 10px;
    border-radius: 8px;
    margin: 10px auto;
    width: 90%;
    max-width: 350px;
}



    </style>
</head>
<body>
    <form action="" method="post">
         <label for="nom">votre Nom</label><br>
         <input type="text" name="nom" id="nom" placeholder="ecri votre nom"><br><br>
         <label for="email">votre email</label><br>
         <input type="email" name="email" id="email" placeholder="ecri votre email"><br><br>
         <label for="message">message</label><br>
         <textarea name="message" id="message"></textarea><br>

         <button type="submit">envoye</button> 
    </form>
</body>
</html>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $nom = trim($_POST["nom"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);
    
        $erreurs = [];
    
        if (empty($nom)){
            $erreurs[] = "Il faut écrire le nom.";
        }
    
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erreurs[] = "Email invalide.";
        }
    
        if (empty($message)){
            $erreurs[] = "Le message est vide.";
        }
    
        if (!empty($erreurs)){
            foreach ($erreurs as $err){
                echo "<div class='result-error'>$err</div>";
            }
        } else {
            echo "<div class='result-success'>Merci $nom, votre message a été envoyé.</div>";
        }
    }
    
    