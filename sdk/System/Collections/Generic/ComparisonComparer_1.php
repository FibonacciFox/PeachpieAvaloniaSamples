<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ComparisonComparer_1MethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Compare_2($x, $y){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ComparisonComparer_1 extends \System\Collections\Generic\Comparer_1 implements 
	\System\Collections\IComparer,
	\System\Collections\Generic\IComparer_1
{
	/**
	 * @uses ComparisonComparer_1MethodsOverride::Compare_1 ($x, $y)
	 * @uses ComparisonComparer_1MethodsOverride::Compare_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
}
