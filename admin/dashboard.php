
					<h1 style="color: #337AB7"><i class="fa fa-dashboard"></i> Dashboard <small>Statics Overview</small></h1>
					<ol class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					</ol>
					<div class="row">
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right"> All student</div>
										</div>
									</div>
								</div>
								<a href="#">
									<div class="panel-footer">
										<span class="pull-left">All Students</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right"> All student</div>
										</div>
									</div>
								</div>
								<a href="#">
									<div class="panel-footer">
										<span class="pull-left">All Students</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
										<div class="col-xs-9">
											<div class="pull-right" style="font-size: 45px">10</div>
											<div class="clearfix"></div>
											<div class="pull-right"> All student</div>
										</div>
									</div>
								</div>
								<a href="#">
									<div class="panel-footer">
										<span class="pull-left">All Students</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<hr/>
					<h3>New Students </h3>
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped" style="width:100%" id="example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Roll</th>
								<th>City</th>
								<th>P.Contact</th>
								<th>Photo</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$all_student = mysqli_query($link,"SELECT * FROM `student_info` ORDER BY `id` DESC");
							while($rows = mysqli_fetch_assoc($all_student)){
								?>
								<tr>
								<td><?=$rows['id']?></td>
								<td><?=ucwords($rows['name'])?></td>
								<td><?=$rows['roll']?></td>
								<td><?=$rows['city']?></td>
								<td><?=$rows['pcontact']?></td>
								<td><img height="50px" src="<?='images/student_img/'.$rows['photo']?>"></td>
								
							</tr>
							<?php } ?>
							
						</tbody>
					</table>
					</div>