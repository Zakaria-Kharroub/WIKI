<!DOCTYPE html>
<html>
<head>
    <title>Organisateur Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <style>
        body {
            background-color: #343a40;
            color: #ffffff;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item">
                    <a class="nav-link" href="#">profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <center>
            <h1>Organisateur Dashboard</h1>
            <button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#exampleModal">Ajouter Organisateur</button>
     </center>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Description</th>
                    <th>Disponibilite</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?php echo $event->id; ?></td>
                        <td><?php echo $event->name; ?></td>
                        <td><?php echo $event->date_evenement; ?></td>
                        <td><?php echo $event->lieu; ?></td>
                        <td><?php echo $event->description; ?></td>
                        <td><?php echo $event->disponibilite; ?></td>
                        <td>
                            <a href="organisateurDash/editEvent/<?php echo $event->id; ?>" class="btn btn-primary">Modifier</a>
                            <a href="deleteEvent/<?php echo $event->id; ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
   
    <form id="eventForm" action="ajoutetEvent" method="POST">
                    <div class="mb-3">
                        <label for="eventName" class="form-label"   >nom de evenement</label>
                        <input type="text" class="form-control" id="eventName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">date de evenement</label>
                        <input type="date" class="form-control" id="eventDate" name="date_evenement" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventLocation" class="form-label">lieu de evenement</label>
                        <input type="text" class="form-control" id="eventLocation" name="lieu" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label">description de evenement</label>
                        <textarea class="form-control" id="eventDescription" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eventAvailability" class="form-label">ticket disponible</label>
                        <input type="number" class="form-control" id="eventAvailability" name="disponibilite" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
                    <button type="reset" class="btn btn-danger">reset</button>
                </form>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
