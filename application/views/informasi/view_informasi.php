 


	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						
                       
						<!--end::Logo-->
						<!--begin::Toggle-->
						
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
				
						<!--begin::Container-->
						
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
                    <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
                                    <div class="d-flex align-items-center">
									<!--begin::Button-->
									<a href="<?=site_url('admin')?>" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">BACK</a>
									<!--end::Button-->
									</div>
										
									</div>
									<div class="card-body">
										
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Nama</th>
													<th>Citra</th>
													<!-- <th>Opsi</th> -->
												</tr>
											</thead>
											<tbody>
												<?php foreach ( $row->result() AS $isi ) : 
													
													if ( $isi->name != "admin" ) {	
												?>
												<tr>
													<td>
														<small>Nama Dataset - UID : <b><?php echo $isi->uid ?></b></small>	
														<h2><?php echo $isi->name ?></h2>
													</td>
													<td>
													<?php

														$path    = './dataset/'. $isi->name.'/';

														$files = scandir($path);
														$files = array_diff(scandir($path), array('.', '..')); 
														?>

															<?php foreach ( $files AS $file ) : ?>
																<img src="<?php echo base_url(). $path . $file ?>" alt="Citra" style="width: 75px; border-radius: 5px">

															<?php endforeach; ?>
													</td>
													
														<!-- <a href="<?php echo base_url('informasi/m_hapus_data_smarthome/'.$isi->id); ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin anda ingin menghapus ini?');" >Hapus</a> -->
												
														<!-- <a data-toggle="modal" data-target="#exampleModal" class="badge badge-primary float-right ml-1">Lihat Detail</a> -->
														<!-- <a href="<?php echo site_url('informasi/edit/'.$isi->id) ?>" class="badge badge-success float-right">Edit Data</a> -->


													</td>
													
												</tr>
												<?php } endforeach; ?>
											</tbody>
										</table>

                                        <!-- <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div> -->
                                        
                                        
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
					<!--end::Content-->
					<!--begin::Footer-->
				
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
	
		<!-- end::User Panel-->
		<!--begin::Quick Cart-->
		
		<!--end::Quick Cart-->
		<!--begin::Quick Panel-->
		
		<!--end::Quick Panel-->
		<!--begin::Chat Panel-->
		
		<!--end::Chat Panel-->
		<!--begin::Scrolltop-->
		
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		
		<!--end::Sticky Toolbar-->
		<!--begin::Demo Panel-->
	
		<!--end::Demo Panel-->
		
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>