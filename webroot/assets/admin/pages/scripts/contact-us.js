var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 43.6028500,
				lng: -79.7505200
			  });
			   var marker = map.addMarker({
		            lat: 43.6028500,
					lng: -79.7505200,
		            title: 'Old Republic Insurance.',
		            infoWindow: {
		                content: "<b>Old Republic Insurance</b><br> Insert address here"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();