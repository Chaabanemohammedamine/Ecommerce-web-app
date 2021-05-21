<?php include('includes/header.php');?>

<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-header bg-info text-white text-center"><i class="fa fa-user-plus"></i>
                            Inscription</h5>
                            <?php
                              if (isset($_POST['send'])){
                                  $nom = escape_string($_POST['nom'].' '.$_POST['prénom']);
                                  $email = escape_string($_POST['email']);
                                  $password = escape_string(sha1($_POST['passe']));
                                  $sql = "INSERT INTO users VALUES ('','$nom','$email','$password' )";
                                  if (query($sql)){
                                      echo' <div class="alert alert-success mt-4">Compte crée.</div>';
                                  }else{
                                    echo' <div class="alert alert-danger mt-4">Erreur veuillez réessayer.</div>';
                                  }

                              }
                             ?>
                        <form action="register.php" method="post" class="mt-2">
                            <div class="form-group">
                                <label for="nom">Nom*</label>
                                <input type="text" name="nom" placeholder="Entrer votre nom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="prénom">Prénom*</label>
                                <input type="text" name="prénom" placeholder="Entrer votre prénom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" placeholder="Entrer votre Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passe">Password*</label>
                                <input type="password" name="passe" placeholder="Entrer votre mot de passe"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="send" class="btn btn-primary">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer style="background-color: #e3f2fd;" class="mt-2">
            <p class="lead text-center  mt-2">AmineShop&copy;2021</p>
        </footer>

    </div>

    <?php include('includes/footer.php');?>