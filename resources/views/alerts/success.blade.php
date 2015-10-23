@if(Session::has('message'))
<script type="text/javascript">
setTimeout(function() {
    $("#msj-success").fadeOut(1500);
},5000);
</script>
<div id="msj-success" class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('message')}}
 </div>
@endif