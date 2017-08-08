 <?php require_once("guru_hdr.php");?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
         <div class="row">
        
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>index.php/Guru/index">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-file-text-o"></i>Materi</li>
					</ol>
				</div>
			</div>
        <form class="form-horizontal " method="post" action="<?php echo base_url();?>index.php/laporan/cetakpdf" enctype="multipart/form-data">    
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Materi
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Id Materi</th>
                                  
                                  <th>Kelas</th>
                                  <th>Mata Pelajaran</th>
                                  <th>Judul</th>
                                  <th>Penerbit</th>
                                  <th>Tahun</th>
                                  <th>Sekilas Materi</th>
                                  <th>Materi</th>
                                  <th>Gambar</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                      <?php $no=1; foreach ($materi as $d){ ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td><?php echo $d->id_kelas;?></td>
                                  <td><?php echo $d->nama_materi;?></td>
                                  <td><?php echo $d->judul;?></td>
                                  <td><?php echo $d->penerbit;?></td>
                                  <td><?php echo $d->tahun;?></td>
                                  <td><?php echo $d->review;?></td>
                                  <td><?php echo $d->materi;?></td>
                                  <td><img src="<?php echo base_url();?>upload/<?php echo $d->gambar;?>" height="100px"></td>
                                  <td>
                                        <a href="<?php echo base_url();?>index.php/crud/editdata/<?php echo $d->id_materi;?>"> Edit </a> ||
                                        <a onclick="return confirm ('Yakin akan di hapus ?')" href="<?php echo base_url();?>index.php/crud/deletemateri/<?php echo $d->id_materi;?>"> Hapus </a> 

                                  </td>
                                </tr>
                              <?php }?>
                              </tbody>
                            </table>
                                                     <label class="col-sm-2 control-label">
                    <button type="submit" class="btn btn-primary" style="margin-left: 220px;">Cetak</button>
                  </div>
                          </div>

                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
        </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="<?php echo base_url();?>asset2/js/jquery.js"></script>
    <script src="<?php echo base_url();?>asset2/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url();?>asset2/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="<?php echo base_url();?>asset2/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="<?php echo base_url();?>asset2/js/ga.js"></script>
    <!--custom switch-->
    <script src="<?php echo base_url();?>asset2/js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="<?php echo base_url();?>asset2/js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>asset2/js/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>asset2/js/bootstrap-wysiwyg.js"></script>
    <script src="<?php echo base_url();?>asset2/js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="<?php echo base_url();?>asset2/assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="<?php echo base_url();?>asset2/js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="<?php echo base_url();?>asset2/js/scripts.js"></script>


  </body>