<?php
namespace Avalonia\X11;
/**
 */
class X11Framebuffer extends \System\Object implements 
	\Avalonia\Platform\ILockedFramebuffer,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Address(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RowBytes(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Dpi(){}
	/**
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public  function get_Format(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}