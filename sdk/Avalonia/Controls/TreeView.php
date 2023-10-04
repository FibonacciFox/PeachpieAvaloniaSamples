<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TreeViewMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Generators\TreeItemContainerGenerator
	 */
	#[MethodOverride] public  function get_ItemContainerGenerator_1(){}
	/**
	 * @return \Avalonia\Controls\Generators\ItemContainerGenerator
	 */
	#[MethodOverride] public  function get_ItemContainerGenerator_2(){}
	/**
	 * @return \Avalonia\Controls\TreeViewItem
	 */
	#[MethodOverride] private static function FindFirstNode_1($treeView, $nodeA, $nodeB){}
	/**
	 * @return \Avalonia\Controls\TreeViewItem
	 */
	#[MethodOverride] private static function FindFirstNode_2($node, $nodeA, $nodeB){}
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
class TreeView extends \Avalonia\Controls\ItemsControl implements 
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
	\Avalonia\LogicalTree\IChildIndexProvider,
	\Avalonia\Input\ICustomKeyboardNavigation
{
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_SelectionChanged($value){}
	/**
	 * @uses TreeViewMethodsOverride::get_ItemContainerGenerator_1 ()
	 * @uses TreeViewMethodsOverride::get_ItemContainerGenerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_ItemContainerGenerator(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AutoScrollToSelectedItem(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AutoScrollToSelectedItem($value){}
	/**
	 * @return \Avalonia\Controls\SelectionMode
	 */
	public  function get_SelectionMode(){}
	/**
	 * @param \Avalonia\Controls\SelectionMode $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionMode($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SelectedItem(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedItem($value){}
	/**
	 * @return \System\Collections\IList
	 */
	public  function get_SelectedItems(){}
	/**
	 * @param \System\Collections\IList $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedItems($value){}
	/**
	 * @param \Avalonia\Controls\TreeViewItem $item
	 * @return \System\Void|void
	 */
	public  function ExpandSubTree($item){}
	/**
	 * @param \Avalonia\Controls\TreeViewItem $item
	 * @return \System\Void|void
	 */
	public  function CollapseSubTree($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function SelectAll(){}
	/**
	 * @return \System\Void|void
	 */
	public  function UnselectAll(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetRealizedTreeContainers(){}
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Controls\Control
	 */
	public  function TreeContainerFromItem($item){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Object|object
	 */
	public  function TreeItemFromContainer($container){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SubscribeToSelectedItems(){}
	/**
	 * @param \System\Object|object $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SelectSingleItem($item){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SelectedItemsCollectionChanged($sender, $e){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Boolean $selected
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MarkItemSelected($item, $selected){}
	/**
	 * @param \System\Collections\IList $items
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SelectedItemsAdded($items){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnsubscribeFromSelectedItems(){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNext($element, $direction){}
	/**
	 * @param \Avalonia\Controls\TreeViewItem $from
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \System\Boolean $intoChildren
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetContainerInDirection($from, $direction, $intoChildren){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Boolean $select
	 * @param \System\Boolean $rangeModifier
	 * @param \System\Boolean $toggleModifier
	 * @param \System\Boolean $rightButton
	 * @return \System\Void|void
	 */
	protected  function UpdateSelectionFromContainer($container, $select, $rangeModifier, $toggleModifier, $rightButton){}
	/**
	 * @uses TreeViewMethodsOverride::FindFirstNode_1 ($treeView, $nodeA, $nodeB)
	 * @uses TreeViewMethodsOverride::FindFirstNode_2 ($node, $nodeA, $nodeB)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FindFirstNode(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\ItemsControl $itemsControl
	 * @param \Avalonia\Controls\TreeViewItem $nodeA
	 * @param \Avalonia\Controls\TreeViewItem $nodeB
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindInContainers($itemsControl, $nodeA, $nodeB){}
	/**
	 * @param \Avalonia\Controls\TreeViewItem $from
	 * @param \Avalonia\Controls\TreeViewItem $to
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetItemsInRange($from, $to){}
	/**
	 * @param \System\Object|object $eventSource
	 * @param \System\Boolean $select
	 * @param \System\Boolean $rangeModifier
	 * @param \System\Boolean $toggleModifier
	 * @param \System\Boolean $rightButton
	 * @return \System\Boolean
	 */
	protected  function UpdateSelectionFromEventSource($eventSource, $select, $rangeModifier, $toggleModifier, $rightButton){}
	/**
	 * @param \System\Object|object $eventSource
	 * @return \Avalonia\Controls\TreeViewItem
	 */
	protected  function GetContainerFromEventSource($eventSource){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ContainerSelectionChanged($e){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Boolean $selected
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MarkContainerSelected($container, $selected){}
	/**
	 * @param \System\Collections\IList $items
	 * @param \System\Collections\Generic\IEnumerable_1 $desired
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SynchronizeItems($items, $desired){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_ChildIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_ChildIndexChanged($value){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetChildIndex($child){}
	/**
	 * @param \System\Int32& $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetTotalCount($count){}
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
	 * @uses TreeViewMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TreeViewMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TreeViewMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::get_Classes_1 ()
	 * @uses TreeViewMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TreeViewMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses TreeViewMethodsOverride::SetParent_1 ($parent)
	 * @uses TreeViewMethodsOverride::SetParent_2 ($parent)
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
	 * @uses TreeViewMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TreeViewMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TreeViewMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::get_Item_1 ($property)
	 * @uses TreeViewMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TreeViewMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::ClearValue_1 ($property)
	 * @uses TreeViewMethodsOverride::ClearValue_2 ($property)
	 * @uses TreeViewMethodsOverride::ClearValue_3 ($property)
	 * @uses TreeViewMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::GetValue_1 ($property)
	 * @uses TreeViewMethodsOverride::GetValue_2 ($property)
	 * @uses TreeViewMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TreeViewMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TreeViewMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TreeViewMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TreeViewMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TreeViewMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TreeViewMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TreeViewMethodsOverride::Bind_5 ($property, $source)
	 * @uses TreeViewMethodsOverride::Bind_6 ($property, $source)
	 * @uses TreeViewMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TreeViewMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TreeViewMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TreeViewMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TreeViewMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
