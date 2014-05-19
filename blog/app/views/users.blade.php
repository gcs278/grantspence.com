@extends('layout')

@section('content')

<div id="black_box">
test
</div>

<div id="blue_box">
as
</div>
<script>
$(document).ready( function () {
	$(window).scroll(function() {
    if (  document.documentElement.clientHeight + 
          $(document).scrollTop() >= document.body.offsetHeight )
    {
	$("#black_box").animate({'marginTop': '-=30px'}, 'fast'); 
    }
});
});
</script>

@stop
