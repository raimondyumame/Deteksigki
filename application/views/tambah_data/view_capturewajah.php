
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
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
						<a href="http://localhost:8080/Smart-home/index.php/dashboard/index" class="brand-logo">
							<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/LOGO_ITN2.png" class="max-h-50px"/>
						</a>
						<h5 class="sidebar-brand-text mt-5 pr-2 mb-5">Deteksi Masker</h5>
						<!--end::Logo-->
						<!--begin::Toggle-->
						
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tambah Data Citra Baru </h5>
									<!--end::Title-->
									<!--begin::Separator-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
									<!--end::Separator-->
								</div>

								<!--begin::Button-->
								<a href="<?=site_url('admin')?>" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">BACK</a>
									<!--end::Button-->
								<!--end::Details-->
								
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--end::Wizard Nav-->
								<!--begin::Card-->
								<div class="card card-custom card-shadowless rounded-top-0" id="starter">
									<!--begin::Body-->
									<div class="card-body p-0">
										<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
											<div class="col-xl-12 col-xxl-10">
												<!-- starter page -->
												<div style="text-align: center;">

													<?php echo svg_record() ?>
													<h2>CAPTURE OTOMATIS</h2>
													<p>Camera akan menangkap wajah anda untuk dilakukan penyimpanan</p>
													<button id="launch-camera" type="button" class="btn btn-light-primary">Jalankan
														Kamera</button>

												</div>
											</div>

										</div>
										<!--end::Body-->
									</div>
								</div>
								<!--end::Card-->
								
                                <!--begin::Card-->
								<div class="card card-custom card-shadowless rounded-top-0" id="camera">
									<!--begin::Body-->
									<div class="card-body p-0">
										<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
											<div class="col-xl-12 col-xxl-10">
												<!-- starter page -->
												<div style="text-align: center;">

													<div id="webcam" style="position: relative; left: 340px;"></div>

													<h2 id="msg">Tatap Kamera selama beberapa waktu</h2>
													<p>Camera akan menangkap wajah anda untuk dilakukan penyimpanan</p>

                                                    <div class="form-group">
                                                        <input type="hidden" value="<?php echo $this->input->get('nama') ?>" placeholder="label . . ." name="nama" />
                                                        <input type="hidden" value="<?php echo $this->input->get('uid') ?>" placeholder="label . . ." name="uid" />
                                                        <input type="hidden" value="<?php echo $this->input->get('tgl') ?>" placeholder="label . . ." name="tgl" />
                                                    
                                                    </div>
													<button id="proses-registrasi" type="button" class="btn btn-light-primary">Take Picture</button>

												</div>
											</div>

										</div>
										<!--end::Body-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:<?php echo base_url() ?>assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		
		
		<script>var HOST_URL = "/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js?v=7.2.9"></script>
		<script src="<?php echo base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.9"></script>
		<script src="<?php echo base_url() ?>assets/js/scripts.bundle.js?v=7.2.9"></script>
		<script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url() ?>assets/js/pages/custom/user/add-user.js?v=7.2.9"></script>
		<!--end::Page Scripts-->

        <script src="<?php echo base_url() ?>assets/js/webcam.js"></script>

		<script>
			// function cekUID()
			// {
			// 	$.ajax({
			// 		type : "GET",
			// 		url : "<?php echo base_url('tambah_data/entry_data') ?>",
			// 		cache : false,
			// 		dataType:"json",
			// 		success: function(response)
			// 		{
			// 			console.log(response);
			// 			$("#uid").val(response)
			// 		}
			// 	});
			// }
			// setInterval(cekUID, 2000);
		</script>


        <script>
            
        $(function() { // membuka elemen javascript

            var starter = $('#starter');
            var camera  = $('#camera');

            // inisialisasi awal camera harus di hide 
            camera.hide();          


            const base_url = '<?php echo base_url() ?>';

            // fungsi untuk memanggil menu camera
            var panggilCamera = function() {

                // init webcam
                Webcam.set({

                    width: 320,
                    height: 240,
                    image_format: "jpeg",
                    jpeg_quality: 90

                });

                Webcam.attach("#webcam");
            }


            var jalankanCapture = function() {

            var inputNama = $('input[name="nama"]').val();

            let limit = 50;

            for ( $i = 0; $i < limit; $i++ ) {

                setTimeout( function() {

                    // capture file        
                    Webcam.snap(function( data ) {

                        Webcam.upload(data, '<?php echo base_url('tambah_data/proses_registrasi/') ?>' + $i +'/' + inputNama, function(code, text) {
                                
                                console.log("Oke " + $i);
                        });
                    })

                    console.log( $i );
                            
                        
                }, 1000 * $i);
                
                }

                $('#msg').text("Sedang melakukan cropping");


                setTimeout(function() {

                    $('#msg').text("Capture Selesai");
                    $('#proses-registrasi').hide(500);
                    // window.location.href = "<?php echo base_url('register/form') ?>";
                }, (limit + 3) * 1000);
            }




            $('#launch-camera').click(function() {

                starter.hide(500);
                camera.show(1000)

                // jalankan camera (ON)
                panggilCamera();

            });


            $('#proses-registrasi').click(function() {

                var inputNama = $('input[name="nama"]').val();
                var uid = $('input[name="uid"]').val();
                var tgl = $('input[name="tgl"]').val();
                $.ajax({

                    type: "GET",
                    url : "<?php echo base_url('tambah_data/insert_info') ?>",
                    data : "nama=" + inputNama + "&uid=" + uid + "&tgl=" + tgl,
                    success: function() {


                    }, 
                    error: function( e) {

                        console.log( e );
                    }
                });

                jalankanCapture();
                });


            
        })
        </script>

	</body>
	<!--end::Body-->
</html>







<?php

  function svg_record() {

    return '<svg style="width: 200px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 704 745.19434" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.912,808.86866c-28.10766.00342-71.75879-22.23437-111.85717-59.4497a174.925,174.925,0,0,1-12.6825-13.16162,2.44321,2.44321,0,0,1-.44629-2.48731,2.47659,2.47659,0,0,1,1.9917-1.60937l17.53919-2.52979a1.49991,1.49991,0,0,0,.04528-2.96191l-29.99328-5.2666a2.50175,2.50175,0,0,1-1.60962-1.01123c-31.60547-44.11768-48.84583-98.96973-53.377-114.73a2.49376,2.49376,0,0,1,2.90722-3.13476c4.84644,1.00928,14.926,3.25439,27.98035,6.94678a2.51156,2.51156,0,0,1,1.74829,1.79345l.93555,3.68946a1.50012,1.50012,0,0,0,2.95056-.26563l.02649-.38574a2.50695,2.50695,0,0,1,3.22156-2.229,431.834,431.834,0,0,1,42.28625,15.25195,2.52422,2.52422,0,0,1,1.45874,1.69775l5.06616,19.97754a1.5,1.5,0,0,0,2.95056-.26562l.8982-13.05078a2.50088,2.50088,0,0,1,3.56518-2.0918c22.8667,10.90722,41.74854,23.20117,56.1211,36.54053,53.9563,50.07763,81.34839,108.60156,61.06128,130.46044C461.48944,806.20948,453.62591,808.8672,443.912,808.86866Z" transform="translate(-248 -77.40283)" fill="#f2f2f2"/><path d="M450.57025,808.55226c-27.95752.00439-63.663-48.562-82.52063-114.28076a174.94442,174.94442,0,0,1-4.05371-17.82178,2.44406,2.44406,0,0,1,.90393-2.36035,2.47545,2.47545,0,0,1,2.53674-.34766l16.322,6.90039a1.5,1.5,0,0,0,1.56983-2.51221l-22.95337-20.0122a2.50119,2.50119,0,0,1-.85523-1.69776c-4.2511-54.10449,9.34326-109.9707,13.61109-125.80468a2.49423,2.49423,0,0,1,4.10913-1.18067c3.63159,3.374,11.106,10.5127,20.36157,20.40967a2.51361,2.51361,0,0,1,.56946,2.43945l-1.1062,3.64209a1.5001,1.5001,0,0,0,2.6632,1.29737l.22193-.31641a2.50688,2.50688,0,0,1,3.91-.24316,431.78607,431.78607,0,0,1,28.31519,34.91455,2.52532,2.52532,0,0,1,.37134,2.207l-5.98951,19.7207a1.49985,1.49985,0,0,0,2.66285,1.29736l7.51489-10.70752a2.44266,2.44266,0,0,1,2.0896-1.0664,2.48754,2.48754,0,0,1,2.0437,1.11865c13.937,21.15723,23.74585,41.44141,29.1543,60.28955,20.30371,70.7583,13.50146,135.0166-15.16382,143.24219A22.73056,22.73056,0,0,1,450.57025,808.55226Z" transform="translate(-248 -77.40283)" fill="#f2f2f2"/><ellipse cx="352" cy="727.19434" rx="352" ry="18" fill="#e6e6e6"/><path d="M805.65356,250.35008h-3.99877V140.80476A63.40187,63.40187,0,0,0,738.253,77.40283H506.16626a63.40187,63.40187,0,0,0-63.402,63.4017v600.9744a63.40189,63.40189,0,0,0,63.4018,63.40192H738.25269a63.40187,63.40187,0,0,0,63.402-63.40168V328.32632h3.99878Z" transform="translate(-248 -77.40283)" fill="#3f3d56"/><path d="M788.16,141.24713v600.09a47.35071,47.35071,0,0,1-47.35,47.35H507.61a47.35084,47.35084,0,0,1-47.35-47.35v-600.09a47.35089,47.35089,0,0,1,47.35-47.35H535.9a22.50659,22.50659,0,0,0,20.83,30.99H689.69a22.50674,22.50674,0,0,0,20.83-30.99h30.29A47.35087,47.35087,0,0,1,788.16,141.24713Z" transform="translate(-248 -77.40283)" fill="#fff"/><path d="M753.13909,210.12184H495.27923a16.52251,16.52251,0,0,0-16.5,16.5v300a16.52248,16.52248,0,0,0,16.5,16.5H753.13909a16.48278,16.48278,0,0,0,14.14014-8.02,13.21937,13.21937,0,0,0,.73-1.33,16.28725,16.28725,0,0,0,1.54981-5.61,13.11414,13.11414,0,0,0,.08007-1.54v-300A16.51623,16.51623,0,0,0,753.13909,210.12184Z" transform="translate(-248 -77.40283)" fill="#e6e6e6"/><circle cx="376.20999" cy="590.21924" r="57" fill="#f50057"/><circle cx="378.26747" cy="189.33878" r="61.99115" fill="#2f2e41"/><path d="M769.559,490.63185v37.53a16.28725,16.28725,0,0,1-1.54981,5.61,13.21937,13.21937,0,0,1-.73,1.33l-10.09033-9.29-56.34961-51.95-.01025-.01-49.86963-45.98,34.68994-26.88,39.92969,42.66Z" transform="translate(-248 -77.40283)" fill="#ffb8b8"/><circle cx="624.6552" cy="289.15072" r="46.13836" transform="translate(-269.50316 448.98538) rotate(-45)" fill="#ffb8b8"/><path d="M656.04315,543.62208H530.84075l.20069-.648c5.9978-19.37793,9.12939-50.437,9.30762-92.314.05566-12.38819-.15308-25.70215-.61988-39.57178-.825-25.31494-2.35229-48.12793-3.48852-62.8081a18.26008,18.26008,0,0,1,17.68408-19.64844,55.91307,55.91307,0,0,1,25.4978,5.46582,159.877,159.877,0,0,0,36.05933,12.30273A150.92008,150.92008,0,0,1,679.206,376.26564l1.40332,1.13037a141.9168,141.9168,0,0,1,45.69409,65.76758l.08325.25-22.79638,30.09765a2.50946,2.50946,0,0,1-2.72193.88184l-.30517-.1001-22.37549-6.88867c-16.68018,33.708-3.11768,53.30664-.21924,56.9043.20117.25537.32007.38574.32788.394l.30225.32764-.29077.33789a85.60022,85.60022,0,0,1-22.14869,18.187Z" transform="translate(-248 -77.40283)" fill="#f50057"/><path d="M769.559,527.83186v.33a16.28725,16.28725,0,0,1-1.54981,5.61,13.21937,13.21937,0,0,1-.73,1.33,16.48278,16.48278,0,0,1-14.14014,8.02H579.45941l92.82959-18.09s1.92041-.18005,5.29-.41c13.21-.94,48.83007-2.83,79.60986,1.19C761.42913,526.37184,765.579,527.03187,769.559,527.83186Z" transform="translate(-248 -77.40283)" fill="#2f2e41"/><path d="M670.682,259.727a137.20953,137.20953,0,0,1-59.3597,19.559l6.257-7.49716c-4.62968,1.44068-9.35561,2.896-14.20367,2.82046s-9.92762-1.94226-12.67915-5.93457c-2.64021-3.8308-2.69031-9.04359-.96848-13.36576s5.00194-7.85641,8.6212-10.77989a51.32657,51.32657,0,0,1,47.772-8.53774c5.42563,1.83269,10.66194,4.70378,14.26815,9.15254s5.34527,10.66077,3.49885,16.08174Z" transform="translate(-248 -77.40283)" fill="#2f2e41"/><path d="M620.4325,211.63192a141.79965,141.79965,0,0,1,51.58972-33.361c12.471-4.62006,26.0449-7.47453,39.08278-4.85081s25.36773,11.64319,29.0051,24.43536c2.9743,10.46027-.09689,21.72282-4.71266,31.56956s-10.77816,18.97769-14.51086,29.19193a66.6272,66.6272,0,0,0,67.04255,89.34664c-12.81033,1.71767-24.61828,7.73771-37.13975,10.94206s-27.30017,2.98705-36.60529-5.98344c-9.84516-9.4911-10.04227-24.92266-9.56628-38.58947l2.12277-60.94851c.36085-10.36085.669-21.05376-3.06741-30.72415s-12.61645-18.1384-22.98321-18.05041c-7.857.06669-14.81105,4.82639-21.112,9.52043s-12.97016,9.70206-20.79633,10.40026-16.76189-5.09351-16.17626-12.92891Z" transform="translate(-248 -77.40283)" fill="#2f2e41"/><polygon points="306.569 336.739 301.749 377.489 291.299 465.719 257.539 465.719 262.279 358.749 263.659 327.539 292.229 333.669 306.569 336.739" fill="#ffb8b8"/><path d="M589.41619,474.30226l-90.73657-45.81934a4.49676,4.49676,0,0,1-2.18847-5.58789l31.38452-84.251c1.45727-3.91259,5.26074-7.28759,10.71-9.5039,7.29809-2.96777,16.16333-3.25928,21.55713-.71045l.38379.18164-2.08179,7.28564Z" transform="translate(-248 -77.40283)" fill="#f50057"/></svg>';
  }
?>