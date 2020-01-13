$(document).ready(function(){
	$('#parent div a').each(function(index){
	  $(this).click(function(){
	var id=$(this).attr('value');
	$.get("../../../../controller/frontend/controller_detail_product.php",{id_product:id},function(data){
		$('#detail_product').html(data);
			});
		});
	});
	$('tr #detail a').each(function(index){
	  $(this).click(function(){
	var id=$(this).attr('value');
	$.get("../../../../controller/frontend/controller_detail_product.php",{id_product:id},function(data){
		$('#detail_product').html(data);
			});
		});
	});
});