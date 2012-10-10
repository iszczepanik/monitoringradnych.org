function jqCheckAll(id, name, flag)
{
	if (flag == 0)
	{
		$("[id^='" + name + "']").attr('checked', false);
	}
	else
	{
		$("[id^='" + name + "']").attr('checked', true);
	}
}
function jqEnableAll(id, name, flag)
{
	if (flag == 0)
	{
		$("[id^='" + name + "']").removeAttr("disabled"); 
	}
	else
	{
		$("[id^='" + name + "']").attr('disabled', true);
	}
}
function DisplayAuthor(ob)
{
	//alert(ob.options[ob.selectedIndex].value);
	if ( ob.options[ob.selectedIndex].value == 3 )
	{
		$('#CMT_AUTHOR').hide();
		$('#CMT_RDN_ID').show();
	}
	else
	{	
		$('#CMT_RDN_ID').hide();
		$('#CMT_AUTHOR').show();
	}
}