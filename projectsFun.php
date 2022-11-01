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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'Components/headFun.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'Components/mainSideBar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: linear-gradient(50deg, #f3c680, #a1e3e2);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Funcionários Cadastrados</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homeAgencia.php">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Informações</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects table-hover">
              <thead>
                  <tr class="bg-primary">
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Nome
                      </th>
                      <th style="width: 30%">
                          Setor
                      </th>
                      <th>
                          Username
                      </th>
                      <th style="width: 8%" class="text-center">
                          Gênero
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php
                  $sq="select * from funcionario";
                  $qu=mysqli_query($con,$sq);
                  while($f=  mysqli_fetch_assoc($qu)){
                    ?>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                          <?php echo $f['name'];?>
                          </a>
                      </td>
                      <td>
                      <a>
                          <?php echo $f['retypePassword'];?>
                          </a>
                      </td>
                      <td class="project_progress">
                          
                              <?php echo $f['username'];?>
                          
                        
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success"><?php echo $f['gender'];?></span>
                      </td>
                      <td class="project-actions text-right">
                          
                          <a class="btn btn-info btn-sm" href="profileFun.php">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          <a class="btn btn-danger btn-sm" href="delete.php">
                              <i class="fas fa-trash">
                              </i>
                              Deletar
                          </a>
                      </td>
                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
          </table>
        </div>
        
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
