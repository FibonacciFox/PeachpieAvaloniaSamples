<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class GetTrustLevelDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\TrustLevel* $trustLevel
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $trustLevel){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\TrustLevel* $trustLevel
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $trustLevel, $callback, $object){}
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
