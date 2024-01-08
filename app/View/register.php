<!DOCTYPE html>
<html lang="en">
    <?php include_once '../app/View/layout/head.php'; ?>
<body>

<form action="?uri=/register/registeruser" method="POST">
<!-- <form action="?uri=/register" method="POST"> -->

    <h2>register</h2>
    <div class="form-group fullname">
      <label for="fullname">nom</label>
      <input type="text" id="fullname" placeholder="entrer le nom " name="name">
      <small class="error-text"></small>
    </div>

    <div class="form-group email">
      <label for="email">Email </label>
      <input type="text" id="email" placeholder="Entere email " name="email">
      <small class="error-text"></small>
    </div>
    <div class="form-group password">
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="entrer password" name="password">
      <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      <small class="error-text"></small>
    </div>

    <input type="hidden" name="id_role" value="1">

    <div class="form-group submit-btn">
      <button type="submit" name="submit">register</button>
    </div>
    <p>avez vous un compte
    <a href="?uri=/login">login</a>
    
  </p>
  </form>
  
  <!-- <script src="./asset/js/authValidation.js"></script> -->
</body>
</html>