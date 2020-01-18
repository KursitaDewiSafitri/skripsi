<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Footable CSS -->
    <link href="<?php echo base_url().'assets/node_modules/footable/css/footable.core.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/node_modules/bootstrap-select/bootstrap-select.min.css'?>" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/dist/css/style.min.css'?>" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url().'assets/dist/css/pages/footable-page.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/node_modules/sweetalert/sweetalert.css'?>" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fixed-layout skin-green-dark mini-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url().'assets/images/logo-icon.png'?>" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url().'assets/images/logo-light-icon.png'?>" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url().'assets/images/logo-text.png'?>" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url().'assets/images/logo-light-text.png'?>" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/images/users/1.jpg'?>" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
         $this->load->view('view_sidebar');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Footable</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Footable</li>
                            </ol>
                            <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Data Hama dan Penyakit</h4>
                                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Tambah"><span class="fa fa-plus"></span> Tambah Data</a></div>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="mydata" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama Hama dan Penyakit</th>
                                                <th>Foto</th>
                                                <th style="text-align: right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tampil_data">
                                            
                                        </tbody>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- MODAL ADD -->
                <form id="form_tambah" type="POST" enctype="multipart/form-data">
                <div class="modal fade" id="Modal_Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penyakit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="pesan-error-tmbh" class="alert alert-danger" hidden></div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">ID</label>
                                <div class="col-md-10">
                                <input type="text" name="tambah_id_hamapenyakit" id="tambah_id_hamapenyakit" class="form-control" placeholder="XXX-xxx">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-10">
                                <input type="text" name="tambah_nama_hamapenyakit" id="tambah_nama_hamapenyakit" class="form-control" placeholder="Masukkan nama disiniiii....disiniii....disiniiii...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                <input type="file" name="tambah_foto_hamapenyakit" id="tambah_foto_hamapenyakit" class="form-control">
                                </div>
                            </div>    
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="button" type="submit" id="btn_simpan" class="btn btn-primary">Simpan</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>
                <!--END MODAL ADD-->
                 <!-- MODAL EDIT -->
                <form>
                    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Penyakit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">ID</label>
                                    <div class="col-md-10">
                                    <input type="text" name="edit_id" id="edit_id" class="form-control" placeholder="Ganti ID-nya">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                    <input type="text" name="edit_nama" id="edit_nama" class="form-control" placeholder="Ubah Namanya">
                                    </div>
                                </div>
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </form>
                <!--END MODAL EDIT-->
        
                <!--MODAL DELETE-->
                <form>
                    <div class="modal fade" id="Modal_Hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <strong>Apakah kamu yakin?</strong>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_hapus" id="id_hapus" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="button" type="submit" id="btn_hapus" class="btn btn-primary">Ya</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </form>
                <!--END MODAL DELETE-->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/node_modules/jquery/jquery-3.2.1.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'assets/node_modules/popper/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/node_modules/bootstrap/dist/js/bootstrap.min.js'?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/perfect-scrollbar.jquery.min.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'assets/dist/js/waves.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'assets/dist/js/sidebarmenu.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/custom.min.js'?>"></script>
    <!-- Footable -->
    <script src="<?php echo base_url().'assets/node_modules/footable/js/footable.all.min.js'?>"></script>
    <!--FooTable init-->
    <script src="<?php echo base_url().'assets/dist/js/pages/footable-init.js'?>"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url().'assets/node_modules/sweetalert/sweetalert.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/node_modules/sweetalert/jquery.sweet-alert.custom.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            tampil_data();

            $('#hamapenyakit').footable();

            function tampil_data(){
                $.ajax({
                    type    : 'ajax',
                    url     : '<?php echo site_url('Hamapenyakit/product_data'); ?>',
                    async   : true,
                    dataType: 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+data[i].id_hamapenyakit+'</td>'+
                                    '<td>'+data[i].nama_hamapenyakit+'</td>'+
                                    '<td><img src=<?php echo base_url('assets/gambar/'); ?>'+data[i].foto+' height="100"></td>'+
                                    '<td style="text-align:right;">'+
                                        '<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Edit" class="btn btn-info btn-sm item_edit" data-product_code="'+data[i].id+'" data-product_name="'+data[i].nama+'" data-price="'+data[i].foto+'">Edit</a>'+' '+
                                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-toggle="modal" data-target="#Modal_Hapus" data-product_code="'+data[i].id+'">Hapus</a>'+
                                    '</td>'+
                                    '</tr>';
                        }
                        $('#tampil_data').html(html);
                    },
                    error   : function(jqXHR, textStatus, errorThrown){
                        alert('Gagal ambil data');
                    }
                });
            }

            $('#btn_simpan').on('click',function(){
                let data = new FormData(document.getElementById("form_tambah"));
                data.append('id_hamapenyakit',$('#tambah_id_hamapenyakit').val());
                data.append('nama_hamapenyakit',$('#tambah_nama_hamapenyakit').val());
                data.append('foto',$('#tambah_foto_hamapenyakit').get(0).files[0]);
                $.ajax({
                    type    :"POST",
                    url     :"<?php echo base_url('Hamapenyakit/save');?>",
                    //dataType:"json",
                    contentType : false,
                    processData : false,
                    dataType    : 'JSON',
                    data    :data,
                    success : function(result){
                      if (result.status !== true) {
                        let p = document.getElementById('pesan-error-tmbh');
                        
                        $('#pesan-error-tmbh').html(result.pesan);
                        p.removeAttribute('hidden');
                        
                        //alert(result.status);
                      } else {
                        $('[name="tambah_id_hamapenyakit"]').val("");
                        $('[name="tambah_nama_hamapenyakit"]').val("");
                        $('[name="tambah_foto_hamapenyakit"]').val("");
                        $('#Modal_Tambah').modal('hide');
                        tampil_data();
                        alert(result.status);
                      }
                        
                    },
                    error   : function(jqXHR, textStatus, errorThrown){
                        alert('Gagal menyimpan data');
                    }
                });
                
            });
        });
    </script>

</body>

</html>