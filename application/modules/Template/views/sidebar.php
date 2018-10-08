  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull image">
          <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" >
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-reorder"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>Suhu</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>pH</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Salinitas</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Kecerahan</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Oksigen</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Tahap Budidaya</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>riwayat">
            <i class="fa  fa-history"></i> <span>Riwayat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left  pull-right"></i>
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>assets/modules/user/create-form.php"><i class="fa fa-circle-o"></i> Add User</a></li>
            <li><a href="<?php echo base_url(); ?>assets/modules/user/all-record.php"><i class="fa fa-circle-o"></i> All User</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-question-circle"></i> <span>Petunjuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>