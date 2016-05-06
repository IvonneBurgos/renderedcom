(function ($, OC) {

	$(document).ready(function () {

		$('#echo').click(function () {
			var url = OC.generateUrl('/apps/renderedcom/echo');
			var data = {
				echo: "nada"
                
			};

			$.post(url, data).success(function (response) {
                 console.log('Su trabajo ha sido enviado');
				$('#echo-result').text(response.echo);
               
			});

		});
	});

})(jQuery, OC);

      