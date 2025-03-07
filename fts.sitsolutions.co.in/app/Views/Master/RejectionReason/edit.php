<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>FTS - नकार कारण</title>
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
                                <h4 class="fs-18 fw-semibold m-0">नकार कारण</h4>
                            </div>
                            
                        </div>

                        <!-- General Form -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                     <div class="card-body">
                                        <div class="row g-3">
                                        <div class="col-md-12">
                                            <?php echo form_open('/store_rejection_reason', array('autocomplete' => 'off','class' => 'p-0 myForm')); ?>
                                                    <input type="hidden" name="id" value="<?= !empty($list['id']) ? $list['id'] : '' ?>">
                                                    <div class="mb-2 col-md-6">
                                                        <label for="name" class="form-label">शाखेचे नाव <span class="text-danger">*</span></label>
                                                        <input type="text" id="reason" name="reason" class="form-control" placeholder="कृपया नकाराचे कारण प्रविष्ट करा" value="<?= $list['reason'] ?? set_value('reason'); ?>">
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('reason'); ?>
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
    control.makeTransliteratable(["reason"]);
    }
google.setOnLoadCallback(onLoad);
</script>
                