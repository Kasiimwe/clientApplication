<div id="<?php echo $personid ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-danger close" data-dismiss="modal"> &times;</button>
                    <h4 class="modal-title">Order Form</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="process.php">
                        <div class="col-sm-8">
                            <p><h5><b>Product Image: </b></h5><img src="staff/user_images/<?php echo $personrow['productImage']; ?>" class="img-rounded" width="150" height="100" /></p>

                            <p><b>Product Name: </b><?php echo $personrow['productName']; ?> <b> Product Type: </b><?php echo $personrow['productType']; ?></p>
                            </p>
                            <p><b>Product Price: </b><?php echo $personrow['productPrice']; ?></p>
                            <hr/>



                                            <!--<p id="form_desc" value="" style="margin-top:40px;color:green;"></p>-->
                            <input type="hidden" name="userId" value="<?php echo $uID; ?>"/>
                            <input type="hidden" id="form_pID" name="pID" value="<?php echo $personid; ?>"/>
                            <input type="text" name="custAddress" class="form-control" placeholder="Your Postal Address" required /><br/>
                            <label style="color:green;" ><u>MODE OF PAYMENT</u></label><br/>
                            <label style="color:green;" >MobileMoney</label>
                            <input type="radio" name="paymentMode" id="paymentMode" value="MobileMoney" onclick="paymentnfo();" required />
                            <br/><label style="color:green;">Account Number</label>
                            <input type="radio" name="paymentMode" id="paymentMode" value="AccountNo" onclick="paymentnfo();" required />
                        </div>


                        <div class="modal-footer">
                            <button type="submit" style="margin-bottom:10px;margin-right:10px;margin-top:300px;float:right;padding:10px 25px;" class="btn btn-primary" name="submitOrder">
                                Submit Order 
                            </button>
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close Form</button>-->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>