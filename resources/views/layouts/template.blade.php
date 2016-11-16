<!doctype html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

		<title>Title</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="robots" content="index, follow">

		<link rel="shortcut icon" href="/favicon.ico">

		<!-- FACEBOOK
		<meta property="og:locale" content="pt_BR">
		<meta property="og:url" content="">
		<meta property="og:title" content="">
		<meta property="og:site_name" content="">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="=">
		<meta property="og:image:height" content="=">
		<meta property="og:type" content="website">
		-->

		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/app.css" />

    @section('css')
    @show

		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>

  <body itemscope itemtype="http://schema.org/WebPage">

    <section class="normal" id="dd-wrapper">
			@include('includes.header')

      <div class="dd-normal dd-wrapper">
      	@yield('content')
      </div>

			@include('includes.footer')
    </section>

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/assets/js/app.js"></script>

    @section('js')
    @show

  </body>
</html>
