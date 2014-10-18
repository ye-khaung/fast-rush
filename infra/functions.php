<?php

function _view_resolver($page, $data = null)
{
	ob_start();
	if(isset($page))
	{
		if(isset($data))
		{
			extract($data);
		}
		require DD . '/app/view/' . $page . '.html';
		array
	}
	ob_end_flush();
}

?>	