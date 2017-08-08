 <?php require_once("admin_hdr.php");?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Tambah Guru</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>index.php/Guru/index">Beranda</a></li>
						<li><a href="<?php echo base_url();?>index.php/Admin/tambah"><i class="icon_document_alt"></i>Guru</a></li>
						<li><i class="fa fa-file-text-o"></i>Tambah Guru</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Tambah Guru
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" action="<?php echo base_url();?>index.php/crud/tambahguru" enctype="multipart/form-data">
                  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nama Guru</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="text" value="" size="10" class="form-control" name="nama_guru">
                                      </div>
                                  </div>

                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Jabatan</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="text" value="" size="10" class="form-control" name="jabatan_guru">
                                      </div>
                                  </div>
                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Alamat</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="text" value="" size="10" class="form-control" name="alamat_guru">
                                      </div>
                                  </div>
                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="text" value="" size="10" class="form-control" name="password">
                                      </div>
                                  </div>
									  <label class="col-sm-2 control-label">
									  <button type="submit" class="btn btn-primary" style="margin-left: 220px;">Tambah</button>
                                  </div>
                              </form>
                          </div>
                          </div>
                      </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
        </section>
  <!-- container section end -->

 <?php require_once("guru_ftr.php");?>
  </body> 