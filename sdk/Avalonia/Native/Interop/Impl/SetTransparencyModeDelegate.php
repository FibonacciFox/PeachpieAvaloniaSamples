<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetTransparencyModeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnWindowTransparencyMode $mode
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $mode){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnWindowTransparencyMode $mode
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $mode, $callback, $object){}
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
