@extends('layouts.master')
@push('css')
	<title>Ministry Expenses</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mukta:700|Roboto+Slab&display=swap" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/header_footer.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/ministry-report-table.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/aboutus-header_footer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/ministry_report_comments.css') }}">
	<script src="https://kit.fontawesome.com/8f691340fb.js" crossorigin="anonymous"></script>
@endpush

@section('content')
	<!-- Breadcrumb start -->
	<header class="container section-wrapper">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb bg-white">
				<li class="breadcrumb-item not-active"><a href="#">HOME</a></li>
				<span>&#8226;</span>
				<li class="breadcrumb-item not-active"><a href="#">SPENDING</a></li>
				<span>&#8226;</span>
				<li class="breadcrumb-item active" aria-current="page"><a href="#">MINISTRY SPENDING</a></li>
			</ol>
		</nav>
	</header>
	<section>
		<div class="container ">
			<div class="row">
				<div class="col-md-8 section-heading">
					<h1 class="section-heading-title">Ministry Spending</h1>
					<p class="section-heading-paragraph">ExpenseNG tracks federal spending to ensure taxpayers can see how their money is being used in communities across Nigeria.</p>
				</div>
			</div>
		</div>
		<div class="section-button">
			<div class="container">
				<div class="row px-1">
          <div class="btn-group col-lg-10 col-md-12 d-flex justify-content-between responsive-button nav nav-tabs">
            <a class="btn-marg text-left active button" data-toggle="tab" role="tab" href="#table">Expense Summary</a>
            <a class="btn-marg text-left button" data-toggle="tab" role="tab" href="">Project Summary</a>
            <a class="btn-marg text-left button" data-toggle="tab" role="tab" href="">Purchases Summary</a>
            <a class="btn-marg text-left button" data-toggle="tab" role="tab"href="">No Description</a>
            <a class="btn-marg text-left button" data-toggle="tab" role="tab" href="#comments">Comments</a>
          </div>
        </div>
			</div>
		</div>
	</section>
	<!---TABLE BEGINS--->
	<div class="tab-content">
		<div class="section-2 tab-pane show fade active" id="table" role="tabpanel">
			<section class="container bordered">
				<div class="table-section reponsive-div">
					<div class="main-table">
						<div class="table-top p-3 d-flex justify-content-between align-items-center">
							<h3 class="align-self-center">Date: 28th, May 2020</h3>
							<button>Filter <i class="fas fa-filter px-1"></i></button>
						</div>
						<div class="table-data">
							<div style="overflow-x: auto;">
								<table id="Table" cell-spacing="0" data-pagination="true" data-page-size="10" class="table table-striped table-responsive-sm">
									<thead>
										<tr>
											<th class="section-shadow row-ministry">Ministry</th>
											<th class="row-project">Project</th>
											<th class="row-company">Company</th>
											<th class="row-amount">Amount</th>
											<th class="row-date">Date</th>
										</tr>
									</thead>
									<tbody>
										{{-- @foreach ($expenses as $expense)
										<tr>
										<td class="section-shadow"><a href="#" class="text-success">{{Str::ucfirst($expense->ministry)}}</a></td>
										<td>{{$expense->description}}</td>
										<td>{{$expense->company}}</td>
											<td>{{$expense->amount}}</td>
											<td>20th,May 2020</td>
										</tr>
										@endforeach --}}
										
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Energy</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Labour</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Agriculture</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Aviation</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Transport</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Transport</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Energy</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Labour</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Agriculture</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Aviation</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Transport</a></td>
											<td class="table-overflow" >Rehabilitation of Lagos Ibadan Express-way</td>
											<td>Julius Berger</td>
											<td>&#8358;72,902,001,229</td>
											<td>20th,May 2020</td>
										</tr>
										<tr>
											<td class="section-shadow"><a href="#" class="text-success">Education</a></td>
											<td class="table-overflow" >Building of Class Blocks</td>
											<td>Samsung</td>
											<td>&#8358;65,001,901,123</td>
											<td>20th,May 2020</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!---PAGINATION--->
						<div class="table-footer d-flex align-items-center pagination1">
						<span>1-20 of 320 results</span>
						<div class="pagination">
							<a id="prev" href="#">&#8249;</a>
							<a class="active" href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">..</a>
							<a href="#">6</a>
							<a id="next" href="#">&#8250;</a>
						</div>
					</div>
					</div>
				</div>
		
				<!-- Filter Modal -->
			</section>
			<section class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="table-data">
							<div style="overflow-x: auto;">
								<table id="myTable" cell-spacing="0" data-pagination="true" data-page-size="10" class="table table-bordered table-responsive-sm">
									<thead>
										<tr>
											<th class="active text-center text-white">YEAR</th>
											<th class="text-center text-success text-success">2016</th>
											<th class="text-center text-success">2017</th>
											<th class="text-center text-success">2018</th>
											<th class="text-center text-success">2019</th>
											<th class="text-center text-success">2020</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="ministry" class="table-overflow">TOTAL AMOUNT</td>
											<td class="table-overflow">&#8358;12,908,400</td>
											<td class="table-overflow">&#8358;23,388,389</td>
											<td class="table-overflow">&#8358;72,902,001</td>
											<td class="table-overflow">&#8358;23,778,123</td>
											<td class="table-overflow">&#8358;22,343,444</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!---PAGINATION--->
						<div class="table-footer d-flex align-items-center pagination2">
							<span>1-20 of 320 results</span>
							<div class="pagination">
								<a id="prev" href="#">&#8249;</a>
								<a class="active" href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">..</a>
								<a href="#">6</a>
								<a id="next" href="#">&#8250;</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="container tab-pane fade" id="comments" role="tabpanel">
			@include('partials.comments')
		</div>
	</div>
@endsection
	<!---TABLE ENDS--->
@section('js')
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/ExpenditureScript.js') }}"></script>
@endsection
