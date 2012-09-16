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
