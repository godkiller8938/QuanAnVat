$(document).ready(function(){
	$('#parent div h5 a').each(function(index){
	  $(this).click(function(){
	var id=$(this).attr('value');
	var price=$(this).attr('name');
	var radio=$(this).attr('name1');
	var total_product=$('#total_product').attr('value');
	total_product=Number(total_product);
	var check=$(this).attr('check');
	if(check==0)
	total_product++;    
	if(total_product>0){
	$('#total_product').html('('+total_product+')');
	$('#total_product').attr('value',total_product);
	$(this).attr('check',1);
	}
	if(radio!=0) radio=1;
	else radio='';
	$.get("../../../../index.php?controller=cart",{act:'add',id:id,price:price,radio:radio},function(data){
			});
		});
	});
});
