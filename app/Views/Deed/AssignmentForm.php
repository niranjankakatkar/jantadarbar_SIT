<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>Mudrank - Assignment Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta http-equiv="X-UA-Compatible" content="" />

    <?php echo view('Include/header'); ?>    
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Assignment Form</h4>
                            </div>
                            
                        </div>

                        <!-- General Form -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                     <div class="card-body">
                                        <div class="row g-3">
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Date of Execution</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>unexecuted</option>
                                                            <option>executed</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="assignor" class="form-label">Assignor</label>
                                                        <input type="text" id="assignor" name="assignor" class="form-control" placeholder="Please enter assignor name" onkeyup="serchdata(this.value);">
                                                    <div id="resultserach" class="seraching"></div>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="assignee" class="form-label">Assignee</label>
                                                        <input type="text" id="assignee" name="assignee" class="form-control" placeholder="Please enter assignee name" onkeyup="serchdataDev(this.value);">
                                                    <div id="resultserachDev" class="seraching"></div>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Consideration</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter consideration">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Cadastral Survey no</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter cadastral survey number">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Land Area</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter land area">
                                                    </div>
                                                    
                                                     <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Zone</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Select Zone</option>
                                                            <?php foreach($Zone as $zones){ ?>
                                                            <option value="<?=$zones->id;?>"><?=$zones->name;?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">BMC Assessment bill</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter BMC assessment bill">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">D. P. Report</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter D. P. Report">
                                                    </div>
                                                    
                                                   <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Permanent Resident Card Submitted or Not</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Indemnity Bond Regarding Tenancy is Given</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="example-select" class="form-label">Cess Category Certificate Submitted or Not</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Assignment of Residue unexpired of the term</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter assignment of residue unexpired of the term">
                                                    </div>
                                                    
                                                     <div class="mb-2">
                                                        <label for="example-textarea" class="form-label">Property Details</label>
                                                        <textarea class="form-control" placeholder="Please enter property details" id="example-textarea" rows="3" spellcheck="false"></textarea>
                                                    </div> 
                                                    
                                                    <div class="mb-2">
                                                        <label for="example-textarea" class="form-label">Existing Area of the Owner Tenant</label>
                                                        <textarea class="form-control" placeholder="Please enter existing area" id="example-textarea" rows="3" spellcheck="false"></textarea>
                                                    </div> 
                                                    
                                                </div>
                                                
                                                <div class="row g-3">
                                                 <div class="mb-2 col-md-4">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <button type="submit" class="btn btn-warning">Cancel</button>
                                                </div>
                                            
                                        </div>
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
            var table = 'tbl_assignor';
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
        $("#assignor").val(val);
        $("#resultserach").hide();
    }
    
    function serchdataDev(name)
    {
        if(name !='')
        {
            var table = 'tbl_assignee';
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
        $("#assignee").val(val);
        $("#resultserachDev").hide();
    }
</script>
