
		

        <?php echo view('Include/header'); ?>    
    
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid pb-0">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header">
							<h5>Dashboard</h5>
						</div>
					</div>
					<!-- /Page Header -->	
					<div class="super-admin-dashboard">
						<div class="row">
							<div class="col-xl-5 d-flex">
								<div class="dash-user-card w-100">
									<h4><i class="fe fe-sun"></i> <?php
                           date_default_timezone_set("Asia/Kolkata");
                            $currentHour = date('H');
                            if ($currentHour >= 5 && $currentHour < 12) {
                                $greeting = "Good Morning";
                            } elseif ($currentHour >= 12 && $currentHour < 17) {
                                $greeting = "Good Afternoon";
                            } elseif ($currentHour >= 17 && $currentHour < 21) {
                                $greeting = "Good Evening";
                            } else {
                                $greeting = "Good Night";
                            }
                            ?><?=$greeting;?>, <?=$_SESSION['name'];?></h4>
									
									<div class="dash-btns">
										<a href="companies.html" class="btn view-company-btn">View Companies</a>
										<a href="packages.html" class="btn view-package-btn">All Packages</a>
									</div>
									<div class="dash-img">
										<img src="../assets/img/dashboard-card-img.png" alt="">
									</div>
								</div>
							</div>
							<div class="col-xl-7 d-flex p-0">
								<div class="row dash-company-row w-100 m-0">
									<div class="col-lg-3 col-sm-6 d-flex">
										<div class="company-detail-card w-100">
											<div class="company-icon">
												<img src="../assets/img/icons/dash-card-icon-01.svg" alt="">
											</div>
											<div class="dash-comapny-info">
												<h6>Total Companies</h6>
												<h5>987</h5>
												<p><span>14% <i class="fe fe-chevrons-up"></i></span>Last month</p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 d-flex">
										<div class="company-detail-card bg-info-light w-100">
											<div class="company-icon">
												<img src="../assets/img/icons/dash-card-icon-02.svg" alt="">
											</div>
											<div class="dash-comapny-info">
												<h6>Active Companies</h6>
												<h5>154</h5>
												<p><span>1% <i class="fe fe-chevrons-up"></i></span>Last month</p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 d-flex">
										<div class="company-detail-card bg-pink-light w-100">
											<div class="company-icon">
												<img src="../assets/img/icons/dash-card-icon-03.svg" alt="">
											</div>
											<div class="dash-comapny-info">
												<h6>Inactive Company</h6>
												<h5>2</h5>
												<p><span>2%  <i class="fe fe-chevrons-up"></i></span>Last month</p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 d-flex">
										<div class="company-detail-card bg-success-light w-100">
											<div class="company-icon">
												<img src="../assets/img/icons/dash-card-icon-04.svg" alt="">
											</div>
											<div class="dash-comapny-info">
												<h6>Total Active Plans</h6>
												<h5>6</h5>
												<p><span>6% <i class="fe fe-chevrons-up"></i></span>Last month</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 d-flex">
								<div class="card super-admin-dash-card">
									<div class="card-header">
										<div class="row align-center">
											<div class="col">
												<h5 class="card-title">Latest Registered Companies</h5>
											</div>
											<div class="col-auto">
												<a href="companies.html" class="btn-right btn btn-sm btn-outline-primary">
													View All 
												</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-stripped table-hover">
												<tbody>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-01.svg" alt="Company Image"></a>
																<a href="companies.html">Hermann Groups <span class="plane-type">Basic (Monthly)</span></a>
																
															</h2>
														</td>
														<td>24 Feb 2024</td>
														<td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-02.svg" alt="Company Image"></a>
																<a href="companies.html">Skiles LLC <span class="plane-type">Enterprise (Yearly)</span></a>
																
															</h2>
														</td>
														<td>23 Feb 2024</td>
														<td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-03.svg" alt="Company Image"></a>
																<a href="companies.html">Kerluke Group <span class="plane-type">Advanced (Monthly)</span></a>
																
															</h2>
														</td>
														<td>22 Feb 2024</td>
														<td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-04.svg" alt="Company Image"></a>
																<a href="companies.html">Schowalter Group <span class="plane-type">Basic (Yearly)</span></a>
																
															</h2>
														</td>
														<td>21 Feb 2024</td>
														<td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-05.svg" alt="Company Image"></a>
																<a href="companies.html">Accentric Global <span class="plane-type">Basic (Monthly)</span></a>
																
															</h2>
														</td>
														<td>20 Feb 2024</td>
														<td class="text-end"><a href="companies.html" class="view-companies btn">View</a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 d-flex">
								<div class="card super-admin-dash-card">
									<div class="card-header">
										<div class="d-flex justify-content-between align-items-center">
											<h5 class="card-title">Earnings </h5>
											<div class="d-flex align-center">
												<span class="earning-income-text"><i></i>Income</span>
												<div class="dropdown main">
													<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
														2024
													</button>
													<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														<li>
															<a href="javascript:void(0);" class="dropdown-item">2023</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="dropdown-item">2022</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="dropdown-item">2021</a>
														</li>												
													</ul>
												</div>
											</div>
											
										</div>
									</div>
									<div class="card-body p-0">
										<div id="earnings-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 d-flex">
								<div class="card super-admin-dash-card flex-fill">
									<div class="card-header">
										<div class="d-flex justify-content-between align-items-center">
											<h5 class="card-title">Most Ordered Plan</h5>
	
											<div class="dropdown main">
												<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
													This Month
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
													<li>
														<a href="javascript:void(0);" class="dropdown-item">Today</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">This Week</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">This Year</a>
													</li>												
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="dash-plane-list">
											<div class="plane-info">
												<span class="icon-plane"><img src="../assets/img/icons/dashboard-plane-icon.svg" alt=""></span>
												<div class="plane-name">Enterprise <span>(Monthly)</span> <h6>Total Order : 201</h6></div>
											</div>
											<span class="plane-rate">$549.00</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 d-flex">
								<div class="card super-admin-dash-card flex-fill">
									<div class="card-header">
										<div class="d-flex justify-content-between align-items-center">
											<h5 class="card-title">Top Company with Plan</h5>
	
											<div class="dropdown main">
												<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
													Today
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item">This Month</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">This Week</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">This Year</a>
													</li>												
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="dash-plane-list">
											<div class="plane-info">
												<span class="icon-company"><img src="../assets/img/companies/company-01.svg" alt=""></span>
												<span class="name-company">Hermann Groups</span>
											</div>
											<span class="plane-rate">10 Plans</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 d-flex">
								<div class="card super-admin-dash-card flex-fill">
									<div class="card-header">
										<div class="d-flex justify-content-between align-items-center">
											<h5 class="card-title">Most Domains</h5>
	
											<div class="dropdown main">
												<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
													This Week
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
													<li>
														<a href="javascript:void(0);" class="dropdown-item">This Month</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">Today</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">This Year</a>
													</li>												
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="dash-plane-list">
											<div class="plane-info">
												<span class="icon-company"><img src="../assets/img/companies/company-04.svg" alt=""></span>
												<div class="plane-name"><span>Schowalter Group</span> <h6>sk.example.com</h6></div>
											</div>
											<span class="plane-rate">150 Users</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 d-flex">
								<div class="card super-admin-dash-card">
									<div class="card-header">
										<div class="row align-center">
											<div class="col">
												<h5 class="card-title">Recent Invoices</h5>
											</div>
											<div class="col-auto">
												<a href="invoices.html" class="btn-right btn btn-sm btn-outline-primary">
													View All 
												</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-stripped table-hover">
												<tbody>
													<tr>
														<td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV12454</a><span class="dash-incoice-date">15 Feb 2024</span></td>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-01.svg" alt="Company Image">
																</a>
																<a href="companies.html">Hermann Groups</a>
															</h2>
														</td>
														<td>Basic <br>  <span class="plane-type">(Monthly)</span></td>
														<td><span class="badge bg-success-light d-inline-flex align-items-center"><i class="fe fe-check me-1"></i>Paid</span></td>
														<td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a></td>
													</tr>
													<tr>
														<td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV45445</a><span class="dash-incoice-date">14 Feb 2024</span></td>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-02.svg" alt="Company Image">
																</a>
																<a href="companies.html">Skiles LLC</a>
															</h2>
														</td>
														<td>Enterprise <br> <span class="plane-type">(Yearly)</span></td>
														<td><span class="badge bg-danger-light d-inline-flex align-items-center"><i class="fe fe-x me-1"></i>Unpaid</span></td>
														<td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a></td>
													</tr>
													<tr>
														<td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV78444</a><span class="dash-incoice-date">13 Feb 2024</span></td>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-03.svg" alt="Company Image">
																</a>
																<a href="companies.html">Kerluke Group</a>
															</h2>
														</td>
														<td>Advanced <br>  <span class="plane-type">(Monthly)</span></td>
														<td><span class="badge bg-success-light d-inline-flex align-items-center"><i class="fe fe-check me-1"></i>Paid</span></td>
														<td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a></td>
													</tr>
													<tr>
														<td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV31454</a><span class="dash-incoice-date">12 Feb 2024</span></td>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-04.svg" alt="Company Image">
																</a>
																<a href="companies.html">Schowalter Group</a>
															</h2>
														</td>
														<td>Basic <br> <span class="plane-type">(Yearly)</span></td>
														<td><span class="badge bg-success-light d-inline-flex align-items-center"><i class="fe fe-check me-1"></i>Paid</span></td>
														<td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a></td>
													</tr>
													<tr>
														<td><a href="invoice-details.html" class="invoice-link dash-incoice-table">#INV74878</a><span class="dash-incoice-date">11 Feb 2024</span></td>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-05.svg" alt="Company Image">
																</a>
																<a href="companies.html">Accentric Global</a>
															</h2>
														</td>
														<td>Basic <br> <span class="plane-type">(Monthly)</span></td>
														<td><span class="badge bg-success-light d-inline-flex align-items-center"><i class="fe fe-check me-1"></i>Paid</span></td>
														<td class="text-end"><a href="invoice-subscription.html" class="invoice-detail"><i class="fe fe-file-text"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 d-flex">
								<div class="card super-admin-dash-card">
									<div class="card-header">
										<div class="row align-center">
											<div class="col">
												<h5 class="card-title">Top Plans</h5>
											</div>
											<div class="col-auto">
												<a href="packages.html" class="btn-right btn btn-sm btn-outline-primary">
													View All 
												</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="plane-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 d-flex">
								<div class="card super-admin-dash-card">
									<div class="card-header">
										<div class="row align-center">
											<div class="col">
												<h5 class="card-title">Recent Plan Expired</h5>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-stripped table-hover">
												<tbody>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-01.svg" alt="Company Image"></a>
																<a href="companies.html">Hermann Groups <span class="plane-type">Basic (Monthly)</span></a>
																
															</h2>
														</td>
														<td class="expired-date">Expired On <br>24 Feb 2024</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-02.svg" alt="Company Image"></a>
																<a href="companies.html">Skiles LLC <span class="plane-type">Enterprise (Yearly)</span></a>
																
															</h2>
														</td>
														<td class="expired-date">Expired On <br>24 Feb 2024</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-03.svg" alt="Company Image"></a>
																<a href="companies.html">Kerluke Group <span class="plane-type">Advanced (Monthly)</span></a>
																
															</h2>
														</td>
														<td class="expired-date">Expired On <br>24 Feb 2024</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-04.svg" alt="Company Image"></a>
																<a href="companies.html">Schowalter Group <span class="plane-type">Basic (Yearly)</span></a>
																
															</h2>
														</td>
														<td class="expired-date">Expired On <br>24 Feb 2024</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-05.svg" alt="Company Image"></a>
																<a href="companies.html">Accentric Global <span class="plane-type">Basic (Monthly)</span></a>
																
															</h2>
														</td>
														<td class="expired-date">Expired On <br>24 Feb 2024</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 d-flex">
								<div class="card super-admin-dash-card">
									<div class="card-header">
										<div class="d-flex justify-content-between align-items-center">
											<h5 class="card-title">Companies Registered </h5>
	
											<div class="dropdown main">
												<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
													2024
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
													<li>
														<a href="javascript:void(0);" class="dropdown-item">2023</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">2022</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">2021</a>
													</li>												
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="companies_flow"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 d-flex">
								<div class="card super-admin-dash-card">
									<div class="card-header">
										<div class="row align-center">
											<div class="col">
												<h5 class="card-title">Recent Domain</h5>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-stripped table-hover">
												<tbody>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-01.svg" alt="Company Image"></a>
																<a href="companies.html">Hermann Groups <span class="plane-type">Basic (Monthly)</span></a>
															</h2>
														</td>
														<td class="text-end">
															<div class="active-inactive-btn">
																<a href="#" class="active-domain"><i class="fe fe-check"></i></a>
																<a href="#" class="inactive-domain"><i class="fe fe-x"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-02.svg" alt="Company Image"></a>
																<a href="companies.html">Skiles LLC <span class="plane-type">Enterprise (Yearly)</span></a>
															</h2>
														</td>
														<td class="text-end">
															<div class="active-inactive-btn">
																<a href="#" class="active-domain"><i class="fe fe-check"></i></a>
																<a href="#" class="inactive-domain"><i class="fe fe-x"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-03.svg" alt="Company Image"></a>
																<a href="companies.html">Kerluke Group <span class="plane-type">Advanced (Monthly)</span></a>
															</h2>
														</td>
														<td class="text-end">
															<div class="active-inactive-btn">
																<a href="#" class="active-domain"><i class="fe fe-check"></i></a>
																<a href="#" class="inactive-domain"><i class="fe fe-x"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-04.svg" alt="Company Image"></a>
																<a href="companies.html">Schowalter Group <span class="plane-type">Basic (Yearly)</span></a>
															</h2>
														</td>
														<td class="text-end">
															<div class="active-inactive-btn">
																<a href="#" class="active-domain"><i class="fe fe-check"></i></a>
																<a href="#" class="inactive-domain"><i class="fe fe-x"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<h2 class="table-avatar">
																<a href="profile.html" class="company-avatar avatar-md me-2 companies company-icon">
																	<img class="avatar-img rounded-circle company" src="../assets/img/companies/company-05.svg" alt="Company Image"></a>
																<a href="companies.html">Accentric Global <span class="plane-type">Basic (Monthly)</span></a>
															</h2>
														</td>
														<td class="text-end">
															<div class="active-inactive-btn">
																<a href="#" class="active-domain"><i class="fe fe-check"></i></a>
																<a href="#" class="inactive-domain"><i class="fe fe-x"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
			

		</div>
		<!-- /Main Wrapper -->

			<!--Theme Setting -->
			<div class="settings-icon"> 
				<span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas"><img src="../assets/img/icons/siderbar-icon2.svg" class="feather-five" alt="layout"></span> 
			</div> 
			<div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas"> 
				<div class="sidebar-headerset">
					<div class="sidebar-headersets">
						<h2>Customizer</h2>
						<h3>Customize your overview Page layout</h3>
					</div>
					<div class="sidebar-headerclose">
						<a data-bs-dismiss="offcanvas" aria-label="Close"><img src="../assets/img/close.png" alt="img"></a>
					</div>
				</div>
				<div class="offcanvas-body p-0"> 
					<div data-simplebar class="h-100"> 
						<div class="settings-mains"> 
							<div class="layout-head">
								<h5>Layout</h5>
								<h6>Choose your layout</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0"> 
										<input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input"> 
										<label class="form-check-label avatar-md w-100" for="customizer-layout01"> 
											<img src="../assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Vertical</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0"> 
									<input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input"> 
										<label class="form-check-label  avatar-md w-100" for="customizer-layout02"> 
											<img src="../assets/img/horizontal.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Horizontal</h5> 
								</div> 
								<div class="col-4 d-none"> 
									<div class="form-check card-radio p-0"> 
										<input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input"> 
										<label class="form-check-label  avatar-md w-100" for="customizer-layout03"> 
											<img src="../assets/img/two-col.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Two Column</h5> 
									</div> 
								</div> 
								<div class="d-flex align-items-center justify-content-between pt-3">
									<div class="layout-head mb-0">
										<h5>RTL Mode</h5>
										<h6>Change Language Direction.</h6>
									</div>
									<div class="active-switch">
										<div class="status-toggle">
											<input id="rtl" class="check" type="checkbox">
											<label for="rtl" class="checktoggle checkbox-bg">checkbox</label>
										</div>
									</div>
								</div>
								<div class="layout-head pt-3">
									<h5>Color Scheme</h5>
									<h6>Choose Light or Dark Scheme.</h6>
								</div>
								<div class="colorscheme-cardradio"> 
									<div class="row"> 
										<div class="col-4">
											<div class="form-check card-radio blue  p-0 "> 
												<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue"> 
												<label class="form-check-label  avatar-md w-100" for="layout-mode-blue"> 
													<img src="../assets/img/vertical.png" alt="img">
												</label> 
											</div> 
											<h5 class="fs-13 text-center mt-2 mb-2">Blue</h5> 
										</div>
									<div class="col-4"> 
										<div class="form-check card-radio p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light"> 
											<label class="form-check-label  avatar-md w-100" for="layout-mode-light"> 
												<img src="../assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2 mb-2">Light</h5> 
									</div> 
									<div class="col-4"> 
										<div class="form-check card-radio dark  p-0 "> 
											<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark"> 
											<label class="form-check-label avatar-md w-100 " for="layout-mode-dark"> 
												<img src="../assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2 mb-2">Dark</h5> 
									</div> 
									<div class="col-4 d-none"> 
										<div class="form-check card-radio p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange"> 
											<label class="form-check-label  avatar-md w-100 " for="layout-mode-orange"> 
												<img src="../assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2 mb-2">Orange</h5> 
									</div> 
									<div class="col-4 d-none"> 
										<div class="form-check card-radio maroon p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon"> 
											<label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon"> 
												<img src="../assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2 mb-2">Brink Pink</h5> 
									</div> 
									<div class="col-4 d-none"> 
										<div class="form-check card-radio purple p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple"> 
											<label class="form-check-label  avatar-md w-100 " for="layout-mode-purple"> 
												<img src="../assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2 mb-2">Green</h5> 
									</div> 
								</div> 
							</div> 
	
							<div id="layout-width"> 
								<div class="layout-head pt-3">
									<h5>Layout Width</h5>
									<h6>Choose Fluid or Boxed layout.</h6>
								</div>
								<div class="row"> 
									<div class="col-4"> 
										<div class="form-check card-radio p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid"> 
											<label class="form-check-label avatar-md w-100" for="layout-width-fluid"> 
												<img src="../assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Fluid</h5> 
									</div> 
									<div class="col-4"> 
										<div class="form-check card-radio p-0 "> 
											<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed"> 
											<label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed"> 
												<img src="../assets/img/boxed.png" alt="img"> 
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Boxed</h5> 
									</div> 
								</div> 
							</div> 
	
							<div id="layout-position" class="d-none"> 
								<div class="layout-head pt-3">
									<h5>Layout Position</h5>
									<h6>Choose Fixed or Scrollable Layout Position.</h6>
								</div>
								<div class="btn-group bor-rad-50 overflow-hidden radio" role="group"> 
									<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed"> 
									<label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label> 
	
									<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable"> 
									<label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label> 
								</div> 
							</div> 
							<div class="layout-head pt-3">
								<h5>Topbar Color</h5>
								<h6>Choose Light or Dark Topbar Color.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check card-radio  p-0"> 
										<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light"> 
										<label class="form-check-label avatar-md w-100" for="topbar-color-light"> 
											<img src="../assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Light</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark"> 
										<label class="form-check-label  avatar-md w-100" for="topbar-color-dark"> 
											<img src="../assets/img/dark.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Dark</h5> 
								</div> 
							</div> 
	
							<div id="sidebar-size"> 
								<div class="layout-head pt-3">
									<h5>Sidebar Size</h5>
									<h6>Choose a size of Sidebar.</h6>
								</div>
								<div class="row"> 
									<div class="col-4"> 
										<div class="form-check sidebar-setting card-radio  p-0 "> 
											<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg" > 
											<label class="form-check-label avatar-md w-100" for="sidebar-size-default"> 
												<img src="../assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Default</h5> 
									</div> 
	
									<div class="col-4 d-none"> 
										<div class="form-check sidebar-setting card-radio p-0"> 
											<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md"> 
											<label class="form-check-label  avatar-md w-100" for="sidebar-size-compact"> 
												<img src="../assets/img/compact.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Compact</h5> 
									</div> 
	
									<div class="col-4 "> 
										<div class="form-check sidebar-setting card-radio p-0 "> 
											<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover" > 
											<label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover"> 
												<img src="../assets/img/small-hover.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Small Sidebar</h5> 
									</div> 
								</div> 
							</div> 
	
							<div id="sidebar-view"> 
								<div class="layout-head pt-3">
									<h5>Sidebar View</h5>
									<h6>Choose Default or Detached Sidebar view.</h6>
								</div>
								<div class="row"> 
									<div class="col-4"> 
										<div class="form-check sidebar-setting card-radio  p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default"> 
											<label class="form-check-label avatar-md w-100" for="sidebar-view-default"> 
												<img src="../assets/img/compact.png" alt="img">
											</label>
											</div> 
										<h5 class="fs-13 text-center mt-2">Default</h5> 
									</div> 
									<div class="col-4"> 
										<div class="form-check sidebar-setting card-radio p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached"> 
											<label class="form-check-label  avatar-md w-100" for="sidebar-view-detached"> 
												<img src="../assets/img/detached.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Detached</h5> 
									</div> 
								</div> 
							</div> 
							<div id="sidebar-color"> 
								<div class="layout-head pt-3">
									<h5>Sidebar Color</h5>
									<h6>Choose a color of Sidebar.</h6>
								</div>
								<div class="row"> 
									<div class="col-4"> 
										<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> 
											<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light"> 
											<label class="form-check-label  avatar-md w-100" for="sidebar-color-light"> 
												<span class="bg-light bg-sidebarcolor"></span>
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Light</h5> 
									</div> 
									<div class="col-4"> 
										<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> 
											<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark"> 
											<label class="form-check-label  avatar-md w-100" for="sidebar-color-dark"> 
												<span class="bg-darks bg-sidebarcolor"></span>
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2">Dark</h5> 
									</div> 
									<div class="col-4 d-none"> 
										<div class="form-check sidebar-setting card-radio p-0"> 
											<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient"> 
											<label class="form-check-label avatar-md w-100" for="sidebar-color-gradient"> 
												<span class="bg-gradients bg-sidebarcolor"></span>
											</label>  
										</div> 
										<h5 class="fs-13 text-center mt-2">Gradient</h5> 
									</div>
									<div class="col-4 d-none"> 
										<button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false"> 
											<span class="d-flex gap-1 h-100"> 
												<span class="flex-shrink-0"> 
													<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1"> 
														<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span> 
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
														</span> 
													</span> 
													<span class="flex-grow-1"> 
														<span class="d-flex h-100 flex-column"> 
															<span class="bg-light d-block p-1"></span> 
															<span class="bg-light d-block p-1 mt-auto"></span> 
														</span> 
													</span> 
												</span> 
											</button> 
											<h5 class="fs-13 text-center mt-2">Gradient</h5> 
									</div> 
								</div>
								
							</div> 
						</div> 
					</div> 
	
				</div> 
				<div class="offcanvas-footer border-top p-3 text-center"> 
					<div class="row"> 
						<div class="col-6"> 
							<button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button> 
						</div> 
						<div class="col-6"> 
							<a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a> 
						</div> 
					</div> 
				</div> 
			</div>
			<!-- /Theme Setting -->		
		<!-- jQuery -->
		<script src="../assets/js/jquery-3.7.1.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="../assets/js/bootstrap.bundle.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>

		<!-- Datatable JS -->
		<script src="../assets/plugins/datatables/datatables.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>

		<!-- select CSS -->
		<script src="../assets/plugins/select2/js/select2.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		
		<!-- Slimscroll JS -->
		<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		
		<!-- Datepicker Core JS -->
		<script src="../assets/plugins/moment/moment.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		<script src="../assets/js/bootstrap-datetimepicker.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>

		<!-- Apexchart JS -->
		<script src="../assets/plugins/apexchart/apexcharts.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		<script src="../assets/plugins/apexchart/chart-data.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		
		<!-- multiselect JS -->
		<script src="../assets/js/jquery-ui.min.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>

		<!-- Theme Settings JS -->
		<script src="../assets/js/theme-settings.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		<script src="../assets/js/greedynav.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>
		
		<!-- Custom JS -->
		<script src="../assets/js/script.js" type="f44b23d4fc5c2665c38fae11-text/javascript"></script>

	<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="f44b23d4fc5c2665c38fae11-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90eb3b402c953a48","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from kanakku.dreamstechnologies.com/html/template/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2025 11:21:38 GMT -->
</html>