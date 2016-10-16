<?php 
function gzwp_GoogleMapAPI( $atts ) {
    $a = shortcode_atts( array(
		'id' => 'map',
        'width' => '100%',
        'height' => '300px',
		'lat' =>'47.00999',
		'lng' =>'28.825',
		'zoom' => '11',
		'marker' => '#fd443d'
    ), $atts );

    $mapJS = "
		<script src='http://maps.google.com/maps/api/js'></script>
		<script>
		CustomMarker.prototype = new google.maps.OverlayView();
		function CustomMarker(opts) {  this.setValues(opts); }

		CustomMarker.prototype.draw = function() {
			var self = this;
			var div = this.div;
			if (!div) {
				div = this.div = $('' +
					'<div>' +
					'<div class=gz_pulse></div>' +
					'<div class=pin></div>' +
					'</div>' +
					'')[0];
			
				this.pin = this.div.getElementsByClassName('pin');
				div.style.position = 'absolute';
				div.style.cursor = 'pointer';
				var panes = this.getPanes();
				panes.overlayImage.appendChild(div);
			}
			var point = this.getProjection().fromLatLngToDivPixel(this.position);
			if (point) {
				div.style.left = point.x + 'px';
				div.style.top = point.y + 'px';
			}
		};

		$(function() {
			var pos = new google.maps.LatLng(".$a['lat'].", ".$a['lng'].");
			var map = new google.maps.Map(document.getElementById('".$a['id']."'), {
				zoom: ".$a['zoom'].",
				center: pos,
				disableDefaultUI: false,
			});

			var marker = new CustomMarker({
				position: pos,
				map: map
			});
		});
		</script>
	";
	 $mapCSS = "
		<style>
			#".$a['id']."{ width: ".$a['width']."; height: ".$a['height']."; margin: 0;  padding: 0; border: 0; }
			.pin{ background-color: ".$a['marker'].";}
		</style>
	";
	
	return "$mapCSS <div id='".$a['id']."'></div>  $mapJS ";
	
	
}
add_shortcode( 'myMap', 'gzwp_GoogleMapAPI' );

?>
