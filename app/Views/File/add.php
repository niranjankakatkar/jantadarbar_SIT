<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>FTS - फाईल</title>
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
                                <h4 class="fs-18 fw-semibold m-0">फाईल</h4>
                            </div>
                        </div>

                        <!-- General Form -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                     <div class="card-body">
                                         
                                        <?php echo form_open('/store_file', array('autocomplete' => 'off','class' => 'p-0 myForm')); ?>
                                        
                                            <div class="row g-3">
                                                
                                                <div class="mb-2 col-md-6">
                                                        <label for="department_id" class="form-label">शाखा निवडा <span class="text-danger">*</span></label>
                                                       <?php $department_id = set_value('department_id'); ?>
                                                        <select id="department_id" name="department_id" class="form-select">
                                                            <option value="">शाखा निवडा</option>
															<?php foreach($dept_list as $dept){ ?>
                                                            <option value="<?=$dept['id'];?>" <?php if($department_id ==$dept['id']){echo 'selected';} ?>><?=$dept['name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('department_id'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                    
                                                <div class="mb-2 col-md-6">
                                                    <label for="name" class="form-label">फाईल नंबर <span class="text-danger">*</span></label>
                                                    <input type="text" id="file_no" name="file_no" class="form-control" placeholder="कृपया फाईल नंबर प्रविष्ट करा" value="<?= set_value('file_no'); ?>">
                                                    <?php  if(isset($validation)) {?>
                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                        <?= $error = $validation->getError('file_no'); ?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                
                                                <div class="mb-1 col-md-6">
                                                    <label for="name" class="form-label">फाईलचे नाव <span class="text-danger">*</span></label>
                                                    <input type="text" id="file_name" name="file_name" class="form-control" placeholder="कृपया फाईलचे नाव प्रविष्ट करा" value="<?= set_value('file_name'); ?>">
                                                    <?php  if(isset($validation)) {?>
                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                        <?= $error = $validation->getError('file_name'); ?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                
                                                <div class="mb-1 col-md-6">
                                                    <label for="name" class="form-label">इनवॉर्ड नंबर <span class="text-danger">*</span></label>
                                                    <input type="text" id="inward_no" name="inward_no" class="form-control" placeholder="कृपया इनवॉर्ड नंबर प्रविष्ट करा" value="<?= set_value('inward_no'); ?>">
                                                    <?php  if(isset($validation)) {?>
                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                        <?= $error = $validation->getError('inward_no'); ?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                
                                                <div class="mb-1 col-md-6">
                                                    <label for="name" class="form-label">कव्हर पेज फोटो <span class="text-danger">*</span></label>
                                                    <input type="file" id="cover_page_photo" name="cover_page_photo" class="form-control" placeholder="" value="<?= set_value('cover_page'); ?>">
                                                    <?php  if(isset($validation)) {?>
                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                        <?= $error = $validation->getError('cover_page_photo'); ?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                    
                                            </div>
                                                
                                            <div class="row g-3 mt-1">
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
google.load("elements", "1", {
    packages: "transliteration"
});
function onLoad() {
    var options = {
        sourceLanguage:
            google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:
            google.elements.transliteration.LanguageCode.MARATHI,
        transliterationEnabled: true,
    };

        // Create an instance on TransliterationControl with the required  
        var contro1 = new google.elements.transliteration.TransliterationControl(options);
        var contro2 = new google.elements.transliteration.TransliterationControl(options);
        var contro3 = new google.elements.transliteration.TransliterationControl(options);
        
        contro1.makeTransliteratable(["file_no"]);
        contro2.makeTransliteratable(["file_name"]);
        contro3.makeTransliteratable(["inward_no"]);
    }
google.setOnLoadCallback(onLoad);
</script>
                
               
