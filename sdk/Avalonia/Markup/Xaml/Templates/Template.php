<?php
namespace Avalonia\Markup\Xaml\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TemplateMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function Build_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function Build_2(){}
}
/**
 */
class Template extends \System\Object implements 
	\Avalonia\Controls\ITemplate_1,
	\Avalonia\Styling\ITemplate
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Content;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Content(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Content($value){}
	/**
	 * @uses TemplateMethodsOverride::Build_1 ()
	 * @uses TemplateMethodsOverride::Build_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
