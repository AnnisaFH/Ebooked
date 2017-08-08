 <?php require_once("guru_hdr.php");?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit Materi</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>index.php/Guru/index">Beranda</a></li>
						<li><i class="icon_document_alt"></i>Materi</li>
						<li><i class="fa fa-file-text-o"></i>Edit Materi</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Edit Materi
                          </header>
                          <?php
                            foreach ($materi as $d) {
                          ?>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" action="<?php echo base_url();?>index.php/Crud/updatedata" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Kelas</label>
                                      <div class="col-sm-10">
                                          <?php $kelas=$d->id_kelas;?>
										                      <select class="form-control m-bot15" name="kelas" >
                                              <option>-</option>
                                              <?php
                                                if($kelas=='7'){
                                              ?>
                                                <option value="7" selected="selected">7 SMP</option>
                                                <option value="8">8 SMP</option>
                                                <option value="9">9 SMP</option>
                                              
                                              <?php
                                              }else if($kelas=='8'){
                                              ?>
                                                <option value="7" >7 SMP</option>
                                                <option value="8" selected="selected">8 SMP</option>
                                                <option value="9">9 SMP</option>
                                              <?php
                                              }else{
                                              ?>
                                              <option value="7">7 SMP</option>
                                              <option value="8">8 SMP</option>
                                              <option value="9" selected="selected">9 SMP</option>
                                              <?php 
                                              }
                                              ?>
                                              
                                            </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Mata Pelajaran</label>
                                      <div class="col-sm-10">
                                        <?php  $nm=$d->nama_materi;?>
                                           <select class="form-control" name="pelajaran" value="<?php echo $nama_materi;?>">
                      										   <option > - </option>
                                               <?php 
                      												foreach($mapel as $row){
                      													 if($nm==$row->mapel){
                                                ?>
                      				                      
                                                    <option selected="selected"><?php echo $row->nama_materi;?></option>	
                      												<?php
                                                  }else{
                                                    ?>
                                                      <option><?php echo $row->nama_materi;?></option>  
                                                    <?php
                                                  }
                      												}
                      											 ?>
											  
                                             
                                          </select>
                                      </div>
                                  </div>
                            
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Judul</label>
                                      <div class="col-sm-10">
                                        <input id="cp1" type="hidden" value="<?php echo $d->id_materi;?>" size="10" class="form-control" name="id_materi">
                                           <input id="cp1" type="text" value="<?php echo $d->judul;?>" size="10" class="form-control" name="judul">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Penerbit</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="text" value="<?php echo $d->penerbit;?>" size="10" class="form-control" name="penerbit">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Tahun</label>
                                      <div class="col-sm-10">
                                           <input id="cp1" type="number" value="<?php echo $d->tahun; ?>" size="10" class="form-control" name="tahun">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Sekilas Materi</label>
                                      <div class="col-sm-10">
										<textarea class="form-control" name="review" ><?php echo $d->review;?>
										</textarea>
                      
                                      </div>
								</div>
                <div class="form-group">
                                      <label class="col-sm-2 control-label">Modul/Materi</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="materi" >
                                          <input type="hidden" class="form-control" name="materilama" value="<?php echo $d->materi;?>">
                                      </div>
                </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Gambar</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="gambar" value="<?php echo $d->gambar;?>">
                                      </div>
								</div>
							
									  <label class="col-sm-2 control-label">
									  <button type="submit" class="btn btn-primary" style="margin-left: 220px;">Submit</button>
                                  </div>
                              </form>
                          </div>
                          </div>
                      </section>
                      <?php }?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
        </section>
  <!-- container section end -->

 <?php require_once("guru_ftr.php");?>
  </body> 