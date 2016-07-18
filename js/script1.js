function checkFields(){
        var camposTexto = document.getElementsByTagName('input');
        return camposTexto;
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
            alert(checkFields());
           /* checkedFields = checkFields($('#scene').val(),$('#frame_ini').val(), $('#frame_fin').val());

            if (checkedFields == false){
                alert ("Hay campos sin llenar");
            }
            else {   }*/
                /*var url = OC.generateUrl('/apps/renderedcom/job');
                var data = {
                scene: $('#scene').val(),
                frame_ini: $('#frame_ini').val(),
                frame_fin: $('#frame_fin').val()
                };
                $.post(url, data).success(function (response) {
                $('#echo-result').text(response);
                });*/
         
		});
	});
    