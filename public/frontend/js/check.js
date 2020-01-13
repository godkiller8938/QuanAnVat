function check(){
	with(document.form_customer)
	{
		reg=/^[0-9]+$/;
		if(reg.test(phone_number.value)==false)
		{
			alert("Bạn nhập sai số điện thoại");
			return false;
		}
	}

}
