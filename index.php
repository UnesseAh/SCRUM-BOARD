<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body>

	<!-- BEGIN #app -->
	<div id="app" class="app-without-sidebar">
		<!-- BEGIN #content -->
		<div id="content" class="app-content main-style">
			<div class="nav d-flex justify-content-between">
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">Scrum Board </li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header">
						Scrum Board 
					</h1>
					<!-- END page-header -->
				</div>
				
				<div class="">
					<button class="btn btn-success rounded-pill" onclick="addTaskForm()"><i class="bi bi-plus-lg"></i> Add Task</a>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-header bg-dark  py-1">
							<h4 class="text-white m-0">To do (<span id="to-do-tasks-count"></span>)</h4>

						</div>
						<div class="" id="to-do-tasks">
							<!-- TO DO TASKS HERE -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-question-circle text-green"></i> 
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Keep all the updated requirements in one place</div>
									<div class="">
										<div class="text-muted">#1 created in 2022-10-08</div>
										<div class="text-start text-secondary" title="There is hardly anything more frustrating than having to look for current requirements in tens of comments under the actual description or having to decide which commenter is actually authorized to change the requirements. The goal here is to keep all the up-to-date requirements and details in the main/primary description of a task. Even though the information in comments may affect initial criteria, just update this primary description accordingly.">There is hardly anything more frustrating than having t...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Feature</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-question-circle text-green"></i>
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Consider creating an acceptance criteria list</div>
									<div class="">
										<div class="text-muted">#2 created in 2022-10-08</div>
										<div class="text-secondary" title="Descriptive requirements are very helpful when it comes to understanding the context of a problem, yet finally it is good to precisely specify what is expected. Thus the developer will not have to look for the actual requirements in a long, descriptive text but he will be able to easily get to the essence. One might find that sometimes ??? when acceptance criteria are well defined ??? there is little or no need for any additional information. Example:
						a) User navigates to ???/accounts??? and clicks on red download CSV button
						b) Popup appears with two buttons: ???This year??? and ???Last year???
						c) If user clicked on ???Last year??? download is initiated
						d) CSV downloaded includes following columns???">Descriptive requirements are very helpful when it comes...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Feature</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-question-circle text-green"></i>
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Provide examples, credentials, etc</div>
									<div class="">
										<div class="text-muted">#3 created in 2022-10-08</div>
										<div class="text-secondary" title="If the expectation is to process or generate some file ??? attach an example of such a file. If the goal is to integrate what is being developed with some service, ensure your devs have access to this service and its documentation. This list could go on and on ??? the bottom line is ??? if there is something that our developer might make use of, try to foresee it and provide them with (access to) it.">If the expectation is to process or generate some file ...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Feature</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-question-circle text-green"></i>
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Annotate</div>
									<div class="">
										<div class="text-muted">#4 created in 2022-10-08</div>
										<div class="text-secondary" title="The mockup provided can sometimes be confusing for developers. Especially if it contains much more content than the scope of the task described. Drop a couple of arrows, outlines and annotations here and there to emphasize what are the important parts of the mockup from the task requirements perspective.">The mockup provided can sometimes be confusing for deve...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Feature</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-question-circle text-green"></i>
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Use charts and diagrams</div>
									<div class="">
										<div class="text-muted">#5 created in 2022-10-08</div>
										<div class="text-secondary" title="While it is not always necessary, sometimes it might be beneficial to prepare a flowchart, a block diagram or some other kind of concept visualization that will render it easy for the developer to comprehend the task and its scope.">While it is not always necessary, sometimes it might be...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Feature</span>
									</div>
								</div>
							</button> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-header bg-dark py-1">
							<h4 class="text-white m-0">In Progress (<span id="in-progress-tasks-count">0</span>)</h4>

						</div>
						<div class="" id="in-progress-tasks">
							<!-- IN PROGRESS TASKS HERE -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="fa fa-circle-notch text-green"></i> 
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Describe steps to reproduce an issue</div>
									<div class="">
										<div class="text-muted">#6 created in 2022-10-08</div>
										<div class="text-secondary" title="including as many details as possible.">including as many details as possible.</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="fa fa-circle-notch text-green"></i> 
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Provide access</div>
									<div class="">
										<div class="text-secondary">#7 created in 2022-10-08</div>
										<div class="text-secondary" title="to the affected account and services if possible. It might be hard to reproduce the exact environment on a local machine.">to the affected account and services if possible. It mi...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="fa fa-circle-notch text-green"></i> 
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Provide environment information</div>
									<div class="">
										<div class="text-muted">#8 created in 2022-10-08</div>
										<div class="text-secondary" title="i.e., browser version, operating system version etc. Sometimes a list of installed browser plugins and extensions might be helpful as well.">i.e., browser version, operating system version etc. So...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="fa fa-circle-notch text-green"></i> 
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Provide a link to an exception and/or a stack trace</div>
									<div class="">
										<div class="text-muted">#9 created in 2022-10-08</div>
										<div class="text-secondary" title="as investigating those is usually the first step to take in resolving the problem.">as investigating those is usually the first step to tak...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-header bg-dark py-1">
							<h4 class="text-white m-0">Done (<span id="done-tasks-count">0</span>)</h4>

						</div>
						<div class="" id="done-tasks">
							<!-- DONE TASKS HERE -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-check-circle text-green"></i> 
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Provide access to logs</div>
									<div class="">
										<div class="text-muted">#10 created in 2022-10-08</div>
										<div class="text-secondary" title="as they can be helpful in reproducing the steps that caused the problem in the first place.">as they can be helpful in reproducing the steps that ca...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-check-circle text-green"></i>
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Provide access to the affected server or database dump</div>
									<div class="">
										<div class="text-muted">#11 created in 2022-10-08</div>
										<div class="text-secondary" title="If it is possible and when it does not violate security policies, it is usually helpful for the developer to access the original data that might have played a role in the problem.">If it is possible and when it does not violate security...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
							<!-- <button class="d-flex button border-0 border-bottom w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-check-circle text-green"></i>
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Make a screencast</div>
									<div class="">
										<div class="text-muted">#12 created in 2022-10-08</div>
										<div class="text-secondary" title="It is not always necessary, but many times a short screencast (or at least a screenshot) says more than a thousand words. While working on MacOS you can use QuickTime Player for the purpose but there are plenty of tools available for other operating systems as well.">It is not always necessary, but many times a short scre...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
							<!-- <button  class="d-flex button border-0  w-100 w-100 py-2 px-3">
								<div class="col-md-1">
									<i class="bi bi-check-circle text-green"></i>
								</div>
								<div class="text-start col-md-11">
									<div class="fw-bold">Provide contact information</div>
									<div class="">
										<div class="text-muted">#13 created in 2022-10-08</div>
										<div class="text-secondary" title="of the person that reported the bug. This will not always be possible, but in some cases it might be advantageous and most effective if a developer can have a chat with a person that actually experienced the bug, especially if the steps to reproduce a problem are not deterministic.">of the person that reported the bug. This will not alwa...</div>
									</div>
									<div class="">
										<span class="btn px-2 py-1 btn-primary">High</span>
										<span class="btn px-2 py-1 btn-secondary">Bug</span>
									</div>
								</div>
							</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->
		
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
	<div class="modal fade " id="modal-task" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Task</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				
				<form id="formReset">
				<div class="modal-body">
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Title</label>
						<input  type="text" class="form-control" id="Title">
					</div>
					<div class="mb-3">
						<label for="" class="col-form-label">Type</label>
						<div class="form-check ms-3">
							<input value="feature" class="form-check-input" type="radio" checked name="type" id="ft">
							<label class="form-check-label" for="flexRadioDefault1">
							Feature
							</label>
						</div>
						<div class="form-check ms-3">
							<input value="bug" class="form-check-input" type="radio" name="type" id="bug">
							<label class="form-check-label" for="flexRadioDefault2">
								Bug
							</label>
						</div>
					</div>
					<div class="mb-3">
						<label for="Priority" class="col-form-label">Priority</label>
						<select class="form-select" aria-label="Default select example" id="Priority">
							<option selected>Please select</option>
							<option value="Low">Low</option>
							<option value="Medium">Medium</option>
							<option value="High">High</option>
							<option value="Critical">Critical</option>

						</select>
					</div>
					<div class="mb-3">
						<label for="Status" class="col-form-label">Status</label>
						<select class="form-select" aria-label="Default select example" id="Status">
							<option selected>Please select</option>
							<option value="To Do">To Do</option>
							<option value="In Progress">In Progress</option>
							<option value="Done">Done</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="Date" class="col-form-label">Date</label>
						<input type="date" class="form-control" id="Date">
					</div>
					<div class="mb-3">
						<label for="message-text" class="col-form-label">Description</label>
						<textarea class="form-control" id="Description"></textarea>
					</div>
				</div>
			</form>
				<div class="modal-footer" id="footerModal">
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/data.js"></script>
	<script src="assets/js/app.js"></script>
	<!-- ================== END core-js ================== -->	

	
</body>
</html>