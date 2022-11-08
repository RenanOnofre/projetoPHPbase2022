<?php
    include 'connect.php';
    $s="select*from funcionario where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
?>
<?php include 'Components/headFun.php'; ?>


  <!-- Preloader -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Usuários', 'Renan Onofre', 'Heloisa Gomes'],
          ['Ativos', 2, 2]
          
        ]);

        var options = {
          chart: {
            title: 'Usuários Cadastrados',
            subtitle: 'usuários por funcionários',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: linear-gradient(50deg, #f3c680, #a1e3e2);">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inicio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bytes Bank</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Relacionamento</h3>

                
              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <?php
    if($_SESSION['profile']=='1'){
        echo "
            <b><h5><a class='small-box-footer' href='relacao.php'>Relacionamento <i class='fas fa-arrow-circle-right'></i></a></h5></b>
        ";
    }else{
        echo "
            <h1>Você não ADM</h1>
        ";
    }
?>
              
            </div>
          </div></div>
          <!-- ./col -->
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Usuários</h3>

                
              
              <div class="icon">
                <i class="ion ion-ios-people"></i>
              </div>
              <?php
    if($_SESSION['profile']=='1'){
        echo "
            <b><h5><a class='small-box-footer' href='projects.php'>Usuários <i class='fas fa-arrow-circle-right'></i></a></h5></b>
        ";
    }else{
        echo "
            <h1>Você não ADM</h1>
        ";
    }
?>
            </div>
          </div></div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h1> Cotação </h1>
                <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 30%">
                          Nome
                      </th>
                      <th style="width: 30%">
                          valor
                      </th>
                      <th style="width: 30%" class="text-center">
                          Data
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
              <?php include 'cotacao.php' ?>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                          <?php echo $USDBRL->name; ?>
                          </a>
                      </td>
                      
                      <td class="project_progress">
                      <?php echo $USDBRL->ask; ?>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success"><?php echo $USDBRL->create_date; ?></span>
                      </td>
                      
                  </tr>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                          <?php echo $EURBRL->name; ?>
                          </a>
                      </td>
                      
                      <td class="project_progress">
                      <?php echo $EURBRL->ask; ?>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success"><?php echo $EURBRL->create_date; ?></span>
                      </td>
                      
                  </tr>
                  
              </tbody>
          </table>
                
              
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Fale conosco</h3>

                <div class="card-tools">
                  
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Suporte</span>
                      <span class="direct-chat-timestamp float-right"><?php date_default_timezone_set('America/Sao_Paulo');
  echo date('d/m/Y \à\s H:i:s');?></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="image/anon.png" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Olá
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right"><?php echo $f['name'];?></span>
                      <span class="direct-chat-timestamp float-left"><?php date_default_timezone_set('America/Sao_Paulo');
  echo date('d/m/Y \à\s H:i:s');?></span>
                    </div>
                    <!-- /.direct-chat-infos 
                    <img alt="message user image" class="direct-chat-img" src="<?php echo $f['image'];?>">-->
                    <img class="direct-chat-img" src="image/images.png" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Preciso de ajuda!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Suporte</span>
                      <span class="direct-chat-timestamp float-right"><?php date_default_timezone_set('America/Sao_Paulo');
  echo date('d/m/Y \à\s H:i:s');?></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="image/anon.png" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      O que está acontecendo?
                    </div>
                    <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Suporte</span>
                      <span class="direct-chat-timestamp float-right"><?php date_default_timezone_set('America/Sao_Paulo');
  echo date('d/m/Y \à\s H:i:s');?></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="image/anon.png" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text" id="ultima">
                      Mande e entraremos em contato assim que estiver disponível!
                    </div>
                    
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="homeFun.php">
                        <img class="contacts-list-img" src="image/anon.png" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Suporte
                            <small class="contacts-list-date float-right"><?php date_default_timezone_set('America/Sao_Paulo');
  echo date('d/m/Y \à\s H:i:s');?></small>
                          </span>
                          <span class="contacts-list-msg">Mande e entraremos em contato assim que estiver disponível!</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
  </div>
  <div>
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Tarefas
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="homeFun.php" class="page-link">1</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Atualização do perfil Alciomar Holanda</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> Pendente</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                      
                    </div>
                    <span class="text">Enviar extrato Mensal para Isabella Casciatori</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> Realizado</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Verificar notificações</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 dia</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <!--<li>
                    <--<span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text"></span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li> -->
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Enviar relatório semanal</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 Semana</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Analisar os perfis dos usuários</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 mês</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> adicionar item</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Usuários
                </h3>
                <!-- card tools -->
                <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Nome
                      </th>
                      <th style="width: 30%">
                          Imagem
                      </th>
                      <th>
                          Username
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
              <?php
                  $sq="select * from reg";
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
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?php echo $f['image'];?>">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          
                              <?php echo $f['username'];?>
                          
                        
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Ativo</span>
                      </td>
                      
                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
          </table>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Gráficos
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="widht: 100%">
              <div id="columnchart_material" style="width:100%; min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

  <!-- /.content-wrapper -->
  
<?php include 'Components/footer.php'; ?>