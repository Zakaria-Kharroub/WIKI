

<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <?php include '../app/View/layout/head.php' ?>
<body class="bg-light">
<!-- navbar -->
<?php include '../app/View/layout/navbar.php' ?>



<center>
<div class="mt-5"> 
    --
    <h1 class='mt-5'>hello autor <b class='text-danger'><?php echo $_SESSION['username']; ?></b></h1>
    <!-- button ajouter modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">ajouter wiki</button>



    <table border="1" class=" container table table-striped table-hover table-bordered mt-3">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>content</th>
                <th>category</th>
                <th>author</th>
                <th>date</th>
                <td>etat </td>
                <td>tag</td>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wikis as $wiki):?>
                <tr>
                    <td><?php echo $wiki->wiki_id; ?></td>
                    <td><?php echo $wiki->title; ?></td>
                    <td><?php echo $wiki->description;?></td>
                    <td><?php echo $wiki->category_name; ?></td>
                    <td><?php echo $wiki->author_name; ?></td>
                    <td><?php echo $wiki->date_create; ?></td>
                    <td><?php echo $wiki->etat; ?></td>
                    <td><?php echo $wiki->tag_names; ?></td>
                    <td>
                        <a href="?uri=/wiki/edit/<?php echo $wiki->wiki_id; ?>" class="btn btn-primary">edit</a>

                        <a href='./Author/deleteWiki/<?php echo $wiki->wiki_id; ?>' class='btn btn-danger'>delete</a>

                    </td>

                    
                </tr>
                <?php endforeach; ?>
 
        </tbody>
    </table>
</div>
</center>









<!-- Modal ajouter  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter wiki</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./Author/ajouterWikis" method="POST">
      <div class="modal-body">
        <!-- <label for="name" class='p-2'>titre</label> -->
        <input type="text" name="title"  class="form-control mb-2" placeholder="entrez le title de wiki" >

        <textarea name="description" class="form-control mb-2" placeholder="entrez description"></textarea>

        <input type="date" name="date_create"  class="form-control mb-2" value="<?php echo date('Y-m-d'); ?>" readonly>

        <select name="category_id" class="form-select mb-2" aria-label="Default select example">
            <option selected>choisir category</option>
            <?php foreach ($categories as $categorie):?>
                <option value="<?php echo $categorie->category_id ; ?>"><?php echo $categorie->category_name; ?></option>
            <?php endforeach; ?>
        </select>

        <input type="hidden" name="author_id"  class="form-control mb-2" value="<?php echo $_SESSION['id']; ?>" >
        <input type="hidden" name="etat" class="form-controle mb-2" value="non">


        <h4>choisir tags</h4>
            <div style="height:120px;overflow:scroll;">

                <?php foreach ($tags as $tag): ?>

                    <div class="form-check mb-2" >
                        <input class="form-check-input" type="checkbox" name="tag_id[]" value="<?php echo $tag->tag_id ; ?>">
                        <label class="form-check-label" for="tag_id[]"> <?php echo $tag->tag_name; ?> </label>
                    </div>
                <?php endforeach; ?>
            </div>

      </div>
      <div class="modal-footer">
        <button type="submit" name='submit' class="btn btn-primary ">ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div>































  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
