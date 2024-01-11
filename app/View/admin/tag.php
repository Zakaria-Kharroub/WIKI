<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<?php include '../app/View/layout/headDash.php' ?>

<body>
<?php include '../app/View/layout/asideAdmin.php' ?>




<section class="dashboard">
        <?php include_once '../app/View/layout/navbarDash.php'; ?>
         <div class="dash-content">

         <!----------- tags------------------>
         <div class="title">
                    <i class="uil uil-tag"></i>
                    <span class="text">tags</span>
                </div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">ajouter Tag</button>
                <table class="activity-table">
                    <thead>
                        <tr>
                            <th>id tag</th>
                            <th>name tag</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tags as $tag): ?>
                        <tr>
                            <td><?php echo $tag->tag_id; ?></td>
                            <td><?php echo $tag->tag_name; ?></td>    
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                                
            </div>
    </section>














<!-- Modal ajouter  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter Tag</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./admin/ajouterTags" method="POST">
      <div class="modal-body">
        <!-- <label for="name" class='p-2'>name categorie</label> -->
        <input type="text" name="tag_name"  class="form-control" placeholder="entrez une nouvelle tag" >
        
      </div>
      <div class="modal-footer">
        <button type="submit" name='submit' class="btn btn-primary">ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div>











     <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="./asset/js/admin.js"></script>
</body>
</html>