
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <!-- Tabbable Widget -->
               <div class="panel panel-default curriculum open paper-shadow" data-z="0.5">   
                   <div class="tab-content">
                       
                     
                            <div id="account" class="tab-pane active">
                                
                                  <div class="panel-heading">
                           <h5 class="text-subhead">Payment details</h5>
                        <h5 class="text-subhead">You would like to pay for <?php echo ($course->name); ?></h5>
                        <h5 class="text-subhead">Reference number : <?php echo ($order_ref); ?></h5>
                    </div>
                                    
                                   <?php 
                                   $attributes = array('class' => 'form-horizontal');
echo form_open('', $attributes); 
                                   ?>
                                    
                                 

                                    
                                <input type="hidden" id="order_ref" name="order_ref" value="<?php echo ($order_ref); ?>" />
                                <input type="hidden" id="course_name" name="course_name" value="<?php echo ($course->name); ?>" />

<div class="form-group">
                                        <div class="col-md-offset-2 col-md-6">
                                            <div class="radio radio-success">
                                                <input name="bank_info" id="EFT" value="EFT" type="radio" checked="checked">
                                             
                                                
                                                <label for="EFT">Pay by EFT</label>
                                            </div>
                                        </div>
    <div class="col-md-offset-2 col-md-6">
                                            <div class="radio radio-success">
                                                 <input name="bank_info" id="bank_deposit" value="bank_deposit" type="radio">
                                             
                                            
                                                <label for="bank_deposit">Pay by BANK DEPOSIT</label>
                                            </div>
                                        </div>
                                    </div>

                                    
                                   
                                    
                                   
                                   
                                   
                                    <div class="form-group margin-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="submit" class="btn btn-primary paper-shadow relative confirm" data-z="0.5" data-hover-z="1" data-animated>Confirm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


</form></div>

                    <!-- // END Tabbable Widget -->
                 
                    <br/>
                    <br/>
                </div>
                
            </div>
        </div>
    </div>
    