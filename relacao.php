<?php
    include 'connect.php';
    $s="select*from funcionario where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bytes Bank| Relacionamento</title>
  <link rel="icon" href="image/BytesLG.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'Components/headFun.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: linear-gradient(50deg, #f3c680, #a1e3e2);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Relações</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homeFun.php">Home</a></li>
              <li class="breadcrumb-item active">Relações</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="text-align:center; ">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Agência x Funcionário</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table table-hover table-dark">
                  <thead>
                    <tr>
                      <th style="width: 40px">Agência</th>
                      <th style="width: 40px">Funcionário</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sq="
                  select * from agencia as a
                  INNER join funcionario as f on a.id = f.fk_idAgencia";
                  $qu=mysqli_query($con,$sq);
                  while($f=  mysqli_fetch_assoc($qu)){
                    ?>
                  <tr>
                      
                      <td>
                          <a>
                          <?php echo $f['nome'];?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?php echo $f['name'];?>
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

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Funcionário x Usuário</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover table-dark">
                  <thead>
                    <tr>
                      <th style="width: 40px">Funcionário</th>
                      <th style="width: 40px">Usuário</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sq="
                  select f.name as fname, r.name as rname from funcionario as f INNER join reg as r on f.id = r.id_FkReg;";
                  $qu=mysqli_query($con,$sq);
                  while($f=  mysqli_fetch_assoc($qu)){
                    ?>
                  <tr>
                      
                      <td>
                          <a>
                          <?php echo $f['fname'];?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?php echo $f['rname'];?>
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

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
