<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class InitializeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $compositor
	 * @param \System\IntPtr $parentHwnd
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $compositor, $parentHwnd){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $compositor
	 * @param \System\IntPtr $parentHwnd
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $compositor, $parentHwnd, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Int32|int
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}