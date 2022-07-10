<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container col-md-6">
            <!--begin::Notice-->

            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-20 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Tambah Data citra
                            <span class="d-block text-muted pt-2 font-size-sm">Data warga yang tercaputer pada video</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">

                            <!--end::Svg Icon-->

                            <!--begin::Dropdown Menu-->

                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <a href="<?php echo base_url('log') ?>" class="btn btn-primary font-weight-bolder">
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
                            </span>BACK</a>
                        <!--end::Button-->
                    </div>
                </div>

                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->

                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->


                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    Form Tambah Data Citra
                                </div>
                                <div class="card-body">

                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="id">id</label>
                                            <input type="text" name="idwajah" class="form-control" id="idwajah">

                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Wajah</label>
                                            <input type="text" name="wajahcitra" class="form-control" id="wajahcitra">
                                            <small class="form-text text-danger"><?= form_error('wajahcitra'); ?></small>
                                        </div>
                                        <button type="submit" name="tambah" class="btn btn-primary float-right'">Tambah Data</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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