<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class BeginDrawDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\RECT* $updateRect
	 * @param \System\Guid* $iid
	 * @param \System\Void** $updateObject
	 * @param \Avalonia\Win32\Interop\POINT* $updateOffset
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $updateRect, $iid, $updateObject, $updateOffset){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\RECT* $updateRect
	 * @param \System\Guid* $iid
	 * @param \System\Void** $updateObject
	 * @param \Avalonia\Win32\Interop\POINT* $updateOffset
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $updateRect, $iid, $updateObject, $updateOffset, $callback, $object){}
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
