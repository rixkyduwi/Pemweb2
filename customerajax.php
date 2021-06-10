<?php
    error_reporting(E_ALL);
    ini_set("display_errors","On");
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../sweetalert/sweetalert.css">

<!-- JQuery and Bootstrap -->
<script src="../jQuery/jquery-3.5.1.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../sweetalert/sweetalert.min.js"></script>
   <?php
        define ('APPNAME','CUSTOMERS');
        define ('PATH','http://kelas4a.local');
    ?> 
</head>
<body>
                <div class=row style="background-color:#ffffff;">
                    <div class="col-sm-2" style="margin-left:50px;padding-top:10px;">
                           	<div class="form-group">
                              	<label class="control-label">&nbsp;</label>
                               	<button class="btn btn-primary form-control" id="btnAddNew">Add Customer</button>
                            </div>
                     </div>  
                </div>   


                    <div class=row style="background-color:#ffffff;">
       	                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 col-md-6" style="padding:10px;">
           	                <div id="TableCustomer"></div>
                        </div>
                    </div>

                    <div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog">
                    	<div class="modal-dialog" role="document">
                        	<div class="modal-content">
                            	
                                <div class="modal-header">
                                <h1 class="modal-title" id="h1-1"></h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                	<div class="row">
                                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    		<div id="message"></div>
                                        </div>
                                    </div>
                                	<div class="row">




            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  	<div class="form-group">
                         <label class="control-label">Customer ID :</label>
                         <input type="hidden" id="txtindex" value="new" class="form-control">
                        <input type="text" id="txtcustid" class="form-control" maxlength="100">
                    </div> 
            </div>



                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        	<div class="form-group">
                                                <label class="control-label">Customer Name :</label>
                                                <input type="text" id="txtnama" class="form-control" maxlength="100">
                                            </div> 
                                        </div>

                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        	<div class="form-group">
                                                <label class="control-label">Address</label>
                                                <input type="text" id="txtaddr" class="form-control" maxlength="255">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        	<div class="form-group">
                                                <label class="control-label">Phone :</label>
                                                <input type="text" id="txtphone" class="form-control" maxlength="100">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        	<div class="form-group">
                                                <label class="control-label">City</label>
                                                <input type="text" id="txtcity" class="form-control" maxlength="255">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                	<button type="button" class="btn btn-success" id="btnSave">Save</button>
                                    <button type="button" class="btn btn-danger" id="btnDelete">Delete</button>
                                	<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                       	</div><!-- /.modal-dialog -->
                    </div>
                
           

</body>
<script src="/assets/scripts/js/customer.js"></script>
</html>
