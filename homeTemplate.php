<?php
    include 'connect.php';
    
    $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
?>
<?php include 'Components/head.php'; ?>


  <!-- Preloader -->

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>


    google.charts.load('current', {'packages':['corechart']});

    function desenharPizza (){

        var tabela = new google.visualization.DataTable();
        tabela.addColumn('string','categorias');
        tabela.addColumn('number','valores');
        tabela.addRows([

            ['Inovação',10],
            ['Determinação',10],
            ['Franqueza',10],
            ['Disponibilidade',10],
            ['Segurança',50],
            ['Simplicidade',10]
        ]);

        var grafico = new google.visualization.PieChart(document.getElementById('graficoPizza'));
        grafico.draw(tabela);
}

google.charts.setOnLoadCallback(desenharPizza);


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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Câmbio</h3>

                <p>Conversão para Dolar/Euro</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="conversor-de-moeda/dist/index.php" class="small-box-footer">Converter <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Cartões</h3>

                <p>Cadastrar seus cartões</p>
              </div>
              <div class="icon">
                <i class="ion ion-card"></i>
              </div>
              <a href="daily-ui-002-credit-card-checkout/dist/index.php" class="small-box-footer">Cadastrar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Pagar boletos</h3>

                <p>Realizar pagamento de boletos</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-barcode-outline"></i>
              </div>
              <a href="checkout-pagar-mereact/dist/index.php" class="small-box-footer">Pagar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Status</h3>

                <p>Status Bancário</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark-circled"></i>
              </div>
              <a href="suitbankinicio/dist/index.php" class="small-box-footer">Verificar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
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
<h3 class="card-title">Serviços</h3>
<div class="card-tools">
<span class="badge badge-danger">8 services</span>
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body p-0">
<ul class="users-list clearfix">
<li>
<img src="image/pix.png" alt="User Image">
<a class="users-list-name" href="#">Pix</a>
<span class="users-list-date">Rápido e Seguro</span>
</li>
<li>
<img src="image/seguro.png" alt="User Image">
<a class="users-list-name" href="#">Seguros</a>
<span class="users-list-date">De todo tipo</span>
</li>
<li>
<img src="image/transacoes.png" alt="User Image">
<a class="users-list-name" href="#">Transações</a>
<span class="users-list-date">De confiança</span>
</li>
<li>
<img src="image/emprestimo.png" alt="User Image">
<a class="users-list-name" href="#">Emprétismos</a>
<span class="users-list-date">Pra te salvar</span>
</li>
<li>
<img src="image/consorcio.png" alt="User Image">
<a class="users-list-name" href="#">Consórcios</a>
<span class="users-list-date">Que ajudam</span>
</li>
<li>
<img src="image/cartao.png" alt="User Image">
<a class="users-list-name" href="#">Cartões</a>
<span class="users-list-date">Crédito / Débito</span>
</li>
<li>
<img src="image/robinho.png" alt="User Image">
<a class="users-list-name" href="mensagem/dist/index.php">Robinho</a>
<span class="users-list-date">Assistente Virtual</span>
</li>
<li>
<img src="image/investimento.png" alt="User Image">
<a class="users-list-name" href="cripto/dist/index.php">Investimento</a>
<span class="users-list-date">Criptomoedas</span>
</li>
</ul>

</div>

</div>

            <!-- /.card -->

            <!-- DIRECT CHAT -->
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
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Fundadores
                </h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/Heloisa.jpeg" alt="Primeiro Slide" alt="User Image" >
      <div class="carousel-caption d-none d-md-block">
    <h5>Heloisa Gomes Guimarães</h5>
    <p>Designer Digital</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/Renan.jpeg" alt="Segundo Slide" alt="User Image">
      <div class="carousel-caption d-none d-md-block">
    <h5>Renan Onofre Cruvello da Silva</h5>
    <p>Desenvolvedor de Software</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/Samuel.jpeg" alt="Terceiro Slide" alt="User Image">
      <div class="carousel-caption d-none d-md-block">
    <h5>Samuel Yuri Venturini</h5>
    <p>CopyWritter</p>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
              </div>
              <!-- /.card-body -->
              
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
                  Localização
                </h3>
                <!-- card tools -->
                
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div style="height: 250px; width: 100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.9331259381834!2d-47.22994448540106!3d-22.87892864262849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc25fa05e0d96db02!2zMjLCsDUyJzQ0LjIiUyA0N8KwMTMnMzkuOSJX!5e0!3m2!1spt-BR!2sbr!4v1667846572860!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
              </div>
                <br/>
              <!-- /.card-body-->
              
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitas Físicas</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Visitas Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Visitas</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
                </div>
              
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Bytes Bank
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
              <div class="card-body">
              <div id="graficoPizza"></div>

              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Agendamento
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
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