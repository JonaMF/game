$(document).ready(function() {

	RecursosDelJuego();
	NivelesBtn();

});

//------------------ NIVELES DE BOTONES-------------------
function NivelesBtn(){

	var nvl = 1;
	$('#nvl').html(nvl);

	//Ampliar
	$('#ampliar').click(function(){
		if (nvl <= 39) {
			$('#nvl').html(++nvl);
		}
	});

	//Demoler
	$('#demoler').click(function(){
		if (nvl > 1) {
			$('#nvl').html(--nvl);
		}
	});

}

//------------------ RECURSOS DEL JUEGO-------------------
function RecursosDelJuego() {

	var madera = 0,
			vino   = 0,
			marmol = 0,
			azufre = 0;



	setInterval(function(){
			$('#madera').html('madera: ' + madera++);
	},1000);

}
