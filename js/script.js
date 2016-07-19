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
    function checkEmptyFields(input_elements){
        var ban = true;
        var camposTexto = input_elements;
        for(var i = 0; i < camposTexto.length; i++){
            var value = $(camposTexto[i]).val().length;
            if (value == 0){
                ban = false;
                alert('ese campo esta vacio');
            } }     return ban; }

    function checkNumberRange(val1,val2){
        var valu1= parseInt(val1);
        var valu2= parseInt(val2);
        var ban = true;
        if (valu1 > valu2){
            alert('El frame de inicio debe ser menor que el frame final');
            ban= false;
        }
       return ban; 
    }
    
	$(document).ready(function () {
        
		
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
                alert ('Baia baia si llenaste todos los campos');
                /*var url = OC.generateUrl('/apps/renderedcom/job');
                var data = {
                scene: $('#scene').val(),
                frame_ini: $('#frame_ini').val(),
                frame_fin: $('#frame_fin').val()
                };
                $.post(url, data).success(function (response) {
                $('#echo-result').text(response);
                });*/
            }
              if (banNumber == true ){
                alert ('El rango de numeros es correcto');
                /*var url = OC.generateUrl('/apps/renderedcom/job');
                var data = {
                scene: $('#scene').val(),
                frame_ini: $('#frame_ini').val(),
                frame_fin: $('#frame_fin').val()
                };
                $.post(url, data).success(function (response) {
                $('#echo-result').text(response);
                });*/
            }
		});
	});
    

})(jQuery, OC);