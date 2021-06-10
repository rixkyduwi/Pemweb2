<?php error_reporting(E_ALL); 
ini_set("display_erors","On"); 
?>
<!DOCTYPE HTML>
<html>

<head>
    <?php require_once('./assets/requires/config.php');
        require_once('./assets/requires/header1.php'); 
        ?>
</head>

<body>
    <div class=row style="background-color:#ffffff;">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 col-sm-12" style="padding:lOpx;">
            <div id="TableInventory"></div>
        </div>
    </div>
    <div class="modal fade" id="InventoryModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class=" modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="modal-titlem">
                        <hl class="modal-title">Data Customers</h1>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="rove">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="message"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="form-group"> 
                                <label class="control-label">Customer Name :</label>
                                <input type="hidden" id="txtindex" value="0" class="form-control"> 
                                <input type=" text" id="txtnama" class="form-control" maxlength="100"> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-tg-6 col-md-6 cot-sm-12 cot-xs-12">
                            <div class="form-group"> 
                                <label class="control-label">Address</label>
                                <input type="text" id="txtaddr" class="form-control" maxlength="255"> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 cot-sm-12 col-xs-12">
                            <div class="form-group"> 
                                <label class="control-label">Phone :</label>
                                <input type="text" id="txtphone" class="form-control" maxlength="100"> 
                            </div>

                            <div class=" row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group"> 
                                        <label class="control-label">City</label>
                                        <input type="text" id="txtcity" class="form-control" maxlength="255"> 
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="btnSave">Simpan</button>
                            <button type="button" class="btn btn-danger" id="btnDelete">Hapus</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->

            </div>
        </div>
    </div>



</body>
<script src="<?php echo PATHINFO_FILENAME;?>/assets/scripts/js/ajaxcust.js"></script>

</html>