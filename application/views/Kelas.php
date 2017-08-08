<?php require_once('hdr1.php');?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Mulailah Belajar Teman</h2>
						<p>Pilih Pelajaran</p>
					</header>
				</div>
			</section>
				<section id="one" class="wrapper style1 special">
				<div class="section primary-section" id="Menu">
				<div class="container">
					<div class="row 50%">
				


				<?php foreach ($materi as $d){ ?>
				<div class="4u 12u$(medium)">
							<section class="box">
								 <div class="item  col-sm-6 col-md-6 col-lg-4">
            <div class="thumbnail">
                <img src="<?php echo base_url();?>upload/<?php echo $d->gambar;?>" height="100px">

            <div class="caption">
                    <h4 style="text-align:center;font-size:0.9em;height:50px;" class="group inner list-group-item-heading">
                       <b> <a href="<?php echo base_url();?>index.php/Welcome/kelasd"><?php echo $d->judul;?> </a></h4>
                    </b>
                        <table style="font-size:0.8em;text-align:left;margin:0px;width:100%" class="table">
							
							<tr>
								<td><i class="icon roundedd color1 fa-graduation-cap"></i></td>
								<td><?php echo $d->id_kelas;?> </td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-book"></i></td>
								<td><?php echo $d->nama_materi;?></td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-print"></i></td>
								<td><?php echo $d->penerbit?>.</td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-calendar"></i></td>
								<td><?php echo $d->tahun;?></td>
							</tr>
							
						</table>
					
							<div style="text-align:center;">
							<div class="btn-group" role="group" aria-label="...">
							<ul class="actions">

							<li><a href="<?php echo base_url();?>index.php/Welcome/kelasd/<?php echo $d->id_materi;?>" class="button small" style="margin-bottom: 38px;">Detail</a></li>
							<li><a href="<?php echo base_url();?>upload/<?php echo $d->materi;?>" class="button small icon fa-download" style="margin-bottom: 38px;">Download</a></li>
							</ul>
					 
							</div>
							</div>
						</div>

					</section>
				</div>


				<?php }?>
				

