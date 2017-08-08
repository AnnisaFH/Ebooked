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
                              Advanced Table
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_calendar"></i> Date</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_pin_alt"></i> City</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                                 <tbody>
                      <?php $no=1; foreach ($tamu as $row){ ?>
                                <tr>
                                 <td><?php echo $no++;?></td>
                                 <td><?php echo $row->nama_tamu;?></td>
                                  <td><?php echo $row->email_tamu;?></td>
                                  <td><?php echo $row->pesan_tamu;?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>                             
                           </tbody>
                        </table>
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