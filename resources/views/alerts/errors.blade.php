@if(Session::has('message-error'))
<script type="text/javascript">
setTimeout(function() {
    $("#msj-error").fadeOut(1500);
},5000);
</script>
<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert">
    {{Session::get('message-error')}}
 </div>
@endif