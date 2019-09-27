<?php

namespace Lekarna\SimpleHtmlDom;


class HtmlDomParser
{

	static public function file_get_html(): simple_html_dom
	{
		return call_user_func_array('\Lekarna\SimpleHtmlDom\file_get_html' , func_get_args());
	}


	static public function str_get_html(): simple_html_dom
	{
		return call_user_func_array('\Lekarna\SimpleHtmlDom\str_get_html' , func_get_args());
	}

}
