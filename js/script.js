$(document).ready(function() {
	var cari = $('#cari');
	cari.on('keyup', function() {
		$.ajax({
			url: 'cari.php',
			type: 'POST',
			data: { cari: cari.val() },
			success: function(hasil) {
				$('.containernama').html(hasil);
			}
		});
	});
});
