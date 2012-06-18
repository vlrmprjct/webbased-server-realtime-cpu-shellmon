 $(document).ready(function() {
	var refreshId = setInterval(function() {
		$.ajax({
			url: "cpu.php",
			cache: false,
			success: function(text) {

				// Enable this for testing
				// var text = Math.floor(Math.random()*101)

				var trimmed = text.replace(/^\s+|\s+$/g, '') ;
				$("#cpuload").prepend('<div class="barcontainer"><span style="height:' + trimmed + 'px" class="bar"></span></div>');

				var count = $("#cpuload .barcontainer").length;
				if (count > 100) {
					$('#cpuload .barcontainer:last-child').remove();
				}
			}
		})
   }, 5000);
   $.ajaxSetup({ cache: false });
});