 <?php require_once("admin_hdr.php");?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Buku Tamu</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo base_url();?>index.php/Guru/index">Beranda</a></li>
						<li><i class="icon_document_alt"></i>Buku Tamu</li>
					</ol>
				</div>
			</div>
            
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Buku Tamu
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Email</th>
                                  <th>Pesan</th>
                                 </tr>
                              </thead>
                              <tbody>
                      <?php $no=1; foreach ($tamu as $row){ ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td><?php echo $row->nama_tamu;?></td>
                                  <td><?php echo $row->email_tamu;?></td>
                                  <td><?php echo $row->pesan_tamu;?></td>
                                
                                </tr>
                              <?php }?>
                              </tbody>
                            </table>
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