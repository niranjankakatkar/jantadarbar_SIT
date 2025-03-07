<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

	<meta charset="utf-8" />
	<title>Savvy - Add Products </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta http-equiv="X-UA-Compatible" content="" />

	<?php echo view('Include/header'); ?>
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">
			<div class="card mb-0">
				<div class="card-body">
					<div class="page-header">
						<div class="content-page-header">
							<h5>Add/Edit Products</h5>
						</div>
					</div>
					<?php echo form_open_multipart('/Admin-store_Products', array('autocomplete' => 'off', 'class' => 'p-0 myForm')); ?>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group-item">
								<h5 class="form-title">Basic Details</h5>
								<div class="row">

									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="input-block mb-3">
											<label>Product Name <span class="text-danger"> *</span></label>
											<input type="text" name="product_name"  class="form-control" placeholder="Enter Product Name">
											<?php if (isset($validation)) { ?>
												<div class="text-danger"
													style="text-align: left;margin-left: 5px;color: #ec536c!important;">
													<?= $error = $validation->getError('product_name'); ?>
												</div>
											<?php } ?>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="input-block mb-3 add-products">
											<label>Product Code (SKU)<span class="text-danger"> *</span></label>
											<input type="text" name="product_code" class="form-control" placeholder="Enter Product Code">
											<button type="submit" class="btn btn-primary">
												Generate Code
											</button>
											<?php if (isset($validation)) { ?>
												<div class="text-danger"
													style="text-align: left;margin-left: 5px;color: #ec536c!important;">
													<?= $error = $validation->getError('product_code'); ?>
												</div>
											<?php } ?>
										</div>
									</div>

									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="input-block mb-3">
											<label>Selling Price <span class="text-danger"> *</span></label>
											<input type="text" name="selling_price" class="form-control" placeholder="Enter Selling Price">
											<?php if (isset($validation)) { ?>
												<div class="text-danger"
													style="text-align: left;margin-left: 5px;color: #ec536c!important;">
													<?= $error = $validation->getError('selling_price'); ?>
												</div>
											<?php } ?>
										</div>
									</div>


								</div>
							</div>
							<div class="form-group-item">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 col-12 description-box">
										<div class="input-block mb-3" id="summernote_container">
											<label class="form-control-label">Product Descriptions</label>
											<textarea name="description" class="summernote form-control"
												placeholder="Type your message"></textarea>
												<?php if (isset($validation)) { ?>
												<div class="text-danger"
													style="text-align: left;margin-left: 5px;color: #ec536c!important;">
													<?= $error = $validation->getError('description'); ?>
												</div>
											<?php } ?>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-12">
										<div class="input-block mb-3">
											<label>Product Image</label>
											<input type="file"  id="image" name="image">
											<div class="input-block mb-3 service-upload mb-0">
												<span><img src="assets/img/icons/drop-icon.svg" alt="upload"></span>
												<h6 class="drop-browse align-center">
													Drop your files here or<span class="text-primary ms-1">browse</span>
												</h6>
												<p class="text-muted">Maximum size: 50MB</p>
												
												<div id="frames"></div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<button type="reset" class="btn btn-primary cancel me-2">
								Cancel
							</button>
							<button type="submit" class="btn btn-primary">
								Add Item
							</button>

						</div>
					</div>
					</form>

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
								<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
									data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Vendors
									<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
								</a>
							</h6>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
							data-bs-parent="#accordionExample1">
							<div class="card-body-chat">
								<div class="row">
									<div class="col-md-12">
										<div id="checkBoxes1">
											<div class="form-custom">
												<input type="text" class="form-control" id="member_search1"
													placeholder="Search Customer">
												<span><img src="assets/img/icons/search.svg" alt="img"></span>
											</div>
											<div class="selectBox-cont">
												<label class="custom_check w-100">
													<input type="checkbox" name="username">
													<span class="checkmark"></span> John Smith
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="username">
													<span class="checkmark"></span> Johnny Charles
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="username">
													<span class="checkmark"></span> Robert George
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
														<a href="javascript:void(0);" class="viewall-button-One"><span
																class="me-2">View All</span><span><i
																	class="fa fa-circle-chevron-down"></i></span></a>
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
						<button type="submit"
							class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
							Apply
						</button>
						<button type="submit"
							class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
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
									<input type="number" class="form-control"
										placeholder="Enter Closing Balance Amount">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-bs-dismiss="modal"
							class="btn btn-back cancel-btn me-2">Cancel</button>
						<button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Add
							Vendor</button>
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
									<input type="text" class="form-control" value="john@example.com"
										placeholder="Select Date">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="input-block mb-3">
									<label>Phone Number</label>
									<input type="text" class="form-control" value="+1 989-438-3131"
										placeholder="Enter Reference Number">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="input-block mb-0">
									<label>Balance</label>
									<input type="text" class="form-control" value="$4200"
										placeholder="Enter Reference Number">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-bs-dismiss="modal"
							class="btn btn-primary paid-cancel-btn me-2">Cancel</button>
						<button type="submit" data-bs-dismiss="modal"
							class="btn btn-primary paid-continue-btn">Update</button>
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
								<button type="reset" data-bs-dismiss="modal"
									class="w-100 btn btn-primary paid-continue-btn">Delete</button>
							</div>
							<div class="col-6">
								<button type="submit" data-bs-dismiss="modal"
									class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
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
										<input type="text" class="datetimepicker form-control"
											placeholder="Select Date">
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
						<button type="button" data-bs-dismiss="modal"
							class="btn btn-back cancel-btn me-2">Cancel</button>
						<button type="submit" data-bs-dismiss="modal"
							class="btn btn-primary paid-continue-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /Add Ledger Modal -->

	<!--Theme Setting -->

	<?php echo view('Include/footer'); ?>