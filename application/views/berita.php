<?php require_once('hdr1.php');?>

		<!-- Main -->
				<section id="one" class="wrapper style1 special">

				<?php 
				foreach ($materi as $d){ 
					?>
					<div class="caption">
                    
                        <table style="font-size:1.2em;text-align:left;width:100%" class="table" >
							<img src="<?php echo base_url();?>upload/<?php echo $d->gambar;?>" height="300px">
							<tr>
								<td></td>
								<td>
								</td>
									<h2><?php echo $d->nama_materi;?></h2>
							</tr>
							<h1>
							<tr>
								<td><i class="icon roundedd color1 fa-graduation-cap"></i>Kelas</td>
								<td><?php echo $d->id_kelas;?> </td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-book"></i>Mata Pelajaran</td>
								<td><?php echo $d->nama_materi;?></td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-book"></i>Judul</td>
								<td><?php echo $d->judul;?></td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-print"></i>Penerbit</td>
								<td><?php echo $d->penerbit?>.</td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-calendar"></i>Tahun Terbit</td>
								<td><?php echo $d->tahun;?></td>
							</tr>
							<tr>
								<td><i class="icon roundedd color1 fa-calendar"></i>Tentang Materi</td>
								<td><?php echo $d->review;?></td>
							</tr>
							</h1>
						</table>

						<div style="text-align:center;">
							<div class="btn-group" role="group" aria-label="...">
							<ul class="actions">					
							<li><a href="<?php echo base_url();?>upload/<?php echo $d->materi;?>" class="button big icon fa-download" style="margin-bottom: 38px;">Download</a></li>
							</ul>
					 
					</div>
					</div>
					</div>
				<?php }?>
						
					
				
			
			</section>

<?php require_once("ftr.php");?>