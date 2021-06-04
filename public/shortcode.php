<?php
// Add Shortcode
function coltman_novelics_function( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'test' => 'false',
		),
		$atts
	);
	ob_start();
?>
<div class="row justify-content-center">
<form class="col-md-8 col-lg-6" action="" id="take-form-novelics" method="post">
<div class=" row">
<div class="mb-3 form-floating col-md-6">
  <input type="text" class="pl-2 form-control" id="nombre" name="nombre" placeholder="Nombre">
  <label for="nombret">Nombre</label>
</div>
<div class="mb-3 form-floating col-md-6">
  <input type="text" class="pl-2 form-control" id="apellido" name="apellido"  placeholder="Apellido">
  <label for="apellido">Apellido</label>
</div>
<div class="mb-3 form-floating col-md-12">
  <input type="email" class="pl-2 form-control" id="email" name="email"  placeholder="Correo">
  <label class="pl-2" for="apellido">Correo</label>
</div>

<div class="mb-3 form-floating col-md-8">
  <input type="phone" class="pl-2 form-control" id="phone" name="phone"  placeholder="Telefono">
  <label class="pl-2" for="phone">Telefono</label>
</div>
<div class="mb-3 form-floating col-md-4">
  <input type="text" class="pl-2 form-control" id="edad" name="edad"  placeholder="Edad">
  <label class="pl-2" for="edad">Edad</label>
</div>


  
</div>
<button class="mx-auto d-block btn btn-primary" type="submit">Enviar</button>
</form>
</div>
<?php
	return ob_get_clean();;

}
add_shortcode( 'coltman_novelics_show', 'coltman_novelics_function' );


function myplugin_ajaxurl() {

	echo '<script type="text/javascript">
			var ajaxNovelics = "' . plugin_dir_url( __FILE__ ). '/take.php";
		  </script>';
 }
 add_action('wp_head', 'myplugin_ajaxurl');