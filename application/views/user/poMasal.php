<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Administration</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    
</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <?php include('akunlogin.php') ?>
                <?php include('sidebar.php') ?>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Administration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>user/administration">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>PO Masal Berjalan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/listPOMasal">
                    <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h3 class="font-bold">PO Masal Berjalan</h3>
                                <span>Ada kanban</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/listPOMasalDone">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h3 class="font-bold">PO Masal Selesai</h3>
                                <span>Tidak ada di kanban</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar PO Masal Berjalan</h5>
                            <div class="ibox-tools">
                                <a class="btn btn-xs btn-info" href="<?php echo base_url();?>user/listInvoiceMassal" style="color:white;">
                                    <i class="fa fa-dedent"><span style="font-family: 'open sans'"><strong> INVOICE</strong></span></i>
                                </a>
                                <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/createPurchaseOrder">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH PO</strong></span></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <div class="ibox-tools">
                                <?php echo form_open_multipart('user/listPOMasal')?>
                                <label>Bulan</label>
                                <select class="form-group fom" name="bulanpilih">
                                    <option value="01,02,03,04,05,06,07,08,09,10,11,12">SEMUA</option>
                                    <option value="01" <?php if($bulanpilih=="01") echo " selected";?>>Januari</option>
                                    <option value="02" <?php if($bulanpilih=="02") echo " selected"?>>Februari</option>
                                    <option value="03" <?php if($bulanpilih=="03") echo " selected"?>>Maret</option>
                                    <option value="04" <?php if($bulanpilih=="04") echo " selected"?>>April</option>
                                    <option value="05" <?php if($bulanpilih=="05") echo " selected"?>>Mei</option>
                                    <option value="06" <?php if($bulanpilih=="06") echo " selected"?>>Juni</option>
                                    <option value="07" <?php if($bulanpilih=="07") echo " selected"?>>Juli</option>
                                    <option value="08" <?php if($bulanpilih=="08") echo " selected"?>>Agustus</option>
                                    <option value="09" <?php if($bulanpilih=="09") echo " selected"?>>September</option>
                                    <option value="10" <?php if($bulanpilih=="10") echo " selected"?>>Oktober</option>
                                    <option value="11" <?php if($bulanpilih=="11") echo " selected"?>>Nopember</option>
                                    <option value="12" <?php if($bulanpilih=="12") echo " selected"?>>Desember</option>
                                </select>
                                <label>Tahun</label>
                                <select class="form-group" name="tahunpilih">
                                    <option value="2018" <?php if($tahunpilih=="2018") echo " selected";?>>2018</option>
                                    <option value="2019" <?php if($tahunpilih=="2019") echo " selected";?>>2019</option>
                                    <option value="2020" <?php if($tahunpilih=="2020") echo " selected";?>>2020</option>
                                    <option value="2021" <?php if($tahunpilih=="2021") echo " selected";?>>2021</option>
                                    <option value="2022" <?php if($tahunpilih=="2022") echo " selected";?>>2022</option>
                                    <option value="2023" <?php if($tahunpilih=="2023") echo " selected";?>>2023</option>
                                </select>
                                <button type='submit' class="btn btn-xs btn-success">Pilih</button>
                                <?php echo form_close()?>  
                            </div>
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="20" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th data-hide="phone,tablet">Tanggal Masuk</th>
                                    <th>Nomor PO</th>
                                    <th>Nama Konsumen</th>
                                    <th data-hide="phone,tablet">Jenis Produk</th>
                                    <th data-hide="phone,tablet">Nama Produk</th>
                                    <th class="text-center" data-hide="phone,tablet">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listPO as $hasil) : ?>
                                <tr>
                                    <?php $tglmsk = new DateTime($hasil->tanggalMasuk);
                                    $tglmsk = $tglmsk->format("d M Y"); ?>
                                    <td><?php echo $tglmsk?></td>
                                    <td><?php echo $hasil->nomorPO?></td>
                                    <td><?php echo $hasil->namaCustomer?></td>
                                    <td><?php echo $hasil->jenisProduk?></td>
                                    <td><?php echo $hasil->namaProduk?></td>
                                    
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="<?php echo base_url()?>user/invoicePOMassal/<?php echo $hasil->nomorPO?>" class="btn btn-xs btn-primary">Lihat</a>
                                            <a href="<?php echo base_url()?>user/editPOMassal/<?php echo $hasil->nomorPO?>" class="btn btn-xs btn-warning">Edit</a>
                                            <a href="<?php echo base_url()?>user/hapusPOMassal/<?php echo $hasil->nomorPO?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus PO ini?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Surya Sumatera &copy; 2018
            </div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/js/plugins/footable/footable.all.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
</body>

</html>
