<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>Mudrank - Conveyance Form</title>
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
                                <h4 class="fs-18 fw-semibold m-0">Conveyance Form</h4>
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
                                                        <label for="simpleinput" class="form-label">Vendor</label>
                                                        <input type="text" id="vendor" name="vendor" class="form-control" placeholder="Please enter vendor name">
                                                        <!--<div id="resultserach" class="seraching"></div>-->
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Purchaser</label>
                                                        <input type="text" id="purchaser" name="purchaser" class="form-control" placeholder="Please enter purchaser name">
                                                        <!--<div id="resultserachDev" class="seraching"></div>-->
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
                                                        <label for="simpleinput" class="form-label">Property Area</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter property area">
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
                                                        <label for="simpleinput" class="form-label">Rate (per sq. mtrs.)</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter rate">
                                                    </div>
                                                       
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Land Rate</label>
                                                        <input type="number" id="simpleinput" class="form-control" placeholder="Please enter land rate">
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Residential Rate</label>
                                                        <input type="number" id="simpleinput" class="form-control" placeholder="Please enter residential rate">
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Office Rate</label>
                                                        <input type="number" id="simpleinput" class="form-control" placeholder="Please enter office rate">
                                                    </div>
                                                    
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Shop/Commercial Rate</label>
                                                        <input type="number" id="simpleinput" class="form-control" placeholder="Please enter shop commercial ratio">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Residential Rate BMC Assessment Bill 1961-62</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter shop residential rate">
                                                    </div>
                                                    
                                                    <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Shop Rate BMC Assessment Bill 1961-62</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter shop rate">
                                                    </div>
                                                    
                                                     <div class="mb-2 col-md-4">
                                                        <label for="simpleinput" class="form-label">Construction Cost</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Please enter construction cost">
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
                                                    
                                                     <div class="mb-2">
                                                        <label for="example-textarea" class="form-label">Document Description</label>
                                                        <textarea class="form-control" placeholder="Please enter document description" id="example-textarea" rows="3" spellcheck="false"></textarea>
                                                    </div> 
                                                    
                                                    <div class="mb-2">
                                                        <label for="example-textarea" class="form-label">Property Details</label>
                                                        <textarea class="form-control" placeholder="Please enter property details" id="example-textarea" rows="3" spellcheck="false"></textarea>
                                                    </div> 
                                                    
                                                </div>
                                                
                                                <div class="row g-3">
                                                <div class="mb-2 col-md-4">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <?php echo view('Include/footer'); ?>    