<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class PresentDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $Flags
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $SyncInterval, $Flags){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $Flags
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $SyncInterval, $Flags, $callback, $object){}
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
