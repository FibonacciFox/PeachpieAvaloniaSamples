<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionGeometryProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComICompositionGeometryProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionGeometry
{
	/**
	 * @return \System\Single
	 */
	public  function get_TrimEnd(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetTrimEnd($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_TrimOffset(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetTrimOffset($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_TrimStart(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetTrimStart($value){}
	/**
	 * @uses __MicroComICompositionGeometryProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionGeometryProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionGeometryProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionGeometryProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
