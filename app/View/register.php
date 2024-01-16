<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <?php include '../app/View/layout/head.php' ?>
<body class="bg-light">
<!-- navbar -->
<?php include '../app/View/layout/navbar.php' ?>






<div class="bg-light py-3 py-md-5 mt-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3 class="text-center">register</h3>
              </div>
            </div>
          </div>

          <form  action="?uri=/register/registeruser" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="name" class="form-label">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" id="name" placeholder="entrez username" required>
                <p class='message-error-username text-danger ps-1' style="display:none;" onkeyup="validateName()">username Obligatoire</p>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="ali@gmail.com"  onkeyup="validateEmail()" required>
                <p class='message-error-email text-danger ps-1' style="display:none;">format de email invalid</p>
              </div>

              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password"  placeholder="entrez le mot de pass" onkeyup="validatePassword()" required>
                <p class='message-error-password text-danger ps-1' style="display:none;">le mot de pass plus de trois char</p>
              </div>
              
              <div class="col-12">
                <div class="d-grid">
                <button class="btn btn-lg btn-danger bnt-tegister" type="submit" name="submit" onclick="validateAllForm()" >Register</button>
                </div>
              </div>
            </div>
          </form>


          <div class="row">
            <div class="col-12">
              <hr class="mt-5 mb-4 border-secondary-subtle">
              <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                <a href="?uri=/login" class="link-secondary ">login</a>
               
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>



<script>


function validateName(){
  let inputName= document.getElementById('name').value;
  if(inputName='' || inputName.length<3){
    document.querySelector('.message-error-username').style.display = 'block';
    return false;
  }else{
    document.querySelector('.message-error-username').style.display = 'none';
    return true;
  }
}

function validateEmail() {
  let inputEmail = document.getElementById('email').value;
  let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

  if (!emailRegex.test(inputEmail)) {
    document.querySelector('.message-error-email').style.display = 'block';
    return false;
  } else {
    document.querySelector('.message-error-email').style.display = 'none';
    return true; 
  }
}

function validatePassword(){
  let inputPassword= document.getElementById('password').value;
  if(inputPassword='' || inputPassword.length<3){
    document.querySelector('.message-error-password').style.display = 'block';
    return false;
  }else{
    document.querySelector('.message-error-password').style.display = 'none';
    return true;
  }
}
function validateAllForm() {
    let isNameValid = validateName();
    let isEmailValid = validateEmail();
    let isPasswordValid = validatePassword();

    if (isNameValid && isEmailValid && isPasswordValid) {
      return true;
    } else {
      alert('form is invalid');
    }
  }










  

  

  




</script>





































    <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- <script src="./asset/js/authValidation.js"></script> -->
</body>
</html>
