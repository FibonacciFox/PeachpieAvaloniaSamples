<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetFeatureLevelDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @return \Avalonia\Win32\DirectX\D3D_FEATURE_LEVEL
	 */
	public  function Invoke($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \Avalonia\Win32\DirectX\D3D_FEATURE_LEVEL
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
