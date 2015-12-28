jQuery(document).ready(function($){
$('form.ajax').on('submit', function() {
	var	that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
			
	that.find('[name]').each(function(index, value) {
		var	that = $(this),
				name = that.attr('name'),
				value = that.val();
				
		data[name] = value;
	});
	
	
	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response) {
			location.reload();
			$('form').each(function() { this.reset() });
			console.log(data);
			console.log(type);
			console.log(url);
		}
	});
	return false;
	});
});