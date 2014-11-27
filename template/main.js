$('#mylist li button').on('click', function() {
	var template = $(this).parent().find("a").text();
	var to = $(this).parent().find("input[type='email']").val()
	console.log(template);
	console.log(to);

	$.get(template, function( data ) {

		data = data.replace("ID", to);

		var link = document.createElement('a');
		link.href = "mailto:" + to + "?subject=" + 
			template.split(".")[0] + "&body=" + encodeURIComponent(data);
		link.setAttribute('target', '_blank');
		document.body.appendChild(link);
		link.click();
	});
});

