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
                            <strong>PO Trading</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar PO Trading</h5>
                            <div class="ibox-tools">
                                <!-- <a class="btn btn-xs btn-default" href="<?php echo base_url();?>user/trackPO" style="color:black;">
                                    <i class="fa fa-search"><span style="font-family: 'open sans'"><strong> TRACK PO</strong></span></i>
                                </a> -->
                                <a class="btn btn-xs btn-primary" href="<?php echo base_url();?>user/catalogue">
                                    <i class="fa fa-pencil"><span style="font-family: 'open sans'"><strong> TAMBAH PO</strong></span></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                            <div class="table-responsive">
                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th data-hide="phone,tablet">Tanggal Masuk</th>
                                    <th>Nomor PO</th>
                                    <th>Nama Konsumen</th>
                                    <th>Total Harga</th>
                                    <th class="text-center">Action</th>
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
                                    <td>Rp. <?php echo number_format($hasil->totalHarga,2,".","."); ?></td>
                                    
                                    <td class="text-center">
                                        <div class="btn-group">
                                        <?=anchor('user/invoicePOTrading/' . $hasil->nomorPO, 'Lihat', [
                                          'class' => 'btn btn-primary btn-xs',
                                          'role'  => 'button'
                                         ])?>
                                        <?=anchor('user/hapusPOTrading/' . $hasil->nomorPO, 'Hapus', [
                                          'class' => 'btn btn-danger btn-xs',
                                          'role'  => 'button',
                                          'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                        ])?>
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
