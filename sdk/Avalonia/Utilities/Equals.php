<?php
namespace Avalonia\Utilities;
/**
 */
class Equals extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Object|object $first
	 * @param \System\Object|object $second
	 * @return \System\Boolean
	 */
	public  function Invoke($first, $second){}
	/**
	 * @param \System\Object|object $first
	 * @param \System\Object|object $second
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($first, $second, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Boolean
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
