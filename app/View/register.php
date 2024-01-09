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
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="ali@gmail.com" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password"  placeholder="entrez le mot de pass" required>
              </div>
              <!-- <input type="hidden" name="id_role" value="2"> -->
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-danger" type="submit" name="submit">register</button>
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





































    <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- <script src="./asset/js/authValidation.js"></script> -->
</body>
</html>
