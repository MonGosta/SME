<?php
namespace Mongosta\Bootstrap;

class View
{
    protected $templatePath;
    protected $attributes;
	public function __construct($templatePath = "", $attributes = [])
	{
		$this->templatePath = rtrim($templatePath, '/\\') . '/';
		$this->attributes = $attributes;
    }

    public function render($template, array $data = [])
 	{
		$data = array_merge($this->attributes, $data);
		$templateFile = $this->templatePath . $template;
		extract($data);
		include $templateFile;
    }
}
