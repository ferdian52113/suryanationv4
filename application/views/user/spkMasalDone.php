<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surya Sumatera | Adminstrasi</title>

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
                            <strong>Surat Perintah Kerja</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/listSPKMasal">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h3 class="font-bold">SPK Masal Berjalan</h3>
                                <span>Ada kanban</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url();?>user/listSPKMasalDone">
                    <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h3 class="font-bold">SPK Masal Selesai</h3>
                                <span>Tidak ada di kanban</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Daftar SPK Selesai</h5>
                                </div>
                                <div class="col-lg-6 text-right">
                                </div>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <div class="ibox-tools">
                                <?php echo form_open_multipart('user/listSPKMasalDone')?>
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
                                    <th class="text-center">Faktur</th>
                                    
                                    <th>Konsumen</th>
                                    <th data-hide="phone,tablet">Produk</th>
                                    <th class="text-center">Kadar</th>
                                    
                                    
                                    <th class="text-center" data-hide="phone,tablet">Status</th>
                                    
                                    
                                    <th class="text-center" data-hide="phone,tablet">Action</th>
                                    <th class="text-center" data-hide="phone,tablet">Keterangan </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listSPK as $hasil) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $hasil->nomorFaktur?></td>
                                  
                                    <td><?php echo $hasil->namaCustomer?></td>
                                    <td ><?php echo $hasil->namaProduk?></td>
                                    <td class="text-center" ><?php echo $hasil->kadarBahan?> %</td>
                                    
                                    <td class="text-center">
                                        <?php

                                        $jadwal = 0;
                                        for ($g=0; $g < count($cekjadwal) ; $g++) { 
                                            if($cekjadwal[$g]->idSPK == $hasil->idSPK) {
                                                $jadwal++;
                                            }
                                        } 

                                        ?>

                                        <?php if($jadwal == 0) { ?>

                                            <a class="btn btn-info btn-blocked btn-xs" href="<?php base_url();?>tambahJadwalMassal/<?php echo $hasil->nomorFaktur;?>">Tambahkan Jadwal</a>

                                        <?php } else if($hasil->statusSPK=='Done') { ?>
                                            <h3><span class="label label-default">Selesai Produksi</span></h3>

                                        <?php } else {?>

                                            <a href="<?php base_url();?>kanbanMassal" class="btn btn-default btn-xs" >Masuk Ke Kanban</a>

                                        <?php } ?>

                                    </td>
                                   
                                   
                                    
                                    <td class="text-center">

                                        <a href="<?php echo base_url('user/invoiceSPKMassal/' . $hasil->nomorFaktur) ?>" class="btn btn-xs btn-primary" >Lihat</a>
                                        
                                        <!-- <a href="<?php echo base_url('user/editSPK/' .$hasil->nomorFaktur) ?>" class="btn btn-xs btn-warning" >Edit</a> -->

                                        
                                        <!-- <?=anchor('user/hapusSPK/' . $hasil->idSPK, 'Hapus', [
                                          'class' => 'btn btn-danger btn-xs',
                                          'role'  => 'button',
                                          'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                        ])?> -->
                                    </td>
                                    <td class="text-center">
                                        

                                        <?php

                                        $jadwal = 0;
                                        for ($g=0; $g < count($cekjadwal) ; $g++) { 
                                            if($cekjadwal[$g]->idSPK == $hasil->idSPK) {
                                                $jadwal++;
                                            }
                                        } 

                                        ?>

                                        <?php if ($jadwal == 0) { ?>
                                            <span class="fa fa-calendar text-muted" ></span>
                                        <?php } ?>

                                        <?php if ($jadwal > 0) { ?>

                                            <?php if($hasil->statusJadwal !== 'Disetujui') { ?>
                                                <span class="fa fa-calendar text-warning" ></span>
                                            <?php } else { ?>
                                                <span class="fa fa-calendar text-success" ></span>
                                            <?php } ?>

                                        <?php } ?>

                                     <!--  -->

                                        <?php

                                        $sub = 0;
                                        for ($g=0; $g < count($ceksub) ; $g++) { 
                                            if($ceksub[$g]->idSPK == $hasil->idSPK) {
                                                $sub++;
                                            }
                                        } 

                                        ?>
                                        
                                        <?php if($sub == 0) { ?>
                                    
                                            <span class="fa fa-sitemap text-muted" ></span>
                                    
                                        <?php } else {?>

                                            <span class="fa fa-sitemap text-success" ></span>

                                        <?php } ?>

                                   


                                        
                                        <?php if($hasil->statusPersetujuan == 'Belum Disetujui') { ?>
                                            <span class="fa fa-check-square-o text-muted" ></span>
                                        <?php } ?>

                                        <?php if($hasil->statusPersetujuan == 'Disetujui') { ?>
                                            <span class="fa fa-check-square-o text-success" ></span>
                                        <?php } ?>
                                            
                                        
                                        
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="desain<?php echo $hasil->nomorFaktur;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Persetujuan Desain - No. Faktur #<?php echo $hasil->nomorFaktur ?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php if($hasil->statusDesain !== 'Proses Desain') {?>
                                            <div class="row">
                                               <div class="col-lg-4">
                                                   <img src="<?php echo base_url('uploads/gambarDesain/'.$hasil->kodeGambar.'-d1.jpg')?>" class="img img-responsive">
                                               </div>
                                               <div class="col-lg-4">
                                                   <img src="<?php echo base_url('uploads/gambarDesain/'.$hasil->kodeGambar.'-d2.jpg')?>" class="img img-responsive">
                                               </div>
                                               <div class="col-lg-4">
                                                   <img src="<?php echo base_url('uploads/gambarDesain/'.$hasil->kodeGambar.'-d3.jpg')?>" class="img img-responsive">
                                               </div>
                                           </div>
                                        <?php } else { ?>

                                        <?php } ?>
                                       
                                      </div>
                                      <div class="modal-footer">
                                        <?php if($hasil->statusDesain == 'Disetujui' ) { ?>

                                            <a disabled class="btn btn-primary" type="button">Telah Disetuju</a>
                                            
                                        <?php } else {?>
                                            <a href="<?php base_url();?>setujuDesain/<?php echo $hasil->nomorFaktur;?>" class="btn btn-primary" type="button">Setuju</a>
                                        <?php } ?>
                                        
                                        <a href="<?php base_url();?>tidakSetujuDesain/<?php echo $hasil->nomorFaktur;?>" class="btn btn-danger" type="button">Tidak Setuju</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- End of Modal -->

                                <!-- End of Modal -->
                                <!-- Modal -->
                                
                                <!-- End of Modal -->
                                <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="10">
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
                <strong>Copyright</strong> Surya Sumatera &copy; <?php echo date('Y')?>
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

            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="row"><br><div class="col-lg-4"><input class="form-control" type="number" placeholder="berat" required name="berat[]"/></div><div class="col-lg-4"><input class="form-control" placeholder="jumlah" required type="number" name="jumlah[]"/></div><a href="#" class="btn btn-danger remove_field">Hapus</a></div>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })

        });

    </script>
    <script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        
</body>

</html>
