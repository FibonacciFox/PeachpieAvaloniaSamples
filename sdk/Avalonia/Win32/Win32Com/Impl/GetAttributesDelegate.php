<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class GetAttributesDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $AttribFlags
	 * @param \System\UInt16 $sfgaoMask
	 * @param \System\UInt16* $psfgaoAttribs
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $AttribFlags, $sfgaoMask, $psfgaoAttribs){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $AttribFlags
	 * @param \System\UInt16 $sfgaoMask
	 * @param \System\UInt16* $psfgaoAttribs
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $AttribFlags, $sfgaoMask, $psfgaoAttribs, $callback, $object){}
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
