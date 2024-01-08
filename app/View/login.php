<!DOCTYPE html>
<html lang="en">
    <?php include_once '../app/View/layout/head.php'; ?>
<body>
  <form action="?uri=/login/login" method="post">
    <h2>login</h2>

    <div class="form-group email">
      <label for="email">Email </label>
      <input type="text" id="email" name="email" placeholder="Entere email ">
      <small class="error-text"></small>
    </div>
          
    <div class="form-group password">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="entrer password">
      <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      <small class="error-text"></small>
    </div>
    <div class="form-group submit-btn">
      <button type="submit" name="submit" >login</button>
    </div>
    <p>sign up 
      <a href="?uri=/register">register</a>
    </p>
  </form>

  <!-- <script src="../asset/js/authValidation.js"></script> -->
</body>
</html>