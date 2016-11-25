/**
 * ownCloud - renderedcom
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author IvonneBurgos <irburgos@espol.edu.ec>
 * @copyright IvonneBurgos 2016
 */

(function ($, OC) {
	function checkEmptyFields(input_elements) {
		var ban = true;
		var camposTexto = input_elements;
		for(var i = 0; i < camposTexto.length; i++) {
		    var value = $(camposTexto[i]).val().length;
		    if (value == 0){
				ban = false;
				alert('ese campo esta vacio');
			}
		}
		return ban;
	}

	function checkNumberRange(val1,val2){
		var valu1= parseInt(val1);
		var valu2= parseInt(val2);
		var ban = true;
		if (valu1 > valu2){
			// alert('El frame de inicio debe ser menor que el frame final');
			ban = false;
		}
		return ban; 
	}
	
	$(document).ready(function () {
	// var ruta = $('.route');
	// console.log(ruta);
	// var regexp = new RegExp("/var/www/owncloud/data/admin/files");

		$("#frame_ini").keypress(function (e) {
			//if the letter is not digit then display error and don't type anything
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
		});
	
		$("#frame_fin").keypress(function (e) {
			//if the letter is not digit then display error and don't type anything
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
   		});
		
		$('#render').click(function(){
			var banField = checkEmptyFields(document.getElementById('form').getElementsByTagName('input'));
			var banNumber = checkNumberRange($('#frame_ini').val(),$('#frame_fin').val());
			if (banField == true ){
				if (banNumber == true ){
					var url = OC.generateUrl('/apps/renderedcom/job');
					var data = {
						scene: $('#scene').val(),
						file_path: $('#file_path').val(),
						frame_ini: $('#frame_ini').val(),
						frame_fin: $('#frame_fin').val()
					};
					$.post(url, data).success(function (response) {

							$('#echo-result').text('Status:' + response.confirmation);
						
						
						
					});
				}
				this.disabled = true;
			}
		});
		
		// $('#endJob').attr("class", "selectedOption");

		$('#endJob').click(function () {
			// $('#endJob').attr("class", "selectedOption");
			// $('#processJob').attr("class", " ");
			localStorage.setItem('id','#endJob');
			// localStorage.setItem('class','.selectedOption');
			// if (timer !== false){
			// 	clearInterval(timer);
			// 	timer = false;
			// 	ajaxRequestDon();
			// }
			window.location.href = '/owncloud/index.php/apps/mistrabajos/';
		});

		$('#processJob').click(function () {
			// $('#bigCont').empty();
			// $('#processJob').attr("class", "selectedOption");
			// $('#endJob').attr("class", " ");
			localStorage.setItem('id','#processJob');
			// localStorage.setItem('class','.selectedOption');
   //          if (timer !== false){
			// 	clearInterval(timer);
			// }
			// else
			// {
			// 	timer = setInterval(ajaxRequestProcess, 1000);
			// }
			window.location.href = '/owncloud/index.php/apps/mistrabajos/';
		});

		$('#buscar').click(function(){
			var arrayFiles = Array();
			$("#progress-div").show();
		});

		$('.file').click(function() {
		  var ruta = $(this).attr('url');
		  //	alert(ruta);
		  $('#file_path').val(ruta);
		})
			
		$('#closeNav').click(function() {
			document.getElementById("mySidenav").style.width = "0";
		});		
	});
})(jQuery, OC);