<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RenderTargetBitmapImplMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_1($stream, $quality){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_2($fileName, $quality){}
}
/**
 */
class RenderTargetBitmapImpl extends \Avalonia\Skia\WriteableBitmapImpl implements 
	\Avalonia\Platform\IWriteableBitmapImpl,
	\Avalonia\Platform\IBitmapImpl,
	\System\IDisposable,
	\Avalonia\Platform\IReadableBitmapImpl,
	\Avalonia\Skia\IDrawableBitmapImpl,
	\Avalonia\Platform\IRenderTargetBitmapImpl,
	\Avalonia\Platform\IRenderTarget,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface
{
	/**
	 * @return \Avalonia\Platform\IDrawingContextImpl
	 */
	public  function CreateDrawingContext(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCorrupted(){}
	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public  function CreateFramebufferRenderTarget(){}
	/**
	 * @uses RenderTargetBitmapImplMethodsOverride::Save_1 ($stream, $quality)
	 * @uses RenderTargetBitmapImplMethodsOverride::Save_2 ($fileName, $quality)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
}
