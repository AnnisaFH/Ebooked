<<html>
<head>
  <title></title>
</head>
<body>
      <section id="main-content">
          <section class="wrapper">
     
                                  <div class="form-group">
        <div class="col-lg-12">
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
                                </tr>
                              </thead>
                              <tbody>
                      <?php $no=1; foreach ($data as $d){ ?>
                                <tr>
                                  <td><?php echo $no++;?></td>
                                  <td><?php echo $d['id_kelas'];?></td>
                                  <td><?php echo $d['nama_materi'];?></td>
                                  <td><?php echo $d['judul'];?></td>
                                  <td><?php echo $d['penerbit'];?></td>
                                  <td><?php echo $d['tahun'];?></td>
                                  <td><?php echo $d['review;']?></td>
                                  <td><?php echo $d['materi'];?></td>
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
</body>
</html>