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
function SetChosen(gridId, controlId, controlValue)
{
	var id = $('#'+gridId+' > table > tbody > tr.selected > td:first').text();
	var value = $('#'+gridId+' > table > tbody > tr.selected > td:nth-child(2)').text();
	$('#'+controlId).val(id);
	$('#'+controlValue).text(value);

}
function ClearGlosowanie()
{
	$('.glosowanie').removeAttr('checked');  
	$("#Uchwala_Radny").val( "-1" ).attr('selected',true);
}
function ClearInput(inputId)
{
	$('#'+inputId).val("");
}
function ReadAll(Id)
{
	$('#'+Id+'Brief').toggle();
	$('#'+Id+'All').toggle();
	$('#'+Id+'ReadAll').toggle();
	$('#'+Id+'Collapse').toggle();
}