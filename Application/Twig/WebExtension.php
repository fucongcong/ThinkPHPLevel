<?php
namespace Application\Twig;

use Twig_Extension;

Class WebExtension extends Twig_Extension 
{
 	public function getFunctions()
	{
		return array(
			'public' => new \Twig_Function_Method($this, 'getPublic') ,
			'url' => new \Twig_Function_Method($this, 'getUrl') ,
		);
	}

	public function getPublic($url) 
	{
        		$_root  =   rtrim(dirname(_PHP_FILE_),'/');
        		define('__ROOT__',  (($_root=='/' || $_root=='\\')?'':$_root));
		return __ROOT__."/Public/".$url;
	}

	public function getUrl($url) 
	{
		return U($url);
	}

    	public function getName ()
	{
		return 'tp_twig';
	}

}