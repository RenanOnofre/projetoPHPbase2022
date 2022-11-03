<?php
    include 'connect.php';

    $id = $_GET['idReg'];

    $s="select*from reg where id='$id'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu); 

    if(isset($_POST['sub'])){
      $t=$_POST['text'];
      $u=$_POST['user'];
      $c=$_POST['city'];
      $g=$_POST['gen'];
      /*if($_FILES['f1']['name']){
      move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
      $img="image/".$_FILES['f1']['name'];
      }
      else{
          $img=$_POST['img1'];
      } ,image='$img'*/
      $i="update reg set name='$t',username='$u',city='$c',gender='$g' where id='$id'";
      mysqli_query($con, $i);
      header('location:homeFun.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Editar</title>
  <link rel="icon" href="image/BytesLG.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" >
  <!-- Navbar -->
  <?php include 'components/headFun.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="image/BB.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <?php include 'Components/mainSideBar.php'; ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: linear-gradient(50deg, #f3c680, #a1e3e2);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Alteração de cadastro</h1>
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
    <form class="form-horizontal" method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Usuário</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nome</label>
                <input type="text" id="inputName" class="form-control" name="text" value="<?php echo $f['name']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Username</label>
                <input type="text" id="inputName" class="form-control" name="user" value="<?php echo $f['username']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Gênero</label>
                <input type="text" id="inputName" class="form-control" name="gen" value="<?php echo $f['gender']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Cidade</label>
                <input type="text" id="inputName" class="form-control" name="city" value="<?php echo $f['city']?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!--<div class="col-md-6">
          <div class="card card-secondary">
            
             /.card-body -->
          </div>
          <!-- /.card -->
          
          <!-- /.card 
        </div>
      </div> -->
      <div class="row">
        <div class="col-12">
          <a href="projects.php" class="btn btn-secondary">Cancel</a>         
          <button type="submit" class="btn btn-warning" name="sub"><i class="fas fa-pen"></i>Alterar</button>                   
          
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'components/footer.php'?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.2.0/dist/js/demo.js"></script>
</body>
</html>
