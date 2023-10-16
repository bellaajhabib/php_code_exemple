<?php
const ERROR_REQUIRED = "Veuillez renseigner ce champ";
const ERROR_LENGTH = "Le champ doit faire entre 2 et 10 caractères";
const ERROR_EMAIL = "L'email n'est pa valide";
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_POST = filter_input_array(INPUT_POST, [
    'firstname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'email' => FILTER_SANITIZE_EMAIL,
  ]);

  $firstname = $_POST['firstname'] ?? '';
  $email = $_POST['email'] ?? '';

  if (!$firstname) {
    $errors['firstname'] = ERROR_REQUIRED;
  } elseif (mb_strlen($firstname) < 2 || mb_strlen($firstname) > 10) {
    $errors['firstname'] = ERROR_LENGTH;
  }
  if (!$email) {
    $errors['email'] = ERROR_REQUIRED;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = ERROR_EMAIL;
  }
}
?>
<?php var_export(isset($errors['firstname']));?>
<form action="" method="POST">
  <div>
    <label for="firstname">Prénom</label><br>
    <input type="text" name="firstname" id="firstname" value=<?= isset($firstname)?"$firstname":"" ?>>
    <?= isset($errors['firstname']) ? '<p style="color:red">' . $errors['firstname'] . '</p>' : "" ?>
  </div>
  <div>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" value=<?=isset($email)? "$email":"" ?>>
    <?= isset($errors['email']) ? '<p style="color:red">' . $errors['email'] . '</p>' : "" ?>
  </div>
  <button type="submit">Submit</button>
</form>