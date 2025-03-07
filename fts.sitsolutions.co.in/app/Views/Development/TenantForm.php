<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>Mudrank - Tenant Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta http-equiv="X-UA-Compatible" content="" />

        <?php echo view('Include/header'); ?>  
        <style>
          
        </style>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Tenant Form</h4>
                            </div>
                        </div>

                        <!-- General Form -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                     <div class="card-body">
                                         
                                        <?php echo form_open('/create_assignor', array('autocomplete' => 'off','class' => 'p-0 myForm')); ?>
                                        <div class="row g-3">
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Aggreement Execution</label>
                                                        <select class="form-select" id="is_execution" name="is_execution">
                                                            <option>Unexecuted</option>
                                                            <option>Executed</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Execution Date (if Executed)</label>
                                                        <input type="date" id="execution_date" name="execution_date" class="form-control">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="owner" class="form-label">Owner</label>
                                                        <input type="text" id="owner" name="owner" class="form-control" placeholder="Please enter owner name" onkeyup="serchdata(this.value);">
                                                        <div id="resultserach" class="seraching"></div>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Developer</label>
                                                        <input type="text" id="developer" name="developer" class="form-control" placeholder="Please enter developer name"  onkeyup="serchdataDev(this.value);">
                                                        <div id="resultserachDev" class="seraching"></div>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Consideration</label>
                                                        <input type="text" id="consideration" name="consideration" class="form-control" placeholder="Please enter consideration">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">C. S. No. (Cadastral Survey Number)</label>
                                                        <input type="text" id="cs_no" name="cs_no" class="form-control" placeholder="Please enter cadastral survey number">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Property Area (sq. mtrs.)</label>
                                                        <input type="text" id="property_area" name="property_area" class="form-control" placeholder="Please enter property area">
                                                    </div>
                                                    
                                                     <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Zone</label>
                                                        <select class="form-select" id="zone" name="zone">
                                                            <option>Select Zone</option>
                                                            <?php foreach($Zone as $zones){ ?>
                                                            <option value="<?=$zones->id;?>"><?=$zones->name;?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Rate (per sq. mtrs.)</label>
                                                        <input type="number" id="rate" name="rate" class="form-control" placeholder="Please enter rate">
                                                    </div>
                                                       
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Land Rate</label>
                                                        <input type="number" id="land_rate" name="land_rate" class="form-control" placeholder="Please enter land rate">
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Residential Rate</label>
                                                        <input type="number" id="residential_rate" name="residential_rate" class="form-control" placeholder="Please enter residential rate">
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Construction Rate</label>
                                                        <input type="number" id="construction_rate" name="construction_rate" class="form-control" placeholder="Please enter construction rate">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Basic Ratio (LC/RC)</label>
                                                        <input type="number" id="basic_ratio" name="basic_ratio" class="form-control" placeholder="Please enter basic ratio">
                                                    </div> 
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Permanent Resident Card Submitted or Not</label>
                                                        <select class="form-select" id="pr_card" name="pr_card">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Indemnity Bond Regarding Tenancy is Given</label>
                                                        <select class="form-select" id="indemnity_bond" name="indemnity_bond">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Cess Category Certificate Submitted or Not</label>
                                                        <select class="form-select" id="cess_category" name="cess_category">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Development Proposal</label>
                                                        <input type="text" id="development_proposal" name="development_proposal" class="form-control" placeholder="Please enter development proposal">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Corner Plot</label>
                                                        <select class="form-select" id="corner_plot" name="corner_plot">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Area given to Tenant</label>
                                                        <input type="text" id="area_given_to_tenant" name="area_given_to_tenant" class="form-control" placeholder="Please enter area">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Area given to Owner</label>
                                                        <input type="text" id="area_given_to_owner" name="area_given_to_owner" class="form-control" placeholder="Please enter area">
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Total Area given to Tenant & Owner</label>
                                                        <input type="text" id="total_area_tenant_owner" name="total_area_tenant_owner" class="form-control" placeholder="Please enter total area">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Car Parking allotted to the</label>
                                                        <select class="form-select" id="car_parking_allocated_to" name="car_parking_allocated_to">
                                                            <option>Members</option>
                                                            <option>Owner</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Monthly Compensation</label>
                                                        <input type="text" id="monthly_compensation" name="monthly_compensation" class="form-control" placeholder="Please enter monthly compensation">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Corpus / Hardship</label>
                                                        <input type="text" id="corpus" name="corpus" class="form-control" placeholder="Please enter corpus">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Rent / Displacement</label>
                                                        <input type="text" id="rent" name="rent" class="form-control" placeholder="Please enter rent">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Shifting</label>
                                                        <input type="text" id="shifting" name="shifting" class="form-control" placeholder="Please enter shifting">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Brokerage</label>
                                                        <input type="text" id="brokerage" name="brokerage" class="form-control" placeholder="Please enter brokerage">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Additional Area above fungible</label>
                                                        <input type="text" id="fungible_additional_area" name="fungible_additional_area" class="form-control" placeholder="Please enter additional area">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Development Charges</label>
                                                        <input type="text" id="development_charges" name="development_charges" class="form-control" placeholder="Please enter development charges">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Infrastructure Charges</label>
                                                        <input type="text" id="infrastructure_charges" name="infrastructure_charges" class="form-control" placeholder="Please enter infrastructure charges">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Security Deposit</label>
                                                        <input type="text" id="security_deposite" name="security_deposite" class="form-control" placeholder="Please enter security deposit">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Bank Guarantee</label>
                                                        <input type="text" id="bank_guarantee" name="bank_guarantee" class="form-control" placeholder="Please enter bank guarantee">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Completion Period</label>
                                                        <input type="text" id="completion_period" name="completion_period" class="form-control" placeholder="Please enter completion period">
                                                    </div>
                                                    
                                                    <div class="mb-2">
                                                        <label for="example-textarea" class="form-label">Document Description</label>
                                                        <textarea class="form-control" placeholder="Please enter document description" id="document_description" name="document_description" rows="3" spellcheck="false"></textarea>
                                                    </div> 
                                                    
                                                    <div class="mb-2">
                                                        <label for="example-textarea" class="form-label">Property Details</label>
                                                        <textarea class="form-control" placeholder="Please enter property details" id="property_details" name="property_details" rows="3" spellcheck="false"></textarea>
                                                    </div> 
                                                    
                                                    <div class="mb-2">
                                                        <label for="example-textarea" class="form-label">Existing Area of the Owner Tenant</label>
                                                        <textarea class="form-control" placeholder="Please enter existing area" id="existing_area_of_owner_tenant" name="existing_area_of_owner_tenant" rows="3" spellcheck="false"></textarea>
                                                    </div> 
                                                    
                                                </div>
                                                
                                            <div class="row g-3">
                                                <div class="mb-2 col-md-4">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <button type="submit" class="btn btn-warning">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <?php echo view('Include/footer'); ?> 
<script>
    function serchdata(name)
    {
        if(name !='')
        {
            var table = 'tbl_owner';
            var field = 'name';
            var searchType = '';
            $.ajax({
            url:"<?php echo base_url(); ?>suggestionsList",
            method:"POST",
            data:{name:name,table:table,field:field,searchType:searchType},
            success:function(result)
            {
                $("#resultserach").show();
                $("#resultserach").html(result);
            }
            });
        }else
        {
            $("#resultserach").css('display','none');
        }
    }
    function searchadd(val,id){
        $("#userId").val(id);
        $("#owner").val(val);
        $("#resultserach").hide();
    }
    
    function serchdataDev(name)
    {
        if(name !='')
        {
            var table = 'tbl_developer';
            var field = 'name';
            var searchType = 'Dev';
            $.ajax({
            url:"<?php echo base_url(); ?>suggestionsList",
            method:"POST",
            data:{name:name,table:table,field:field,searchType:searchType},
            success:function(result)
            {
                $("#resultserachDev").show();
                $("#resultserachDev").html(result);
            }
            });
        }else
        {
            $("#resultserachDev").css('display','none');
        }
    }
    function searchaddDev(val,id){
        $("#userId").val(id);
        $("#developer").val(val);
        $("#resultserachDev").hide();
    }
</script>
               
