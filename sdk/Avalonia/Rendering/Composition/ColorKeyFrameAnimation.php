<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ColorKeyFrameAnimationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function InsertKeyFrame_1($normalizedProgressKey, $value, $easingFunction){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function InsertKeyFrame_2($normalizedProgressKey, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimation_1($propertyName, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartAnimation_2($propertyName, $animation, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimationGroup_1($grp){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function StartAnimationGroup_2($grp, $target, $finalValue){}
}
/**
 */
class ColorKeyFrameAnimation extends \Avalonia\Rendering\Composition\Animations\KeyFrameAnimation implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
{
	/**
	 * @uses ColorKeyFrameAnimationMethodsOverride::InsertKeyFrame_1 ($normalizedProgressKey, $value, $easingFunction)
	 * @uses ColorKeyFrameAnimationMethodsOverride::InsertKeyFrame_2 ($normalizedProgressKey, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InsertKeyFrame(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalOnly(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses ColorKeyFrameAnimationMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses ColorKeyFrameAnimationMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses ColorKeyFrameAnimationMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses ColorKeyFrameAnimationMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimationGroup(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
}