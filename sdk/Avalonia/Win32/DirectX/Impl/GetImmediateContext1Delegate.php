<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetImmediateContext1Delegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppImmediateContext
	 * @return \System\Void|void
	 */
	public  function Invoke($this, $ppImmediateContext){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppImmediateContext
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $ppImmediateContext, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}