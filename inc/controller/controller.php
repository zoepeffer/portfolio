<?php
class Seitensteuerung
{
	// Attribute
	public $action 		= "";								
	public $formData 	= array();							
	public $template 	= "templates/index.html";	        
	public $content 	= "Inhalt ist noch leer"; 			
	
	public function selectPage($page)
	{
		$this->action = $page;
		
		switch($this->action)
		{
#			case "home":				$this->actionHome();				break;
			case "about":	        	$this->actionAbout();       		break;
			case "portfolio":	        $this->actionPortfolio();       	break;
			case "blog":	        	$this->actionBlog();				break;
			case "contact":	        	$this->actionContact();       		break;
			default:					$this->action444();
		}
		$zeichenkette = file_get_contents($this->template);
		$ersatztext = suchen_und_ersetzen("__#__CONTENT__#__", $this->content,	$zeichenkette);
		return $ersatztext;
	}
	

	protected function actionAbout()
	{
		$this->content = file_get_contents("templates/about.html");
	}
	protected function actionHome()
	{
		$this->content = file_get_contents("templates/home.html");
	}
	protected function actionPortfolio()
	{
		$this->content = file_get_contents("templates/portfolio.html");
	}
	protected function actionBlog()
	{
		$this->content = file_get_contents("templates/blog.html");
	}
	protected function actionContact()
	{
		$this->content = file_get_contents("templates/contact.html");
	}
	protected function action444()
	{
		$this->content = file_get_contents("templates/444.html");
	}		
}
?>