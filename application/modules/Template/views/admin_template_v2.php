 <?php include('header.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
 <?php include('sidebar.php') ?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php $this->load->view($content_view); ?>
      <div class="row">
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>25 Celcius</h3>

              <p>Suhu</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-equalizer"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>50 hm</h3>

              <p>Kelembaban</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-equalizer"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>25 ppt</h3
              <p>Salinitas</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-equalizer"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>8,5</h3>

              <p>PH</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-equalizer"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>35 cm</h3>

              <p>Kecerahan</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-equalizer"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div align="center">
        <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>7,5 ppm</h3>

              <p>Oksigen</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-equalizer"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
          <div class="col-xs-12">
          <!-- interactive chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Suhu</h3>

              <div class="box-tools pull-right">
                Real time
                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
                  <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1073px; height: 300px;" width="1073" height="300"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 97px; top: 283px; left: 19px; text-align: center;" class="flot-tick-label tickLabel">0</div><div style="position: absolute; max-width: 97px; top: 283px; left: 121px; text-align: center;" class="flot-tick-label tickLabel">10</div><div style="position: absolute; max-width: 97px; top: 283px; left: 227px; text-align: center;" class="flot-tick-label tickLabel">20</div><div style="position: absolute; max-width: 97px; top: 283px; left: 332px; text-align: center;" class="flot-tick-label tickLabel">30</div><div style="position: absolute; max-width: 97px; top: 283px; left: 438px; text-align: center;" class="flot-tick-label tickLabel">40</div><div style="position: absolute; max-width: 97px; top: 283px; left: 543px; text-align: center;" class="flot-tick-label tickLabel">50</div><div style="position: absolute; max-width: 97px; top: 283px; left: 649px; text-align: center;" class="flot-tick-label tickLabel">60</div><div style="position: absolute; max-width: 97px; top: 283px; left: 754px; text-align: center;" class="flot-tick-label tickLabel">70</div><div style="position: absolute; max-width: 97px; top: 283px; left: 860px; text-align: center;" class="flot-tick-label tickLabel">80</div><div style="position: absolute; max-width: 97px; top: 283px; left: 965px; text-align: center;" class="flot-tick-label tickLabel">90</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 270px; left: 11px; text-align: right;" class="flot-tick-label tickLabel">0</div><div style="position: absolute; top: 216px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">20</div><div style="position: absolute; top: 162px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">40</div><div style="position: absolute; top: 108px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">60</div><div style="position: absolute; top: 54px; left: 6px; text-align: right;" class="flot-tick-label tickLabel">80</div><div style="position: absolute; top: 0px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">100</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1073px; height: 300px;" width="1073" height="300"></canvas></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

        </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
 <?php include('footer.php') ?>