<?php
namespace System\Security\AccessControl;
/**
 */
class ObjectAuditRule extends \System\Security\AccessControl\AuditRule
{
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $ObjectType;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $InheritedObjectType;
	/**
	 * @var \System\Security\AccessControl\ObjectAceFlags
	 * @property
	 */
	public readonly $ObjectFlags;
	/**
	 * @var \System\Security\AccessControl\AuditFlags
	 * @property
	 */
	public readonly $AuditFlags;
	/**
	 * @var \System\Security\Principal\IdentityReference
	 * @property
	 */
	public readonly $IdentityReference;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInherited;
	/**
	 * @var \System\Security\AccessControl\InheritanceFlags
	 * @property
	 */
	public readonly $InheritanceFlags;
	/**
	 * @var \System\Security\AccessControl\PropagationFlags
	 * @property
	 */
	public readonly $PropagationFlags;
	/**
	 * @return \System\Guid
	 */
	public  function get_ObjectType(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_InheritedObjectType(){}
	/**
	 * @return \System\Security\AccessControl\ObjectAceFlags
	 */
	public  function get_ObjectFlags(){}
}
