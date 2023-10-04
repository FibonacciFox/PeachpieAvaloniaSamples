<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IndexerExpressionNodeMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnEvent_1($sender, $ev, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnEvent_2($sender, $ev, $e){}
}
/**
 */
class IndexerExpressionNode extends \Avalonia\Data\Core\IndexerNodeBase implements 
	\Avalonia\Utilities\IWeakEventSubscriber_1,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function ShouldUpdate($sender, $e){}
	/**
	 * @uses IndexerExpressionNodeMethodsOverride::OnEvent_1 ($sender, $ev, $e)
	 * @uses IndexerExpressionNodeMethodsOverride::OnEvent_2 ($sender, $ev, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnEvent(mixed ...$args){}
}
