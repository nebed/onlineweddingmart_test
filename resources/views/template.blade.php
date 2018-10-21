<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="OWM">
    <meta name="author" content="Uche Nebed">
    <meta name="keywords" content="OWM wedding store">

    <!-- Title Page-->
    <title>@yield('title')</title>

     <!-- Fontfaces CSS-->
    {!!Html::style('css/font-face.css')!!}
    {!!Html::style('vendor/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('vendor/font-awesome/css/fontawesome-all.min.css')!!}
    {!!Html::style('vendor/mdi-font/css/material-design-iconic-font.min.css')!!}

    <!-- Bootstrap CSS-->
    {!!Html::style('vendor/bootstrap/css/bootstrap.min.css')!!}

    <!-- Vendor CSS-->
    {!!Html::style('vendor/animsition/animsition.min.css')!!}
    {!!Html::style('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')!!}
    {!!Html::style('vendor/wow/animate.css')!!}
    {!!Html::style('vendor/css-hamburgers/hamburgers.min.css')!!}
    {!!Html::style('vendor/slick/slick.css')!!}
    {!!Html::style('vendor/select2/select2.min.css')!!}
    {!!Html::style('vendor/perfect-scrollbar/perfect-scrollbar.css')!!}

    <!-- Main CSS-->
    {!!Html::style('css/theme.css')!!}
    @yield('stylesheet')

</head>

@yield('content')


	{!!Html::script('vendor/jquery/jquery-3.2.1.min.js')!!}

	<!-- Bootstrap JS-->
	{!!Html::script('vendor/bootstrap/js/popper.min.js')!!}
	{!!Html::script('vendor/bootstrap/js/bootstrap.min.js')!!}

	<!-- Vendor JS       -->
	{!!Html::script('vendor/slick/slick.min.js')!!}
	{!!Html::script('vendor/wow/wow.min.js')!!}
	{!!Html::script('vendor/animsition/animsition.min.js')!!}
	{!!Html::script('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')!!}
	{!!Html::script('vendor/counter-up/jquery.waypoints.min.js')!!}
	{!!Html::script('vendor/counter-up/jquery.counterup.min.js')!!}
	{!!Html::script('vendor/circle-progress/circle-progress.min.js')!!}
	{!!Html::script('vendor/perfect-scrollbar/perfect-scrollbar.min.js')!!}
	{!!Html::script('vendor/chartjs/Chart.bundle.min.js')!!}
	{!!Html::script('vendor/select2/select2.min.js')!!}

	<!-- Main JS-->
	{!!Html::script('js/main-admin.js')!!}
    @yield('script')
	
</body>

</html>
<!-- end document-->