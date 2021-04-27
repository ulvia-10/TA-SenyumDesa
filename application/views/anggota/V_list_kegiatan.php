  <br> <br>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-sm-12">
  			<div class="card">
  				<div class="card-header">
  					<h5>Timeline Kegiatan <i class="fa fa-bullhorn" aria-hidden="true"></i></h5>
  				</div>
  				<div class="card-body">
  					<!-- cd-timeline Start-->
  					<section class="cd-container" id="cd-timeline">
  						<?php 
                 foreach ($kegiatan->result_array() as $kgt) { ?>
  						<div class="cd-timeline-block">
  							<div class="cd-timeline-img cd-picture bg-primary"><i class="icon-pencil-alt"></i></div>
  							<div class="cd-timeline-content">
							  <img src="<?$kgt?>" alt="">
  								<h5><?=$kgt['judul']?><span></h5>
  								<p class="m-0"><?=$kgt['deskripsi'];?></p><span
  									class="cd-date"><?= date('d-m-Y',strtotime($kgt['tanggal_kegiatan']));?>
  									<!-- <span class="counter">
  										<?=$kgt['tanggal_berakhir'];?></span> -->
  								</span>
								<br>
  								<!-- detail  kegiatan-->
  								<a href="<?= base_url(); ?>kegiatan/detailkegiatan/<?= $kgt['id_kegiatan']; ?>"
  									class="badge badge-secondary" style="margin-left: 200px;">
  									<i class="fa fa-eye" aria-hidden="true"></i> Detail</a></a>
  							</div>
  						</div>
  						<?php
                        }
            ?>
  					</section>

  				</div>
  			</div>
  		</div>
  	</div>
  </div>
