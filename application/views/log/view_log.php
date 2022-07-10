<!--begin::Content-->




<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->

	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<?php if ($this->session->flashdata('flash')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Data Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
			<!--begin::Notice-->

			<!--end::Notice-->
			<!--begin::Card-->
			<div class="card card-custom">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label">Data History
							<span class="d-block text-muted pt-2 font-size-sm">Data warga yang tercaputer pada video</span>
						</h3>
					</div>
					<div class="card-toolbar">
						<!--begin::Dropdown-->
						<div class="dropdown dropdown-inline mr-2">
							<a href="<?php echo base_url('admin') ?>" class="btn btn-secondary">
								<span class="svg-icon svg-icon-md">
									<!--begin::Svg Icon | path:<?php echo base_url() ?>/assets/media/svg/icons/Design/Flatten.svg-->

									<!--end::Svg Icon-->
								</span>Back</a>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
								Tambah Data
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="mb-3 row">
												<label for="id" class="col-sm-2 col-form-label">Wajah</label>
												<div class="col-sm-10">
													<input type="text" name="idwajah" class="form-control" id="idwajah ">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="nama" class="col-sm-2 col-form-label">Format gambar</label>
												<div class="col-sm-10">
													<input type="text" name="wajahcitra" class="form-control" id="wajahcitra">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<button type="submit" name="tambah" class="btn btn-primary float-right" id="simpanData">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!--begin::Dropdown Menu-->

							<!--end::Dropdown Menu-->
						</div>
						<!--end::Dropdown-->
						<!--begin::Button-->
						<a href=" <?php echo base_url('log/tambah') ?>" class="btn btn-primary font-weight-bolder">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:<?php echo base_url() ?>/assets/media/svg/icons/Design/Flatten.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<circle fill="#000000" cx="9" cy="15" r="6" />
										<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>Tambah Data</a>


						<!--end::Button-->
					</div>
				</div>
				<div class="card-body">
					<!--begin: Search Form-->
					<!--begin::Search Form-->
					<script>
						$('#simpanData').on('click', function() {
							var $wajah = $('#idwajah').val();
							var $format = $('#wajahcitra').val();
							$.ajax({
								url: "<?php echo base_url('log/simpan') ?>",
								type: "POST",
								success: function(hasil) {
									var $obj = $.parseJSON(hasil);
									if ($obj.sukses == false) {
										$('.sukses').hide();
										$('.error').show();
										$('.error').html($obj.error);
									} else {
										$('.error').hide();
										$('.sukses').show();
										$('.sukses').html($obj.sukses);

										// alert('saya sukses');
									}
								}
							});

						});
					</script>
					<!--end::Search Form-->
					<!--end: Search Form-->
					<!--begin: Datatable-->
					<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
						<thead>
							<tr>

								<th title="Field #2">Wajah</th>
								<th title="Field #3">Tanggal</th>
								<th title="Field #4">Aksi</th>


							</tr>
						</thead>

						<tbody>
							<?php foreach ($hasil_log->result_array() as $kolom) : ?>
								<tr>

									<td><?php echo $kolom['wajah'] ?></td>
									<td><?php echo $kolom['tanggal'] ?></td>

									<td><a href="<?php echo base_url() ?>log/hapus/<?= $kolom['id']; ?>" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon  svg-icon svg-icon-md" onclick="return confirm('yakin?');"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
													<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
												</g>
										</a></td>



								</tr>



							<?php endforeach; ?>

						</tbody>


					</table>
					<!--end: Datatable-->
				</div>
			</div>
			<!--end::Card-->
		</div>

		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->