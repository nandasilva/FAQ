/**
 * Adiciona a classe fixed-header-page ao menu
 */
var headerSimple = document.querySelector(".header-page");

addEventListener("scroll",function(e){

	if(this.pageYOffset > 50){
		headerSimple.classList.add("fixed-header-page");
	} else {
		headerSimple.classList.remove("fixed-header-page");
	}
});

// Anula o evento de click na paginação quando ativo
$('.item-pagenav.is-active').on('click', function(e) {
	e.preventDefault();
});