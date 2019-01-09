<?php
$poleEmploi = '#^[0,9]{7}[A-Z]{1}#';   // mettre preg_match($poleEmploi, $_POST['codeEmploi'])
$name = '#^[A-Z]{1}[a-zÀ-ÿ-]+$#';
 ?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>TP1</title>
  <h1>PHP - Partie 10 - TP1</h1>
</head>
<body>
  <b style="font-size:15px">Faire une page pour enregistrer un futur apprenant :</b>
  <?php
  if (empty($_POST['firstName']) || empty($_POST['name']) ||
      empty($_POST['dateBirthday']) || empty($_POST['country']) ||
      empty($_POST['nationality']) || empty($_POST['address']) ||
      empty($_POST['email']) || empty($_POST['phone']) ||
      empty($_POST['codeEmploi']) || empty($_POST['badge']) ||
      empty($_POST['codecademy']) || empty($_POST['heros']) ||
      empty($_POST['hacks']) || empty($_POST['experience']) ||
      $_POST['exam'] == 'null'){
  ?>
    <form action="index.php" method="post">
        <div class="row">
        <div class="col-lg-5">
        <label>Prénom : <input type="text" name="firstName" placeholder="Prénom"/></label>
        <label>Nom : <input type="text" name="name" placeholder="Nom"/></label>
        <label>Date de naissance : <input type="date" name="dateBirthday" placeholder="Date de naissance"/></label>
        <label>Pays de naissance : <input type="text" name="country" placeholder="Pays de naissance"/></label>
        <label>Nationalité : <input type="text" name="nationality" placeholder="Nationalité"/></label>
        <p><label>Adresse :</label></p>
        <textarea class = "address" type="text" name="address" placeholder="Adresse"></textarea>
      </div>
        <div class="col-lg-5">
          <label>Email : <input type="email" name="email" placeholder="Email"/></label>
          <label>Téléphone : <input type="tel" name="phone" placeholder="Téléphone"/></label>
          <p><label>Diplôme : </label>
            <select name="exam">
              <option value="null">Diplôme</option>
              <option value="none">Sans</option>
              <option value="bac">Bac</option>
              <option value="bac+2">Bac+2</option>
              <option value="bac+3/more">Bac+3 et plus</option>
            </select><p>
              <label>Numéro Pôle emploi : <input type="text" name="codeEmploi" placeholder="Numéro Pôle emploi"/></label>
              <label>Nombre de badge : <input type="text" name="badge" placeholder="Nombre de badge"/></label>
              <label>Liens codecadamy : <input type="text" name="codecademy" placeholder="Nom"/></label>
        </div>
    </div>
      <div class="row">
        <div class="col-lg-10">
          <p><label>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
          <p><textarea type="text" name="heros" placeholder=""></textarea></p>
          <p><label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
          <p><textarea type="text" name="hacks" placeholder=""/></textarea></p>
          <p><label>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
          <p><textarea type="text" name="experience" placeholder=""/></textarea></p>
        </div>
      </div>
        <button type="submit" name="valider">Valider</button>
      </form>
  <?php
        }
      else
      {
   ?>
          <div class="result">
            <p><strong>Nom et prénom : </strong><?= $_POST['firstName'] . ' ' . $_POST['name']; ?></p>
            <p><strong>Date de naissance : </strong><?= $_POST['dateBirthday']?></p>
            <p><strong>Pays de naissance : </strong><?= $_POST['country']; ?></p>
            <p><strong>Nationalité : </strong><?= $_POST['nationality']; ?></p>
            <p><strong>Adresse : </strong><?= $_POST['address']; ?></p>
            <p><strong>Adresse mail : </strong><?= $_POST['email']; ?></p>
            <p><strong>Téléphone : </strong><?= $_POST['phone']; ?></p>
            <p><strong>Diplôme :</strong><?= $_POST['exam']; ?></p>
            <p><strong>Numéro pôle emploi : </strong><?= $_POST['codeEmploi']; ?></p>
            <p><strong>Nombre de palmes obtenues au canard : </strong><?= $_POST['badge']; ?></p>
            <p><strong>Liens codecademy : </strong><?= $_POST['codecademy']; ?></p>
            <p><strong>Si vous étiez un super héros/une super héroïne, vous seriez : </strong><?= $_POST['heros']; ?></p>
            <p><strong>Un de vos "hacks" : </strong><?= $_POST['hacks']; ?></p>
            <p><strong>Votre expérience en informatique : </strong><?= $_POST['experience']; ?></p>
          </div> 
            <?php
      }
      ?>
     
</body>
</html>
