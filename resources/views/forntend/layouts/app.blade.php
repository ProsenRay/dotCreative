<!DOCTYPE html>

<html class="no-js">



<!-- Mirrored from html.modernwebtemplates.com/dotcreative/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 17:27:14 GMT -->
	<head>
		<title>DotCreative – Web Design Agency HTML Template</title>
		<meta charset="utf-8">
		
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="{{asset('forntend/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('forntend/css/animations.css')}}">
		<link rel="stylesheet" href="{{asset('forntend/css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{asset('forntend/css/main.css')}}" class="color-switcher-link">
		<script src="{{asset('forntend/js/vendor/modernizr-2.6.2.min.js')}}"></script>

		

	</head>

	<body>
		<!-- search modal -->
		<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="widget widget_search">
				<form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
					<div class="form-group">
						<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
					</div>
					<button type="submit" class="btn">Search</button>
				</form>
			</div>
		</div>

		<!-- Unyson messages modal -->
		<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
			<div class="fw-messages-wrap ls p-normal">
				<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
				<!--
			<ul class="list-unstyled">
				<li>Message To User</li>
			</ul>
			-->

			</div>
		</div>
		<!-- eof .modal -->

		<!-- wrappers for visual page editor and boxed version of template -->
		

		<div id="canvas">
			<div id="box_wrapper">

				@include('forntend.layouts.header')

				@yield('content')
				
				@include('forntend.layouts.footer')
			</div>
			<!-- eof #box_wrapper -->
		</div>
		<!-- eof #canvas -->
		<script data-cfasync="false" src="{{asset('forntend/js/email-decode.min.js')}}"></script>
		<script src="{{asset('forntend/js/main.js')}}"></script>
		<script src="{{asset('forntend/js/switcher.js')}}"></script>
		<script src="{{asset('forntend/js/compressed.js')}}"></script>

		
		<!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"> -->

		
		
	</body>


<!-- Mirrored from html.modernwebtemplates.com/dotcreative/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 17:31:46 GMT -->
</html>