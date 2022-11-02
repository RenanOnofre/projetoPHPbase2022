<?php
    include 'connect.php';
    $s="select*from funcionario where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu); 

    if(isset($_POST['sub'])){
      $t=$_POST['text'];
      $u=$_POST['user'];
      $p=$_POST['pass'];
      $r=$_POST['setor'];
      $c=$_POST['city'];
      $g=$_POST['gen'];
      /*if($_FILES['f1']['name']){
      move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
      $img="image/".$_FILES['f1']['name'];
      }
      else{
          $img=$_POST['img1'];
      } ,image='$img'*/
      $i="update funcionario set name='$t',username='$u',password='$p',retypePassword='$r', city='$c',gender='$g' where id='$_SESSION[id]'";
      mysqli_query($con, $i);
      header('location:homeFun.php');
  }
?>
<?php include 'Components/headFun.php'; ?>

  <!-- Preloader -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: linear-gradient(50deg, #f3c680, #a1e3e2);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homeFun.php">Home</a></li>
              <li class="breadcrumb-item active">Perfil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img src="image/anon.png" class="img-circle elevation-2"
                       alt="User profile picture" width=100>
                </div>

                <h3 class="profile-username text-center"><?php echo $f['username'];?></h3>

                <p class="text-muted text-center"><?php echo $f['retypePassword'];?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Nome</b> <a class="float-right"><?php echo $f['name'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Genero</b> <a class="float-right"><?php echo $f['gender'];?></a>
                  </li>
                  
                  <li class="list-group-item">
                    <b>Cidade</b> <a class="float-right"><?php echo $f['city'];?></a>
                  </li>
                </ul>

                <a href="homeFun.php" class="btn btn-primary btn-block"><b>Inicio</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                  <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab">Dados</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                                 
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="POST">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Name" name="text" value="<?php echo $f['name']?>">
                        </div>
                      </div>
                      <!--<div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?php echo $f['email']?>">
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label for="inputUser" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputUser" placeholder="Username" name="user" value="<?php echo $f['username']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputUser" class="col-sm-2 col-form-label">Setor</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputUser" placeholder="Username" name="setor" value="<?php echo $f['retypePassword']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputCity" class="col-sm-2 col-form-label">Cidade</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCity" placeholder="City" name="city" value="<?php echo $f['city']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputGender" class="col-sm-2 col-form-label">Gênero</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGender" placeholder="gender" name="gen" value="<?php echo $f['gender']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPass" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPass" placeholder="Password" name="pass" value="<?php echo $f['password']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Eu concordo com os <a href="#"> termos e condições</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-warning" name="sub"><i class="fas fa-pen"></i>Alterar</button>
                        
                          <button type="submit" class="btn btn-danger" href="delete.php"><i class="fas fa-trash-alt"></i>Deletar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  
<?php include 'Components/footer.php'; ?>