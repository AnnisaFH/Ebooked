 <?php require_once("admin_hdr.php");?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form Edit Mata Pelajaran</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>index.php/Guru/index">Beranda</a></li>
						<li><i class="fa fa-file-text-o"></i>Edit Mata Pelajaran</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Edit Mata Pelajaran
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" action="<?php echo base_url();?>index.php/Crud/updatemapel" enctype="multipart/form-data">
                    <?php
                            foreach ($mapel as $d) {
                          ?>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                                      <div class="col-sm-10">
                                        <input id="cp1" type="hidden" value="<?php echo $d->id_mapel;?>" size="10" class="form-control" name="id_mapel">
                                           <input id="cp1" type="text" value="<?php echo $d->nama_materi; ?>" size="10" class="form-control" name="nama_mapel">
                                      </div>
                                  </div>					
									  <label class="col-sm-2 control-label">
									  <button type="submit" class="btn btn-primary" style="margin-left: 220px;">Edit</button>
                                  </div>
                              <?php }?></form>
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