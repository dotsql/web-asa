<?php
$app = $aplikasi->getrow();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> | Admin <?php echo $app->nama_app; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="<?php echo $app->deskripsi_app; ?>" name="description">
    <meta content="Rino Oktavianto" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url($app->icon_app); ?>">
    <!-- third party css -->
    <link href="<?= base_url(); ?>/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- sweetalert -->
    <link href="<?= base_url(); ?>/libs/bootstrap-sweetalert/sweetalert.min.css" rel="stylesheet">
    <!-- Izi Alert-->
    <link rel="stylesheet" href="<?= base_url(); ?>/libs/izi/dist/css/iziToast.min.css">
    <script type="text/javascript" src="<?= base_url(); ?>/libs/izi/dist/js/iziToast.min.js"></script>
    <!-- select2 -->
    <link href="<?= base_url(); ?>/libs/select2/select2.min.css" rel="stylesheet" type="text/css">
    <!-- timepicker -->
    <link href="<?= base_url(); ?>/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?= base_url(); ?>/libs/magnific-popup/magnific-popup.css">
    <!-- App css -->
    <link href="<?= base_url(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="<?= base_url(); ?>/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
    <style type="text/css">
        table {
            font-size: 12px;
            color: #000;
        }

        .btn-xs {
            font-size: 12px;
            padding: 3px;
            padding-top: 3px;
            padding-bottom: 3px;
            border-radius: 0px;
        }

        @media (min-width: 992px) {
            .modal-xl {
                width: 1500px;
            }
        }
    </style>
    <!-- Vendor js -->
    <script src="<?= base_url(); ?>/js/jquery-1.12.1.min.js"></script>
    <script src="<?= base_url(); ?>/js/vendor.min.js"></script>
    <!-- highchart -->
    <script src="<?= base_url(); ?>/libs/highchart/code/highcharts.js"></script>
    <script src="<?= base_url(); ?>/libs/highchart/code/highcharts-3d.js"></script>
    <script src="<?= base_url(); ?>/libs/highchart/code/modules/exporting.js"></script>
    <script src="<?= base_url(); ?>/libs/highchart/code/modules/export-data.js"></script>
</head>

<body>
    <script src="<?= base_url(); ?>/js/olahangka.js"></script>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a title="Kembali" class="nav-link dropdown-toggle waves-effect" href="javascript:;" onclick="window.history.back()">
                        <i class="fas fa-reply"></i>
                    </a>
                </li>
                <li class="dropdown notification-list">
                    <a title="Website" class="nav-link dropdown-toggle waves-effect" target="_blank" href="<?= base_url('/') ?>">
                        <i class="fas fa-globe-europe"></i> Website
                    </a>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <?php if (file_exists(foto('100', 'avatar', $profile->foto_pengguna))) { ?>
                            <img class="rounded-circle" src="<?= base_url(foto('100', 'avatar', $profile->foto_pengguna)); ?>">
                        <?php } else { ?>
                            <img class="rounded-circle" src="<?= base_url('file/avatar/user.png') ?>">
                        <?php } ?>
                        <span class="pro-user-name ml-1">
                            <?php echo $profile->nama_pengguna; ?> <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <a href="<?= base_url('paneladmin/setting') ?>" class="dropdown-item notify-item">
                            <i class="fa fa-cog"></i>
                            <span>Pengaturan</span>
                        </a>
                        <a href="<?= base_url('paneladmin/profil') ?>" class="dropdown-item notify-item">
                            <i class="fa fa-user"></i>
                            <span>Profil</span>
                        </a>
                        <a href="javascript:void(0);" onclick="logout()" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <div class="text-center"><span class="badge badge-dark">Versi 1.0</span></div>
                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?= base_url('paneladmin') ?>" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <span class="logo-lg-text-light">ADMINISTRATOR</span>
                    </span>
                    <span class="logo-sm">
                        <span class="logo-lg-text-light">V1.0</span>
                    </span>
                </a>
            </div>

            <!-- LOGO -->


            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Menu Aplikasi</li>
                        <li>
                            <a href="<?= base_url('paneladmin') ?>" class="waves-effect"><i class="ti-home"></i><span> Dashboard <span class="badge badge-primary float-right">Baru</span></span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('paneladmin/tahun') ?>" class="waves-effect"><i class="fas fa-calendar"></i><span> Tahun Ajaran</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('paneladmin/kelas') ?>" class="waves-effect"><i class="fas fa-book-reader"></i><span> Kelas</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-users"></i><span> Master Siswa</span><span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= base_url('paneladmin/siswa') ?>">Data Siswa</a></li>
                                <li><a href="<?= base_url('paneladmin/carisiswa') ?>">Cari Siswa</a></li>
                                <li><a href="javascript:;" data-toggle="modal" data-target="#modopsi">Export Siswa</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Website</li>
                        <li>
                            <a href="<?= base_url('paneladmin/kategori') ?>" class="waves-effect"><i class="fas fa-tag"></i><span> Kategori</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('paneladmin/halaman') ?>" class="waves-effect"><i class="fas fa-file-alt"></i><span> Halaman</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-calendar-day"></i><span> Master Acara</span><span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= base_url('paneladmin/acara') ?>">Data Acara</a></li>
                                <li><a href="<?= base_url('paneladmin/tambahacara') ?>">Tambah Acara</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-newspaper"></i><span> Master Artikel</span><span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= base_url('paneladmin/artikel') ?>">Data Artikel</a></li>
                                <li><a href="<?= base_url('paneladmin/tambahartikel') ?>">Tambah Artikel</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-image"></i><span> Master Galeri</span><span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= base_url('paneladmin/galeri') ?>">Data Galeri</a></li>
                                <li><a href="<?= base_url('paneladmin/video') ?>">Data Video</a></li>
                                <li><a href="<?= base_url('paneladmin/slider') ?>">Data Slider</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('paneladmin/menu') ?>" class="waves-effect"><i class="fas fa-list"></i><span> Menu Website</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('paneladmin/ourservice') ?>" class="waves-effect"><i class="fas fa-asterisk"></i><span> Our Service</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('paneladmin/setting') ?>" class="waves-effect"><i class="fas fa-cog"></i><span> Pengaturan</span></a>
                        </li>
                    </ul>
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content mt-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <?php echo $_content; ?>
                        </div>
                    </div>
                    <!-- end page title -->

                </div>
                <!-- end container-fluid -->

            </div>
            <!-- end content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <?php echo date('Y'); ?> &copy; <?php echo $app->nama_app; ?> Versi 1.0
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
            <script type="text/javascript">
                $(function() {
                    $('#datatable').DataTable();
                    $('.select2').select2();
                })

                function openimage(link, title) {
                    $.magnificPopup.open({
                        items: {
                            src: link,
                            title: title,
                        },
                        type: 'image'
                    });
                }

                function logout() {
                    swal({
                            title: "",
                            text: "Keluar Dari Aplikasi?",
                            type: "warning",
                            showCancelButton: !0,
                            confirmButtonClass: "btn-danger",
                            cancelButtonClass: "btn-dark",
                            confirmButtonText: "Lanjutkan",
                            cancelButtonText: "Batal",
                            closeOnConfirm: !1,
                            showLoaderOnConfirm: !0,
                        },
                        function() {
                            $.ajax({
                                type: "GET",
                                url: "<?= base_url('logout') ?>",
                                cache: false,
                                async: false,
                                success: function(response) {
                                    document.location.reload();
                                }
                            });
                        })
                }
            </script>
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <div class="modal fade" id="modopsi">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5><b>Export Opsional Siswa</b></h5>
                    </div>
                    <div class="modal-body">
                        <form target="_blank" action="<?= base_url('siswa/exportjk') ?>" method="post">
                            <label for="">Pilih Opsi Jenis Kelamin</label>
                            <br>
                            <div class="input-group">
                                <select class="form-control" name="opsi">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <span class="input-group-append">
                                    <button class="btn btn-info btn-flat"><i class="fa fa-check"></i> Export</button>
                                </span>
                            </div>
                        </form>
                        <hr>
                        <form target="_blank" action="<?= base_url('siswa/exportkelas') ?>" method="post">
                            <label for="">Pilih Opsi kelas</label>
                            <br>
                            <div class="input-group">
                                <select class="form-control" name="opsi">
                                    <?php foreach ($kelas->getresult() as $jur) { ?>
                                        <option value="<?php echo $jur->id_kelas; ?>"><?php echo $jur->nama_kelas; ?></option>
                                    <?php } ?>
                                </select>
                                <span class="input-group-append">
                                    <button class="btn btn-info btn-flat"><i class="fa fa-check"></i> Export</button>
                                </span>
                            </div>
                        </form>
                        <hr>
                        <form target="_blank" action="<?= base_url('siswa/exportstatus') ?>" method="post">
                            <label for="">Pilih Opsi Status</label>
                            <br>
                            <div class="input-group">
                                <select class="form-control" name="opsi">
                                    <option value="PENDING">PENDING</option>
                                    <option value="KONFIRMASI">KONFIRMASI</option>
                                </select>
                                <span class="input-group-append">
                                    <button class="btn btn-info btn-flat"><i class="fa fa-check"></i> Export</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Required datatable js -->
    <script src="<?= base_url(); ?>/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url(); ?>/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- sweetalert -->
    <script src="<?= base_url(); ?>/libs/bootstrap-sweetalert/sweetalert.min.js"></script>
    <!-- select2 -->
    <script src="<?= base_url(); ?>/libs/select2/select2.min.js"></script>
    <!-- timepicker -->
    <script src="<?= base_url(); ?>/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?= base_url(); ?>/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="<?= base_url(); ?>/libs/magnific-popup/jquery.magnific-popup.js"></script>
    <!-- CK Editor -->
    <script src="<?= base_url(); ?>/libs/ckeditor/ckeditor.js"></script>
    <!-- App js -->
    <script src="<?= base_url(); ?>/js/app.min.js"></script>
</body>

</html>