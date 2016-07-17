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

	$(document).ready(function () {
		$('#hello').click(function () {
			alert('Hello from your script file');
		});
        
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
			var url = OC.generateUrl('/apps/renderedcom/job');
			var data = {
				scene: $('#scene').val(),
                frame_ini: $('#frame_ini').val(),
                frame_fin: $('#frame_fin').val()
			};
			$.post(url, data).success(function (response) {
				$('#echo-result').text(response);
			});
		});
	});

})(jQuery, OC);