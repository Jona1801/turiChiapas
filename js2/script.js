$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.order-TC .category_item[category="todo"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function(){
		var FiltroHotel = $(this).attr('category');
		console.log(FiltroHotel);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.Hotel-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.Hotel-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showHotel(){
			$('.Hotel-item[category="'+FiltroHotel+'"]').show();
			$('.Hotel-item[category="'+FiltroHotel+'"]').css('transform', 'scale(1)');
		} setTimeout(showHotel,400);
	});

	// MOSTRANDO TODOS LOS Hoteles =======================

	$('.category_item[category="todo"]').click(function(){
		function showAll(){
			$('.Hotel-item').show();
			$('.Hotel-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});