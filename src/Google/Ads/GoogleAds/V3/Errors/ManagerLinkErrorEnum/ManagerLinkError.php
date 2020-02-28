<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/errors/manager_link_error.proto

namespace Google\Ads\GoogleAds\V3\Errors\ManagerLinkErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ManagerLink errors.
 *
 * Protobuf type <code>google.ads.googleads.v3.errors.ManagerLinkErrorEnum.ManagerLinkError</code>
 */
class ManagerLinkError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The manager and client have incompatible account types.
     *
     * Generated from protobuf enum <code>ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING = 2;</code>
     */
    const ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING = 2;
    /**
     * Client is already linked to too many managers.
     *
     * Generated from protobuf enum <code>TOO_MANY_MANAGERS = 3;</code>
     */
    const TOO_MANY_MANAGERS = 3;
    /**
     * Manager has too many pending invitations.
     *
     * Generated from protobuf enum <code>TOO_MANY_INVITES = 4;</code>
     */
    const TOO_MANY_INVITES = 4;
    /**
     * Client is already invited by this manager.
     *
     * Generated from protobuf enum <code>ALREADY_INVITED_BY_THIS_MANAGER = 5;</code>
     */
    const ALREADY_INVITED_BY_THIS_MANAGER = 5;
    /**
     * The client is already managed by this manager.
     *
     * Generated from protobuf enum <code>ALREADY_MANAGED_BY_THIS_MANAGER = 6;</code>
     */
    const ALREADY_MANAGED_BY_THIS_MANAGER = 6;
    /**
     * Client is already managed in hierarchy.
     *
     * Generated from protobuf enum <code>ALREADY_MANAGED_IN_HIERARCHY = 7;</code>
     */
    const ALREADY_MANAGED_IN_HIERARCHY = 7;
    /**
     * Manger and sub-manager to be linked have duplicate client.
     *
     * Generated from protobuf enum <code>DUPLICATE_CHILD_FOUND = 8;</code>
     */
    const DUPLICATE_CHILD_FOUND = 8;
    /**
     * Client has no active user that can access the client account.
     *
     * Generated from protobuf enum <code>CLIENT_HAS_NO_ADMIN_USER = 9;</code>
     */
    const CLIENT_HAS_NO_ADMIN_USER = 9;
    /**
     * Adding this link would exceed the maximum hierarchy depth.
     *
     * Generated from protobuf enum <code>MAX_DEPTH_EXCEEDED = 10;</code>
     */
    const MAX_DEPTH_EXCEEDED = 10;
    /**
     * Adding this link will create a cycle.
     *
     * Generated from protobuf enum <code>CYCLE_NOT_ALLOWED = 11;</code>
     */
    const CYCLE_NOT_ALLOWED = 11;
    /**
     * Manager account has the maximum number of linked clients.
     *
     * Generated from protobuf enum <code>TOO_MANY_ACCOUNTS = 12;</code>
     */
    const TOO_MANY_ACCOUNTS = 12;
    /**
     * Parent manager account has the maximum number of linked clients.
     *
     * Generated from protobuf enum <code>TOO_MANY_ACCOUNTS_AT_MANAGER = 13;</code>
     */
    const TOO_MANY_ACCOUNTS_AT_MANAGER = 13;
    /**
     * The account is not authorized owner.
     *
     * Generated from protobuf enum <code>NON_OWNER_USER_CANNOT_MODIFY_LINK = 14;</code>
     */
    const NON_OWNER_USER_CANNOT_MODIFY_LINK = 14;
    /**
     * Your manager account is suspended, and you are no longer allowed to link
     * to clients.
     *
     * Generated from protobuf enum <code>SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS = 15;</code>
     */
    const SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS = 15;
    /**
     * You are not allowed to move a client to a manager that is not under your
     * current hierarchy.
     *
     * Generated from protobuf enum <code>CLIENT_OUTSIDE_TREE = 16;</code>
     */
    const CLIENT_OUTSIDE_TREE = 16;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING => 'ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING',
        self::TOO_MANY_MANAGERS => 'TOO_MANY_MANAGERS',
        self::TOO_MANY_INVITES => 'TOO_MANY_INVITES',
        self::ALREADY_INVITED_BY_THIS_MANAGER => 'ALREADY_INVITED_BY_THIS_MANAGER',
        self::ALREADY_MANAGED_BY_THIS_MANAGER => 'ALREADY_MANAGED_BY_THIS_MANAGER',
        self::ALREADY_MANAGED_IN_HIERARCHY => 'ALREADY_MANAGED_IN_HIERARCHY',
        self::DUPLICATE_CHILD_FOUND => 'DUPLICATE_CHILD_FOUND',
        self::CLIENT_HAS_NO_ADMIN_USER => 'CLIENT_HAS_NO_ADMIN_USER',
        self::MAX_DEPTH_EXCEEDED => 'MAX_DEPTH_EXCEEDED',
        self::CYCLE_NOT_ALLOWED => 'CYCLE_NOT_ALLOWED',
        self::TOO_MANY_ACCOUNTS => 'TOO_MANY_ACCOUNTS',
        self::TOO_MANY_ACCOUNTS_AT_MANAGER => 'TOO_MANY_ACCOUNTS_AT_MANAGER',
        self::NON_OWNER_USER_CANNOT_MODIFY_LINK => 'NON_OWNER_USER_CANNOT_MODIFY_LINK',
        self::SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS => 'SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS',
        self::CLIENT_OUTSIDE_TREE => 'CLIENT_OUTSIDE_TREE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ManagerLinkError::class, \Google\Ads\GoogleAds\V3\Errors\ManagerLinkErrorEnum_ManagerLinkError::class);

