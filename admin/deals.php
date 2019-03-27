<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	
	<title>Katargeo Dash</title>

	<!-- Global stylesheets -->
	<?php require('includes/general_styles.php'); ?>
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<?php require('includes/general_scripts.php'); ?>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php require('includes/header.php'); ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php require('includes/sidebar.php');?>
		<!-- /main sidebar -->

<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Deal of the day</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-add text-primary"></i> <span>Add Deal</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Website Manager</a>
							<a href="#" class="breadcrumb-item active">Deal Of The Day</a>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Page length options -->
				<div class="card">

					<table class="table datatable-show-all">
						<thead>
							<tr>
								<th>Image</th>
								<th>Caption</th>
								<th>Description</th>
								
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<!-- <tr>
								<td>Drinks</td>
								<td>drinks</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Clothing</td>
								<td>clothing</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr> -->
						</tbody>
					</table>
				</div>
				<!-- /page length options -->

			</div>
			<!-- /content area -->

		<!-- Footer -->
		<?php require('includes/footer.php');?>
		<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<!-- Vertical form modal -->
				<div id="modal_form_vertical" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Creat Category</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#">
								<div class="modal-body">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Image</label>
												<input type="text" placeholder="Eugene" class="form-control">
											</div>

											<div class="col-sm-6">
												<label>Caption</label>
												<input type="text" placeholder="Kopyov" class="form-control">
											</div>
										</div>
									</div>


								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="submit" class="btn bg-primary">ADD</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /vertical form modal -->

</body>

</html>
