<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>Savvy - Edit Vendor  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta http-equiv="X-UA-Compatible" content="" />

    <?php echo view('Include/header'); ?>    
           	<!-- Page Wrapper -->
               <div class="page-wrapper">
				<div class="content container-fluid">
					<div class="card mb-0">
						<div class="card-body">
							<!-- Page Header -->
							<div class="page-header">
								<div class="content-page-header">
									<h5>Edit Vendor</h5>
								</div>	
							</div>
							<!-- /Page Header -->				
							<div class="row">
								<div class="col-md-12">
                                <?php echo form_open('/Admin-store_Vendor', array('autocomplete' => 'off','class' => 'p-0 myForm')); ?>
                                <input type="hidden" name="id" value="<?= !empty($list['id']) ? $list['id'] : '' ?>">
                                <div class="form-group-item">
											<h5 class="form-title">Basic Details</h5>
											
											<div class="row">
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="input-block mb-3">
														<label>Name <span class="text-danger">*</span></label> 
														<input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" value="<?= $list['name'] ?? set_value('name'); ?>">
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('name'); ?>
                                                            </div>
                                                        <?php }?>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="input-block mb-3">
														<label>Email <span class="text-danger">*</span></label>
														<input type="email" class="form-control" placeholder="Enter Email Address" id="email" name="email" value="<?= $list['email'] ?? set_value('email'); ?>"> 
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('email'); ?>
                                                            </div>
                                                        <?php }?>
													</div>											
												</div>
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="input-block mb-3">
														<label>Phone <span class="text-danger">*</span></label>
														<input type="text" class="form-control" placeholder="Enter Phone number" id="phone_no" name="phone_no" value="<?= $list['phone_no'] ?? set_value('phone_no'); ?>"> 
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('phone_no'); ?>
                                                            </div>
                                                        <?php }?>
													</div>
												</div>
												
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="input-block mb-3">
														<label>Website</label>
														<input type="text" class="form-control" placeholder="Enter Website Address" id="website" name="website" value="<?= $list['website'] ?? set_value('website'); ?>"> 
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('website'); ?>
                                                            </div>
                                                        <?php }?>
													</div>
												</div>
												
											</div>
										</div>
										<div class="form-group-item">
											<div class="row align-items-end">
												<div class="col-md-12">
													<div class="billing-btn mb-2">
														<h5 class="form-title">Billing Address</h5>
													</div>
													
													<div class="input-block mb-3">
														<label>Full Address</label>
														<input type="text" class="form-control" placeholder="Enter Address" id="full_address" name="full_address" value="<?= $list['full_address'] ?? set_value('full_address'); ?>"> 
                                                        <?php  if(isset($validation)) {?>
                                                            <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                            <?= $error = $validation->getError('full_address'); ?>
                                                            </div>
                                                        <?php }?>
													</div>
													
													<div class="row">
														<div class="col-lg-6 col-md-12">
															<div class="input-block mb-3">
																<label>Country</label>
																<input type="text" class="form-control" placeholder="Enter Country" id="country" name="country" value="<?= $list['country'] ?? set_value('country'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('country'); ?>
                                                                        </div>
                                                                    <?php }?>
															</div>
															<div class="input-block mb-3">
																<label>City</label>
																<input type="text" class="form-control" placeholder="Enter City" id="city" name="city" value="<?= $list['city'] ?? set_value('city'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('city'); ?>
                                                                        </div>
                                                                    <?php }?>
															</div>
														</div>
														<div class="col-lg-6 col-md-12">
															<div class="input-block mb-3">
																<label>State</label>
																<input type="text" class="form-control" placeholder="Enter State" id="state" name="state" value="<?= $list['state'] ?? set_value('state'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('state'); ?>
                                                                        </div>
                                                                    <?php }?>
															</div>
															<div class="input-block mb-3">
															<label>Pincode</label>
																<input type="text" class="form-control" placeholder="Enter Pincode" id="pincode" name="pincode" value="<?= $list['pincode'] ?? set_value('pincode'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('pincode'); ?>
                                                                        </div>
                                                                    <?php }?>
															</div>
														</div>
													</div>
												</div>
											
											</div>
										</div>
										<div class="form-group-customer customer-additional-form">
											<div class="row">
												<h5 class="form-title">Bank Details</h5>
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="input-block mb-3">
														<label>Bank Name</label>
														<input type="text" class="form-control" placeholder="Enter Bank Name" id="bank_name" name="bank_name" value="<?= $list['bank_name'] ?? set_value('bank_name'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('bank_name'); ?>
                                                                        </div>
                                                                    <?php }?>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 col-sm-12">
													<div class="input-block mb-3">
														<label>Branch</label>
														<input type="text" class="form-control" placeholder="Enter Branch Name" id="bank_branch" name="bank_branch" value="<?= $list['bank_branch'] ?? set_value('bank_branch'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('bank_branch'); ?>
                                                                        </div>
                                                                    <?php }?>
													</div>									
												</div>
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="input-block mb-3">
														<label>Account Holder Name</label>
														<input type="text" class="form-control" placeholder="Enter Account Holder Name" id="holder_name" name="holder_name" value="<?= $list['holder_name'] ?? set_value('holder_name'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('holder_name'); ?>
                                                                        </div>
                                                                    <?php }?>
													</div>
												</div>
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="input-block mb-3">
														<label>Account Number</label>
														<input type="text" class="form-control" placeholder="Enter Account Number" id="account_no" name="account_no" value="<?= $list['account_no'] ?? set_value('account_no'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('account_no'); ?>
                                                                        </div>
                                                                    <?php }?>
													</div>
												</div>
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="input-block mb-3">
														<label>IFSC</label>
														<input type="text" class="form-control" placeholder="Enter IFSC Code" id="ifsc_code" name="ifsc_code" value="<?= $list['ifsc_code'] ?? set_value('ifsc_code'); ?>"> 
                                                                    <?php  if(isset($validation)) {?>
                                                                        <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                                        <?= $error = $validation->getError('ifsc_code'); ?>
                                                                        </div>
                                                                    <?php }?>
													</div>
												</div>
											</div>
										</div>								
										<div class="add-customer-btns text-end">
											
											<button type="submit"  class="btn customer-btn-save">Update Changes</button>
										</div>
									</form>
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

