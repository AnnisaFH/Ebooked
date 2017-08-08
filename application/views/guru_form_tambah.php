 <?php require_once("guru_hdr.php");?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Tambah Materi</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>index.php/Guru/index">Beranda</a></li>
						<li><i class="icon_document_alt"></i>Materi</li>
						<li><i class="fa fa-file-text-o"></i>Tambah Materi</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Tambah MAteri
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" action="<?php echo base_url();?>index.php/crud/tambah" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Kelas</label>
                                      <div class="col-sm-10">
										                      <select class="form-control m-bot15" name="kelas">
                                              <option>-</option>
											                       <option value="7">7 SMP</option>
                                              <option value="8">8 SMP</option>
                                              <option value="9">9 SMP</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Mata Pelajaran</label>
                                      <div class="col-sm-10">
                                           <select class="form-control" name="pelajaran">
                      										   <option > - </option>
                                                                   <?php 
                      												foreach($mapel as $row){
                      													?>
                      												<option><?php echo $row->nama_materi;?></option>	
                      												<?php
                      												}
                      											 ?>
											  
                                             
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Judul</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="text" value="" size="10" class="form-control" name="judul">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Penerbit</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="text" value="" size="10" class="form-control" name="penerbit">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Tahun</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="number" value="" size="10" class="form-control" name="tahun">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Sekilas Materi</label>
                                      <div class="col-sm-10">
										<textarea class="form-control" name="review">
										</textarea>
                      
                                      </div>
								</div>
                <div class="form-group">
                                      <label class="col-sm-2 control-label">Modul/Materi</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="materi">
                                      </div>
                </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Gambar</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="gambar">
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