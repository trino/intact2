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
		            title: 'Intact Insurance.',
		            infoWindow: {
		                content: "<b>Intact Insurance</b><br> 6925 Century Avenue #900<br>Mississauga, ON L5N 0E3"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();