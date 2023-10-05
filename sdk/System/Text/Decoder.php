<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecoderMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_1($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_2($bytes, $index, $count, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_3($bytes, $count, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_4($bytes, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_1($bytes, $byteIndex, $byteCount, $chars, $charIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_2($bytes, $byteIndex, $byteCount, $chars, $charIndex, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_3($bytes, $byteCount, $chars, $charCount, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_4($bytes, $chars, $flush){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_1($bytes, $byteIndex, $byteCount, $chars, $charIndex, $charCount, $flush, $bytesUsed, $charsUsed, $completed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_2($bytes, $byteCount, $chars, $charCount, $flush, $bytesUsed, $charsUsed, $completed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_3($bytes, $chars, $flush, $bytesUsed, $charsUsed, $completed){}
}
/**
 */
class Decoder extends \System\Text\DecoderNLS
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $bits;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $bitCount;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $firstByte;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_throwOnOverflow;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_bytesUsed;
	/**
	 * @var \System\Text\DecoderFallback
	 * @field
	 */
	protected $_fallback;
	/**
	 * @var \System\Text\DecoderFallbackBuffer
	 * @field
	 */
	protected $_fallbackBuffer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $MustFlush;
	/**
	 * @var \System\Text\DecoderFallback
	 * @property
	 */
	public $Fallback;
	/**
	 * @var \System\Text\DecoderFallbackBuffer
	 * @property
	 */
	public readonly $FallbackBuffer;
	/**
	 * @uses DecoderMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses DecoderMethodsOverride::GetCharCount_2 ($bytes, $index, $count, $flush)
	 * @uses DecoderMethodsOverride::GetCharCount_3 ($bytes, $count, $flush)
	 * @uses DecoderMethodsOverride::GetCharCount_4 ($bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses DecoderMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses DecoderMethodsOverride::GetChars_2 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $flush)
	 * @uses DecoderMethodsOverride::GetChars_3 ($bytes, $byteCount, $chars, $charCount, $flush)
	 * @uses DecoderMethodsOverride::GetChars_4 ($bytes, $chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses DecoderMethodsOverride::Convert_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DecoderMethodsOverride::Convert_2 ($bytes, $byteCount, $chars, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DecoderMethodsOverride::Convert_3 ($bytes, $chars, $flush, $bytesUsed, $charsUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
}
