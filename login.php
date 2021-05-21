<?php include('includes/header.php');?>

<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-header bg-info text-white text-center"><i class="fa fa-sign-in"></i> Connection
                        </h5>
                        <?php
                              if (isset($_POST['send'])){
                                  $email = escape_string($_POST['email']);
                                  $passe = escape_string(sha1($_POST['passe']));
                                  $sql = " SELECT * FROM users WHERE email='$email' AND password ='$passe' LIMIT 1 ";
                                  $result = query($sql);
                                  $user = fetch_array($result);
                                  if ($user !== null){
                                     $_SESSION['logged'] = true;
                                     $_SESSION['nom'] = $user['username'] ;
                                     $_SESSION['user_id'] = $user['id'] ;
                                     redirect ("index.php");
                                  }else{
                                    echo' <div class="alert alert-danger mt-4">Email ou mot de passe est incorrect.</div>';
                                  }

                              }
                             ?>
                        <form action="login.php" method="post" class="mt-2">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" required name="email" placeholder="Entrer votre Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passe">Password*</label>
                                <input type="password" required name="passe" placeholder="Entrer votre mot de passe"
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