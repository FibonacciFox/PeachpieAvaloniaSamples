<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositorWithBlurredWallpaperBackdropBrushProxyMethodsOverride
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
class __MicroComICompositorWithBlurredWallpaperBackdropBrushProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositorWithBlurredWallpaperBackdropBrush
{
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionBackdropBrush
	 */
	public  function TryCreateBlurredWallpaperBackdropBrush(){}
	/**
	 * @uses __MicroComICompositorWithBlurredWallpaperBackdropBrushProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositorWithBlurredWallpaperBackdropBrushProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositorWithBlurredWallpaperBackdropBrushProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositorWithBlurredWallpaperBackdropBrushProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
