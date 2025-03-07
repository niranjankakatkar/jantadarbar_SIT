<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>Savvy - Customers </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta http-equiv="X-UA-Compatible" content="" />

    <?php echo view('Include/header'); ?>    
           	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header ">
							<h5>Customers List</h5>
							<div class="list-btn">
								<ul class="filter-list">
									
									<li class="">
										<div class="dropdown dropdown-action" data-bs-toggle="tooltip" data-bs-placement="top" title="download">
											<a href="#" class="btn-filters" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fe fe-download"></i></span></a>
											<div class="dropdown-menu dropdown-menu-end">
												<ul class="d-block">
													<li>
														<a class="d-flex align-items-center download-item" href="javascript:void(0);" download><i class="far fa-file-pdf me-2"></i>PDF</a>
													</li>
													<li>
														<a class="d-flex align-items-center download-item" href="javascript:void(0);" download><i class="far fa-file-text me-2"></i>CVS</a>
													</li>
												</ul>
											</div>
										</div>														
									</li>
									
									<li>
										<a class="btn btn-primary" href="<?php echo base_url(); ?>/Admin-AddCustomer" ><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Customer</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
						
					<!-- Search Filter -->
					<div id="filter_inputs" class="card filter-card">
						<div class="card-body pb-0">
							<div class="row">
								<div class="col-sm-6 col-md-3">
									<div class="input-block mb-3">
										<label>Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="input-block mb-3">
										<label>Email</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="input-block mb-3">
										<label>Phone</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class=" card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover datatable">
											<thead class="thead-light">
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Phone</th>
													<th>Created</th>
													<th>Balance</th>
													<th Class="no-sort">Actions</th>
												</tr>
											</thead>
											<tbody>
                                            <?php $count=1;$status=''; 
                                                foreach($all_list as $row){
                                                
                                                ?>
												<tr>
                                                    <td><?=$count;?></td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
															<a href="profile.html"><?=$row['name'];?> <span><span class="__cf_email__" ><?=$row['email'];?></span></span></a>
														</h2>
													</td>
													<td><?=$row['phone_no'];?></td>
													<td><?=$row['created_at'];?></td>													
													<td>Rs. 0.00</td>
													<td class="d-flex align-items-center">
														<a href="ledger.html" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a> 
														<div class="dropdown dropdown-action">
															<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-end">
																<ul>
																	<li>
																		<a class="dropdown-item" href="<?php echo base_url(); ?>updateCustomer?ID=<?php echo base64_encode($row['id']); ?>" ><i class="far fa-edit me-2"></i>Edit</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);" onClick="deleteRec(<?=$row['id'];?>);"><i class="far fa-trash-alt me-2"></i>Delete</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>

                                                <?php $count++; } ?>
										</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->

			<!-- Add Asset -->
			<div class="toggle-sidebar">
				<div class="sidebar-layout-filter">
					<div class="sidebar-header">
						<h5>Filter</h5>
						<a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
					</div>
					<div class="sidebar-body">						
						<form action="#" autocomplete="off">
							<!-- Customer -->
							<div class="accordion accordion-last" id="accordionMain1">
								<div class="card-header-new" id="headingOne">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Vendors	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"  data-bs-parent="#accordionExample1">
									<div class="card-body-chat">
										<div class="row">
											<div class="col-md-12">
												<div id="checkBoxes1">
													<div class="form-custom">														
														<input type="text" class="form-control" id="member_search1" placeholder="Search Customer">
														<span><img src="assets/img/icons/search.svg" alt="img"></span>
													</div>
													<div class="selectBox-cont">
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span>  John Smith
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span>  Johnny Charles
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span>  Robert George
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> Sharonda Letha
														</label>
														<!-- View All -->
														<div class="view-content">
															<div class="viewall-One">	
																<label class="custom_check w-100">
																	<input type="checkbox" name="username">
																	<span class="checkmark"></span> Pricilla Maureen
																</label>
																<label class="custom_check w-100">
																	<input type="checkbox" name="username">
																	<span class="checkmark"></span> Randall Hollis
																</label>
															</div>
															<div class="view-all">
																<a href="javascript:void(0);" class="viewall-button-One"><span class="me-2">View All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
															</div>
														</div>
														<!-- /View All -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Customer -->

							<div class="filter-buttons">
								<button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
									Apply
								</button>
								<button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
									Reset
								</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>	
			<!--/Add Asset -->

			<!-- Add Vendor Modal -->
			<div class="modal custom-modal fade" id="add_vendor" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header border-0 pb-0">
							<div class="form-header modal-header-title text-start mb-0">
								<h4 class="mb-0">Add Vendor</h4>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								
							</button>
						</div>
						<form action="#">
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12">
										<div class="input-block mb-3">
											<label>Name</label>
											<input type="text" class="form-control" placeholder="Enter Name">
										</div>
									</div>
									<div class="col-lg-12 col-sm-12">
										<div class="input-block mb-3">
											<label>Email</label>
											<input type="text" class="form-control" placeholder="Enter Email Address">
										</div>
									</div>
									<div class="col-lg-12 col-sm-12">
										<div class="input-block mb-3">
											<label>Phone Number</label>
											<input type="number" class="form-control" placeholder="Enter Phone Number">
										</div>
									</div>
									<div class="col-lg-12 col-sm-12">
										<div class="input-block mb-0">
											<label>Closing Balance</label>
											<input type="number" class="form-control" placeholder="Enter Closing Balance Amount">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>
								<button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Add Vendor</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /Add Vendor Modal -->

			<!-- Edit Vendor Modal -->
			<div class="modal custom-modal fade" id="edit_vendor" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header border-0 pb-0">
							<div class="form-header modal-header-title text-start mb-0">
								<h4 class="mb-0">Edit Vendor</h4>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								
							</button>
						</div>
						<form action="#">
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="input-block mb-3">
											<label>Name</label>
											<input type="text" class="form-control" value="John Smith" placeholder="Enter Name">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-block mb-3">
											<label>Email</label>
											<input type="text" class="form-control" value="john@example.com" placeholder="Select Date">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-block mb-3">
											<label>Phone Number</label>
											<input type="text" class="form-control" value="+1 989-438-3131" placeholder="Enter Reference Number">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-block mb-0">
											<label>Balance</label>
											<input type="text" class="form-control" value="$4200" placeholder="Enter Reference Number">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Cancel</button>
								<button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /Edit Vendor Modal -->

			<!-- Delete Items Modal -->
			<div class="modal custom-modal fade" id="delete_modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Vendor</h3>
								<p>Are you sure want to delete?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<button type="reset" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-continue-btn">Delete</button>
									</div>
									<div class="col-6">
										<button type="submit" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Items Modal -->
		</div>
		<!-- /Main Wrapper -->

		<!-- Add Ledger Modal -->
			<div class="modal custom-modal fade" id="add_ledger" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header border-0 pb-0">
							<div class="form-header modal-header-title text-start mb-0">
								<h4 class="mb-0">Add Ledger</h4>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								
							</button>
						</div>
						<form action="#">
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="input-block mb-3">
											<label>Amount</label>
											<input type="text" class="form-control" placeholder="Enter Amount">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-block mb-3">
											<label>Date</label>
											<div class="cal-icon cal-icon-info">
												<input type="text" class="datetimepicker form-control" placeholder="Select Date">
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-block mb-3">
											<label>Reference</label>
											<input type="text" class="form-control" placeholder="Enter Reference Number">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-block d-inline-flex align-center mb-0">
											<label class="me-5 mb-0">Mode</label>
											<div>
												<label class="custom_radio me-3 mb-0">
													<input type="radio" name="payment" checked>
													<span class="checkmark"></span> Credit
												</label>
												<label class="custom_radio mb-0">
													<input type="radio" name="payment">
													<span class="checkmark"></span> Debit
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>
								<button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /Add Ledger Modal -->

		<!--Theme Setting -->
		
	
                <?php echo view('Include/footer'); ?>    

<script>
        function deleteRec(id)
        {
            var table='tbl_customers';
            if (confirm('Are you sure delete this customer?')) {
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