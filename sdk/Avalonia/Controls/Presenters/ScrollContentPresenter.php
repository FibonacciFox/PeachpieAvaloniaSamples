<?php
namespace Avalonia\Controls\Presenters;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ScrollContentPresenterMethodsOverride
{
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] private  function TranslateBounds_1($control, $to){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TranslateBounds_2($control, $to, $bounds){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_1($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_2($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_1($routedEvent, $handler){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_2($routedEvent, $handler){}
	/**
	 * @return \Avalonia\Controls\Classes
	 */
	#[MethodOverride] public  function get_Classes_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_Classes_2(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] protected  function get_LogicalChildren_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_1($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_2($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_PropertyChanged_2($value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_1($property){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	#[MethodOverride] public  function get_Item_2($binding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_2($binding, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_1($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_2($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_3($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_4($property){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_2($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_3($property){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_1($property, $value, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_2($property, $value, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_2($property, $value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_1($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_2($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_3($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_4($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_5($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_6($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_7($property, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_1($property, $oldValue, $newValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_2($property, $oldValue, $newValue, $priority, $isEffectiveValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_2($property, $value){}
}
/**
 */
class ScrollContentPresenter extends \Avalonia\Controls\Presenters\ContentPresenter implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\IDataContextProvider,
	\Avalonia\LogicalTree\ILogical,
	\Avalonia\Styling\IThemeVariantHost,
	\Avalonia\Controls\IResourceHost,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Styling\IStyleHost,
	\Avalonia\Controls\ISetLogicalParent,
	\Avalonia\Controls\ISetInheritanceParent,
	\System\ComponentModel\ISupportInitialize,
	\Avalonia\Styling\IStyleable,
	\Avalonia\INamed,
	\Avalonia\Input\IInputElement,
	\Avalonia\Controls\Templates\IDataTemplateHost,
	\Avalonia\Rendering\IVisualBrushInitialize,
	\Avalonia\Styling\ISetterValue,
	\Avalonia\Controls\Primitives\IScrollable,
	\Avalonia\Controls\IScrollAnchorProvider
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanHorizontallyScroll(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_CanHorizontallyScroll($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanVerticallyScroll(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_CanVerticallyScroll($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Extent(){}
	/**
	 * @param \Avalonia\Size $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Extent($value){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Offset(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_Offset($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Viewport(){}
	/**
	 * @param \Avalonia\Size $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Viewport($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public  function get_HorizontalSnapPointsType(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalSnapPointsType($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public  function get_VerticalSnapPointsType(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalSnapPointsType($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public  function get_HorizontalSnapPointsAlignment(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalSnapPointsAlignment($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public  function get_VerticalSnapPointsAlignment(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalSnapPointsAlignment($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsScrollChainingEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsScrollChainingEnabled($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CurrentAnchor(){}
	/**
	 * @param \Avalonia\Visual $target
	 * @param \Avalonia\Rect $targetRect
	 * @return \System\Boolean
	 */
	public  function BringDescendantIntoView($target, $targetRect){}
	/**
	 * @return \System\Void|void
	 */
	protected  function AttachToScrollViewer(){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RegisterAnchorCandidate($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnregisterAnchorCandidate($element){}
	/**
	 * @param \Avalonia\Size $finalSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ArrangeWithAnchoring($finalSize){}
	/**
	 * @param \Avalonia\Size $viewportSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ComputeExtent($viewportSize){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\ScrollGestureEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnScrollGesture($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\ScrollGestureEndedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnScrollGestureEnded($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\ScrollGestureInertiaStartingEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnScrollGestureInertiaStartingEnded($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScrollSnapPointsInfoSnapPointsChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\RequestBringIntoViewEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BringIntoViewRequested($sender, $e){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChildChanged($e){}
	/**
	 * @param \Avalonia\Controls\Control $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateScrollableSubscription($child){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScrollInvalidated($sender, $e){}
	/**
	 * @param \Avalonia\Controls\Primitives\ILogicalScrollable $scrollable
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateFromScrollable($scrollable){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureAnchorElementSelection(){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @param \Avalonia\Rect& $bounds
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetViewportBounds($element, $bounds){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::TranslateBounds_1 ($control, $to)
	 * @uses ScrollContentPresenterMethodsOverride::TranslateBounds_2 ($control, $to, $bounds)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TranslateBounds(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateSnapPoints(){}
	/**
	 * @param \Avalonia\Vector $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SnapOffset($offset){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $snapPoints
	 * @param \System\Double|double $value
	 * @param \System\Double& $lowerSnapPoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindNearestSnapPoint($snapPoints, $value, $lowerSnapPoint){}
	/**
	 * @param \System\Object|object $content
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetScrollSnapPointsInfo($content){}
	/**
	 * @return \System\Void|void
	 */
	public  function UpdateChild(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsDataTemplatesInitialized(){}
	/**
	 * @param \Avalonia\Styling\SetterBase $setter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($setter){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureInitialized(){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses ScrollContentPresenterMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses ScrollContentPresenterMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::get_Classes_1 ()
	 * @uses ScrollContentPresenterMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::get_LogicalChildren_1 ()
	 * @uses ScrollContentPresenterMethodsOverride::get_LogicalChildren_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsAttachedToLogicalTree(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LogicalParent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsStylesInitialized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StylingParent(){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyAttachedToLogicalTree($e){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyDetachedFromLogicalTree($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyResourcesChanged($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyHostedResourcesChanged($e){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::SetParent_1 ($parent)
	 * @uses ScrollContentPresenterMethodsOverride::SetParent_2 ($parent)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetParent(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesAdded($styles){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesRemoved($styles){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ScrollContentPresenterMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ScrollContentPresenterMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::get_Item_1 ($property)
	 * @uses ScrollContentPresenterMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ScrollContentPresenterMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::ClearValue_1 ($property)
	 * @uses ScrollContentPresenterMethodsOverride::ClearValue_2 ($property)
	 * @uses ScrollContentPresenterMethodsOverride::ClearValue_3 ($property)
	 * @uses ScrollContentPresenterMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::GetValue_1 ($property)
	 * @uses ScrollContentPresenterMethodsOverride::GetValue_2 ($property)
	 * @uses ScrollContentPresenterMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ScrollContentPresenterMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ScrollContentPresenterMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ScrollContentPresenterMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ScrollContentPresenterMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ScrollContentPresenterMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ScrollContentPresenterMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ScrollContentPresenterMethodsOverride::Bind_5 ($property, $source)
	 * @uses ScrollContentPresenterMethodsOverride::Bind_6 ($property, $source)
	 * @uses ScrollContentPresenterMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ScrollContentPresenterMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ScrollContentPresenterMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ScrollContentPresenterMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
