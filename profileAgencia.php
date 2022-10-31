<?php
    include 'connect.php';
    $s="select*from agencia where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu); 

    if(isset($_POST['sub'])){
      $cod=$_POST['codigo'];
      $c=$_POST['conta'];
      $a=$_POST['agencia'];
      $dv=$_POST['digito'];
      $n=$_POST['nome'];
      $e=$_POST['endereco'];
      $nu=$_POST['numero'];
      $comp=$_POST['complemento'];
      $b=$_POST['bairro'];
      $cid=$_POST['cidade'];
      $u=$_POST['uf'];
      $cep=$_POST['cep'];
      $f=$_POST['fone'];
      $i="update agencia set codigo='$cod',conta='$c',
      agencia='$a',digitoVerificador='$dv',nome='$n',Endereco='$e',
      numero='$nu',complemento='$comp',bairro='$b',cidade='$cid',
      uf='$u',cep='$cep',fone='$f' where id='$_SESSION[id]'";
      mysqli_query($con, $i);
      header('location:homeAgencia.php');
  }
?>
<?php include 'Components/headAgencia.php'; ?>

  <!-- Preloader -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homeAgencia.php">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
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
                <!--<div class="text-center">
                <img src="<?php echo $f['image'];?> class="img-circle elevation-2"
                       alt="User profile picture" width=100>
                </div>-->

                <h3 class="profile-username text-center"><?php echo $f['nome'];?></h3>

                <p class="text-muted text-center"><?php echo $f['cidade'];?></p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Agência</b> <a class="float-right"><?php echo $f['agencia'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Código</b> <a class="float-right"><?php echo $f['codigo'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Conta</b> <a class="float-right"><?php echo $f['conta'];?></a>
                  </li>
                </ul>

                
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
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><i class="fas fa-cog"></i>Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                
                  

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="POST">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Codigo</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Código" name="codigo" value="<?php echo $f['codigo']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Conta</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Conta" name="conta" value="<?php echo $f['conta']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputUser" class="col-sm-2 col-form-label">Agência</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputUser" placeholder="Agência" name="agencia" value="<?php echo $f['agencia']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputCity" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCity" placeholder="Nome" name="nome" value="<?php echo $f['nome']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputGender" class="col-sm-2 col-form-label">Endereço</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGender" placeholder="Endereço" name="endereco" value="<?php echo $f['Endereco']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputGender" class="col-sm-2 col-form-label">Número</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGender" placeholder="Número do local" name="endereco" value="<?php echo $f['numero']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPass" class="col-sm-2 col-form-label">Complemento</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPass" placeholder="Complemento" name="complemento" value="<?php echo $f['complemento']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPass" class="col-sm-2 col-form-label">Bairro</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPass" placeholder="Bairro" name="bairro" value="<?php echo $f['bairro']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPass" class="col-sm-2 col-form-label">Cidade</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPass" placeholder="Cidade" name="cidade" value="<?php echo $f['cidade']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPass" class="col-sm-2 col-form-label">UF</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPass" placeholder="UF" name="uf" value="<?php echo $f['uf']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPass" class="col-sm-2 col-form-label">CEP</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPass" placeholder="CEP" name="cep" value="<?php echo $f['cep']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPass" class="col-sm-2 col-form-label">Fone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPass" placeholder="Telefone" name="fone" value="<?php echo $f['fone']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-warning" name="sub"><i class="fas fa-pen"></i>Alterar</button>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger" href="delete.php"><i class="fas fa-trash-alt"></i>Deletar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              
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