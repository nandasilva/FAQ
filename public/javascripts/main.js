// Input de busca no site
$('.inp-search').focus(function() {
	var self = $(this);

	self.addClass('in-focus');
});

$('.inp-search').blur(function() {
	var self = $(this);

	self.removeClass('in-focus');
});