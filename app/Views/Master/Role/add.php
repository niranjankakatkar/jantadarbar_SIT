<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>FTS - भूमिका</title>
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
                                <h4 class="fs-18 fw-semibold m-0">भूमिका</h4>
                            </div>
                            
                        </div>

                        <!-- General Form -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                     <div class="card-body">
                                        <div class="row g-3">
                                        <div class="col-md-12">
                                            <?php echo form_open('/store_role', array('autocomplete' => 'off','class' => 'p-0 myForm')); ?>
                                                    <input type="hidden" name="id" value="<?= !empty($list['id']) ? $list['id'] : '' ?>">
                                                    <div class="mb-2 col-md-6">
                                                        <label for="name" class="form-label">भूमिकेचे नाव<span class="text-danger">*</span></label>
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="कृपया भूमिकेचे नाव प्रविष्ट करा" value="<?= $list['name'] ?? set_value('name'); ?>">
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('name'); ?>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                   
                                                    
                                                    
                                                </div>
                                                </div>
                                                
                                                <div class="row g-3">
                                                <div class="mb-2 col-md-4">
                                                    <button type="submit" class="btn btn-success">
                                                        <?= !empty($list['id']) ? 'Update' : 'Submit' ?>
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
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">भूमिका</h4>
                       </div>
                      <div class="modal-body row">
                          <div class="col-md-2" style="text-align: center;">
                            <i class="mdi mdi-check-circle" aria-hidden="true" style="font-size: 45px;color: #06a406;"></i>
                          </div>
                          <div class="col-md-10" style="font-size: 20px;margin-top: 18px;font-weight: 800;">
                              
                             <?php  $session = session(); error_reporting(0); echo $_SESSION['zonemsg'];?>
                          
                          </div>
                      
                      </div>
                      <div class="modal-footer">
                          
                       <a href="<?php echo base_url(); ?>ViewZone"><button type="button" class="btn btn-primary">Ok</button></a>
                       
                       
                      </div>
                    </div>
                  </div>
                </div>

                <?php echo view('Include/footer'); ?>    
                <script>
                    $( document ).ready(function(){
                        var homeunmsg='<?=$_SESSION['zonemsg'];?>';
                        if(homeunmsg!='')
                        {
                            $('#exampleModal').modal('show');
                        }
                    });
                </script>
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
</script>
                