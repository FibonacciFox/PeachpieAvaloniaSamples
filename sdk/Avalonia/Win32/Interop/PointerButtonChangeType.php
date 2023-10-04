<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PointerButtonChangeType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case POINTER_CHANGE_NONE = 0;
	case POINTER_CHANGE_FIRSTBUTTON_DOWN = 1;
	case POINTER_CHANGE_FIRSTBUTTON_UP = 2;
	case POINTER_CHANGE_SECONDBUTTON_DOWN = 3;
	case POINTER_CHANGE_SECONDBUTTON_UP = 4;
	case POINTER_CHANGE_THIRDBUTTON_DOWN = 5;
	case POINTER_CHANGE_THIRDBUTTON_UP = 6;
	case POINTER_CHANGE_FOURTHBUTTON_DOWN = 7;
	case POINTER_CHANGE_FOURTHBUTTON_UP = 8;
	case POINTER_CHANGE_FIFTHBUTTON_DOWN = 9;
	case POINTER_CHANGE_FIFTHBUTTON_UP = 10;
}
