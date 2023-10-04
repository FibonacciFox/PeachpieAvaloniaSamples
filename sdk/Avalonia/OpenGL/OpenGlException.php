<?php
namespace Avalonia\OpenGL;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OpenGlExceptionMethodsOverride
{
	/**
	 * @return \Avalonia\OpenGL\OpenGlException
	 */
	#[MethodOverride] public static function GetFormattedException_1($funcName, $egl){}
	/**
	 * @return \Avalonia\OpenGL\OpenGlException
	 */
	#[MethodOverride] public static function GetFormattedException_2($funcName, $gl){}
	/**
	 * @return \Avalonia\OpenGL\OpenGlException
	 */
	#[MethodOverride] public static function GetFormattedException_3($funcName, $errorCode){}
	/**
	 * @return \Avalonia\OpenGL\OpenGlException
	 */
	#[MethodOverride] private static function GetFormattedException_4($funcName, $errorCode, $intErrorCode){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
}
/**
 */
class OpenGlException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_ErrorCode(){}
	/**
	 * @uses OpenGlExceptionMethodsOverride::GetFormattedException_1 ($funcName, $egl)
	 * @uses OpenGlExceptionMethodsOverride::GetFormattedException_2 ($funcName, $gl)
	 * @uses OpenGlExceptionMethodsOverride::GetFormattedException_3 ($funcName, $errorCode)
	 * @uses OpenGlExceptionMethodsOverride::GetFormattedException_4 ($funcName, $errorCode, $intErrorCode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFormattedException(mixed ...$args){}
	/**
	 * @param \System\String|string $funcName
	 * @param \System\Int32|int $errorCode
	 * @return \Avalonia\OpenGL\OpenGlException
	 */
	public static function GetFormattedEglException($funcName, $errorCode){}
	/**
	 * @uses OpenGlExceptionMethodsOverride::GetType_1 ()
	 * @uses OpenGlExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
