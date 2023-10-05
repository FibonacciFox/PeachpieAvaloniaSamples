<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum PixelOffsetMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Default = 1;
	case HighSpeed = 2;
	case HighQuality = 3;
	case None = 4;
	case Half = -1;
}
