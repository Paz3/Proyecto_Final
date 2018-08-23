function initMap() {
        var stgo_coords = {lat: -33.4378305, lng: -70.65044920000003};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: stgo_coords
        });
        var marker = new google.maps.Marker({
          position: stgo_coords,
          map: map
    });
 }

$(document).ready(function() {

	//De ésta manera estoy yendo a buscar los elementos al DOM sólo una vez, los almaceno en éstas variables y cuando las quiero utilizar las llamo desde declarandolas dentro de la función)

	var resumen = $('#resumen');
	var sensacion = $('#sensacion');
	var probabilidad = $('#probabilidad');
	var humedad = $('#humedad');
	var imagen = $('.icon');
	var remover = $('#escondido');
	//Descomponiendo en muchas variables por si necesitamos hacer varias modifiaciones para poder concatenar para pdoer seleccionar la ubicación que queramos (éste paso vino después de la declaración abajo)
	var url = 'https://cors-anywhere.herokuapp.com/https://api.darksky.net/forecast/';
	var key = '00b403a54def5fb4fcc00e858b8351c5';
	var coords = {
		bla: '-33.4386021, -70.64110160000001',
		baq: '-33.436933,-70.63443470000004',
		mmo: '-33.428341, -70.61920900000001',
		lle: '-33.4220671, -70.60840530000002'
	}

	var queryParams = ['exclude=[minutely,hourly,daily,alerts,flags]', 'lang=es', 'units=auto']
	var image = {
		'partly-cloudy-day': 'assets/images/cloud.png',
		'clear-day':'assets/images/sun.png',
		'clear-night':'assets/images/night.png',
		'partly-cloudy-night':'assets/images/cloud.png'
	}

	$('#select').on('change', function(){
		$.ajax({
			//El / es porque key no termina en / (las comas se usan cupando abajo viene un nuevo método)
			url: url + key + '/' + coords[$(this).val()]+'?'+queryParams[0]+'&'+queryParams[1] +'&'+ queryParams[2], //Concatenación de las query params de la appi de clima (las ordenamos en variables para que ni fueran tan largas, se separan con un & y la primera comienza con ?)
			method:'GET'
		}).done(function(data){ //Lo que se va a ejecutar luego va a ser el método .then con una función que tendra un argumento data, que corresponderá al objeto que nos va a enviar la api devuelta. 
			console.log(data);
			resumen.text(parseInt(data.currently.temperature) +'° '+ data.currently.summary);
			sensacion.text(data.currently.apparentTemperature + '° ');
			probabilidad.text(data.currently.precipProbability *100 +'%');
			humedad.text(data.currently.humidity *100 +'%');
			imagen.attr('src', image[data.currently.icon]);
			remover.removeAttr('hidden');

		});
	});


	var new_coords = {
		bla: { lat: -33.4386021, lng: -70.64110160000001 },
		baq: { lat: -33.436933, lng: -70.63443470000004 },
		mmo: { lat: -33.428341, lng: -70.61920900000001 },
		lle: { lat: -33.4220671,lng: -70.60840530000002}
 	};
 		


		$('#select').on('change', function(){

	        var map = new google.maps.Map(document.getElementById('map'), {
	        	position: (new_coords[$(this).val()]),
	          	zoom: 14,

	        });

	        var marker = new google.maps.Marker({
	            position: (new_coords[$(this).val()]),
	            map: map
	        });

	        map.setCenter(marker.getPosition());
	});

});	