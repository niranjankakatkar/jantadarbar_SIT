<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>FTS - भूमिकांची यादी</title>
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
                            <div class="flex-grow-1 d-flex justify-content-between">
                                <h4 class="fs-18 fw-semibold m-0">भूमिकांची यादी</h4>
                                <a href="<?= base_url();?>AddRole">
                                    <button type="button" class="btn btn-success">+ नवीन भूमिका </button>
                                </a>
                            </div>
                        </div>

      
                        <!-- Button Datatable -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">भूमिकांची यादी</h5>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="5%">अ.क्र.</th>
                                                    <th>भूमिकेचे नाव</th>
                                                    
                                                    <th width="12%">क्रिया </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count=1;$status=''; 
                                                foreach($all_list as $row){
                                                
                                                ?>
                                                <tr>
                                                    <td><?=$count;?></td>
                                                    <td><?=$row['name'];?></td>
                                                    <td>  
                                                    <a href="<?php echo base_url(); ?>updateRole?ID=<?php echo base64_encode($row['id']); ?>" >
                                                        <button type="button" class="btn btn-primary" style="padding: 5px 10px 4px 10px;"><i class="mdi mdi-pencil"></i></button>
                                                    </a>&nbsp;
                                                    <button type="button" class="btn btn-danger" style="padding: 5px 10px 4px 10px;cursor: pointer;" onClick="deleteRec(<?=$row['id'];?>);">
                                                        <i class="mdi mdi-delete"></i></button> 
                                                       </i>
                            						</td>
                                                </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
         
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
 
                <?php echo view('Include/footer'); ?>    

<script>
        function deleteRec(id)
        {
            var table='tbl_roles';
            if (confirm('तुमची खात्री आहे की ही भूमिका हटवा?')) {
            $.ajax({
            url: "<?php echo base_url();?>/deleteRec",
            type: 'post',
            data:{id:id,table:table},
            success: function(response) 
            {
                location.reload();
            }
            });
            }
        }
    </script> 