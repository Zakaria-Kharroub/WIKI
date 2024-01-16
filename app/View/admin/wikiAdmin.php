<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<?php include '../app/View/layout/headDash.php' ?>

<body>
<?php include '../app/View/layout/asideAdmin.php' ?>




<section class="dashboard">
        <?php include_once '../app/View/layout/navbarDash.php'; ?>
         <div class="dash-content">

         <!----------- wikis------------------>
         <div class="title">
                    <i class="uil uil-newspaper"></i>
                    <span class="text">wikis</span>
                </div>
                <table class="activity-table">
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>description</th>
                            <th>author</th>
                            <th>categorie</th>
                            <th>date de creation </th>
                            <th>archiver</th>
                        </tr>
                    </thead>

                    <tbody>
                     <?php foreach ($wikis as $wiki):?>
                        <tr>
                            <td><?php echo $wiki->title; ?></td>
                            <td>Lorem</td>
                            <td><?php echo $wiki->author_name; ?></td>
                            <td><?php echo $wiki->category_name; ?></td>
                            <td><?php echo $wiki->date_create; ?></td>
                            <td>

                            <form class="d-flex" action="./admin/updateEtat/<?php echo $wiki->wiki_id; ?>" method="POST">
                            <select name="category_id" class="form-select mb-2 select-etat-wiki" aria-label="Default select example">
                                <option <?php echo ($wiki->etat == 'oui') ? 'selected' : ''; ?>>oui</option>
                                <option <?php echo ($wiki->etat == 'non') ? 'selected' : ''; ?>>non</option>
                            </select>
                            <button type="submit" name='submit' class="btn btn-primary ms-2">save</button>
                            </form>


                            </td>


                        </tr>
                        <?php endforeach; ?>
                       
                    </tbody>
                </table>
            </div>
    </section>


<script>
    let selectWikis = document.querySelectorAll('.select-etat-wiki');

    selectWikis.forEach(function(selectWiki) {
         if (selectWiki.value === 'oui') {
            selectWiki.classList.add('bg-success');
            
         }else{

             selectWiki.classList.add('bg-danger');
        }
    });
</script>
    

     <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="./asset/js/admin.js"></script>
</body>
</html>