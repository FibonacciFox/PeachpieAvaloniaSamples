<?php
namespace Avalonia\Native;
/**
 */
class AvnTextInputMethodClient extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnTextInputMethodClient
{
	/**
	 * @param \System\String|string $preeditText
	 * @return \System\Void|void
	 */
	public  function SetPreeditText($preeditText){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Void|void
	 */
	public  function SelectInSurroundingText($start, $end){}
}
