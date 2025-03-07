<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>FTS - कर्मचारी</title>
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
                                <h4 class="fs-18 fw-semibold m-0">कर्मचारी</h4>
                            </div>
                            
                        </div>

                        <!-- General Form -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                     <div class="card-body">
                                        <div class="row g-3">
                                        <div class="col-md-12">
                                            <?php echo form_open('/store_emp', array('autocomplete' => 'off','class' => 'p-0 myForm')); ?>
                                                    <div class="row g-3">
                                                    <div class="mb-2 col-md-4">
                                                        <label for="name" class="form-label">कर्मचाराचे नाव <span class="text-danger">*</span></label>
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="कृपया कर्मचाराचे नाव प्रविष्ट करा" value="<?= set_value('name'); ?>">
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('name'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
													<div class="mb-2 col-md-4">
                                                        <label for="phone_no" class="form-label">व्हॉट्सॲप नंबर<span class="text-danger">*</span></label>
                                                        <input type="text" id="phone_no" name="phone_no" class="form-control" placeholder="कृपया व्हॉट्सॲप नंबर प्रविष्ट करा" value="<?= set_value('phone_no'); ?>" maxlength="10" onInput="showUsername();">
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('phone_no'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
													<div class="mb-2 col-md-4">
                                                        <label for="username" class="form-label">युजर नेम<span class="text-danger">*</span></label>
                                                        <input type="text" id="username" name="username" class="form-control" placeholder="कृपया युजर नेम प्रविष्ट करा" value="<?= set_value('username'); ?>" maxlength="10" readonly>
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('username'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
													<div class="mb-2 col-md-4">
                                                        <label for="email" class="form-label">ई-मेल <span class="text-danger">*</span></label>
                                                        <input type="email" id="email" name="email" class="form-control" placeholder="कृपया ई-मेल प्रविष्ट करा" value="<?= set_value('name'); ?>">
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('email'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                    <div class="mb-2 col-md-4">
                                                        <label for="direction" class="form-label">दिशा निवडा <span class="text-danger">*</span></label>
                                                       <?php $direction = set_value('direction'); ?>
                                                        <select id="direction" name="direction" class="form-select">
                                                            <option value="">दिशा निवडा</option>
                                                            <option value="1" <?php if($direction ==1){echo 'selected';} ?>>दक्षिण</option>
                                                            <option value="2" <?php if($direction ==2){echo 'selected';} ?>>उत्तर</option>
                                                        </select>
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('direction'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                    <div class="mb-2 col-md-4">
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
                                                    <div class="mb-2 col-md-4">
                                                        <label for="designation_id" class="form-label">आधिकारी निवडा <span class="text-danger">*</span></label>
                                                       <?php $designation_id = set_value('designation_id'); ?>
                                                        <select id="designation_id" name="designation_id" class="form-select">
                                                            <option value="">आधिकारी निवडा</option>
															<?php foreach($desi_list as $dept){ ?>
                                                            <option value="<?=$dept['id'];?>" <?php if($designation_id ==$dept['id']){echo 'selected';} ?>><?=$dept['name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('designation_id'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                    <div class="mb-2 col-md-4">
                                                        <label for="vibhag_id" class="form-label">विभाग निवडा <span class="text-danger">*</span></label>
                                                       <?php $vibhag_id = set_value('vibhag_id'); ?>
                                                        <select id="vibhag_id" name="vibhag_id" class="form-select">
                                                            <option value="">विभाग निवडा</option>
															<?php foreach($vibhag_list as $dept){ ?>
                                                            <option value="<?=$dept['id'];?>" <?php if($vibhag_id ==$dept['id']){echo 'selected';} ?>><?=$dept['name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('vibhag_id'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                </div>
                                                
                                                <div class="row g-3">
                                                <div class="mb-2 col-md-4">
                                                    <button type="submit" class="btn btn-success">
                                                        Submit
                                                        </button>
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
    var control = new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(["name"]);
    }
google.setOnLoadCallback(onLoad);

function showUsername()
{
 var phoneNo=$("#phone_no").val();
 $("#username").val(phoneNo);
}
</script>
                