<?php 

    $var = $d[$i]->endDate;
    $statr = "";
    if((time()-(60*60*24)) < strtotime($var)) {
        $statr = "success";
    } else {
        $statr = "danger";
    } 
?>


<li class="<?php echo $statr?>-element" id="task1">

    <div class="row">
        <div class="col-lg-4">
            Customer<br>
            Sales<br>
            Jenis<br>
            Tgl Masuk<br>
            Tgl Selesai<br>
        </div>
        <div class="col-lg-8">
            :&nbsp&nbsp<b><?php echo substr($d[$i]->namaCustomer,0,10).' / '.$d[$i]->nomorPO ?></b><br>
            :&nbsp&nbsp<b><?php echo $d[$i]->nama ?></b><br>
            :&nbsp&nbsp<b><?php echo $d[$i]->jenisProduk?></b><br>
            :&nbsp&nbsp<b><?php echo $d[$i]->tanggal?></b><br>
            :&nbsp&nbsp<b><?php echo $d[$i]->tanggalSelesai?></b><br>
        </div>

    </div>  

    <div class="row">
        <br>
        <div class="col-lg-12">
            <span class="text-danger"><?php echo substr($d[$i]->keteranganDesain,0,30) ?> ...</span>
        </div>
        <br>
        <div class="col-lg-12">
            <button data-toggle="modal" data-target="#detailx2<?php echo $d[$i]->nomorFaktur ?>" class="btn btn-xs btn-default btn-block">Detail</button>
        </div>
        
    </div>

    

    <div class="modal inmodal fade" id="detailx2<?php echo $d[$i]->nomorFaktur ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Detail Proses Produksi</h3><br>

                    <span >NO PO : <b class="text-success"><?php echo $d[$i]->nomorPO ?></b> | NO FAKTUR : <b class="text-success"><?php echo $d[$i]->nomorFaktur ?></b> | TIPE : <b class="text-success"><?php echo $d[$i]->tipeOrder ?></b></span><br>

                </div>
                <div class="modal-body">

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1x2<?php echo $d[$i]->nomorFaktur ?>">Informasi Umum</a></li>
                            

                        </ul>
                        <div class="tab-content">
                            <div id="tab-1x2<?php echo $d[$i]->nomorFaktur ?>" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            Customer<br>
                                            Sales Person<br>
                                            
                                            
                                            Bahan<br>
                                            jenis
                                        </div>
                                        <div class="col-lg-8">
                                            :&nbsp&nbsp<b><?php echo $d[$i]->namaCustomer ?></b><br>
                                            :&nbsp&nbsp<b><?php echo $d[$i]->nama ?></b><br>
                                            
                                            
                                            :&nbsp&nbsp<b><?php echo $d[$i]->kadarBahan ?> %</b><br>
                                            :&nbsp&nbsp<b><?php echo $d[$i]->jenisProduk ?></b>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-right ">
                                            <b>Model</b>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php echo $d[$i]->model ?>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <b>Foto Refrensi</b><br><br>
                                            <img src="<?php echo base_url('uploads/gambarProduk/'.$d[$i]->kodeGambar.'-cust.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto 3D Model</b><br><br>
                                            
                                            <img src="<?php echo base_url('uploads/gambarDesain/'.$d[$i]->kodeGambar.'-d1.jpg')?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                            
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <b>Foto PIC</b><br><br>
                                            <img src="<?php echo base_url()?>"  class="img-responsive" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/noimage2.png')?>';" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2x2?php echo $d[$i]->nomorFaktur ?>" class="tab-pane">
                                <div class="panel-body">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Proses</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Sales</td>
                                                <td class="text-center"><?php echo $d[$i]->tanggal?></td>
                                                <td class="text-center"><label class="label label-xs label-primary">Diterima</label></td>

                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>
                    
                    
                
               
                </div>

                <div class="modal-footer">
                    <a href="<?php echo base_url('user/invoicePO/'.$d[$i]->nomorPO) ?>" type="button" class="btn btn-default btn-outline ">Detail PO</a>
                    <a href="<?php echo base_url('user/invoice/'.$d[$i]->nomorFaktur) ?>" type="button" class="btn btn-default btn-outline ">Detail SPK</a>
                    <button type="button" class="btn btn-danger btn-outline">Reject</button>
                </div>
            </div>
        </div>
    </div>
    
    
</li>





