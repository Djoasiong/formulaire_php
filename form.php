<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website oops</title>
</head>
<body>
    <form  action = "thanks.php"  method="post"> 

        <div>
            <label  for="lastName">Nom :</label>
            <input  type="text"  id="lastname"  name="userLastName" required>
            
        </div>
        <div>
            <label  for="firstName">Prénom :</label>
            <input  type="text"  id="firstname"  name="userFirstName" required>
            
        </div>
        <div>
            <label  for="courriel">E-mail :</label>
            <input  type="email"  id="courriel"  name="userEmail" required>
            
        </div>
        <div>
            <label  for="phoneNumber">Numéro de téléphone :</label>
            <input  type="text"  id="phoneNumber"  name="userPhoneNumber" required> 
            
        </div>
        <div>
            <label for="subject">Objet de ma demande :</label>
            <select name="subject" id="subject" required> 
            <option value="">Veuillez choisir une option</option>
            <option >Mon espace client</option>
            <option >Service client</option>
            <option >Autres</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="message" required></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    
    </form>
</body>
</html>