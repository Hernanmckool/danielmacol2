	@if(count($errors) > 0)
<script type="text/javascript">
	setTimeout(function() {
	$("#msj-error").fadeOut(1500);
	},5000);
</script>
	<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert">
	<ul>
		@foreach($errors->all() as $error)
			<li>
				{!!$error!!}
			</li>
		@endforeach
	</ul>

 	</div>
	@endif