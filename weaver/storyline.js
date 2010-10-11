var storylineLast = null;

$('.storyline li').hover(function() {
		var me = $(this);
		var t = me.attr('data-title').replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
		var s = me.attr('data-synopsis').replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
		var d = me.attr('data-date').replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
		me.addClass('hover');	   
		$('#storyline-data').replaceWith('<div id="storyline-data"><h3>' + t + '</h3><p class="summary">' + s + '</p><p class="date">' + d + '</p></div>');
		storylineLast = me[0];
 }, function() { 
		var me = $(this), sl = $('#storyline-data');
		$(this).removeClass('hover');
		window.setTimeout(function() {
				if(storylineLast == me[0])
					{
						sl.replaceWith('<div id="storyline-data"></div>');
						storylineLast = null;
					}
			}, 250);
	});
