<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_policy.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `AccessPolicy` is a container for `AccessLevels` (which define the necessary
 * attributes to use Google Cloud services) and `ServicePerimeters` (which
 * define regions of services able to freely pass data within a perimeter). An
 * access policy is globally visible within an organization, and the
 * restrictions it specifies apply to all projects within an organization.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.AccessPolicy</code>
 */
class AccessPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the `AccessPolicy`. Format:
     * `accessPolicies/{access_policy}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The parent of this `AccessPolicy` in the Cloud Resource
     * Hierarchy. Currently immutable once created. Format:
     * `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     */
    protected $parent = '';
    /**
     * Required. Human readable title. Does not affect behavior.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * The scopes of a policy define which resources an ACM policy can restrict,
     * and where ACM resources can be referenced.
     * For example, a policy with scopes=["folders/123"] has the following
     * behavior:
     * - vpcsc perimeters can only restrict projects within folders/123
     * - access levels can only be referenced by resources within folders/123.
     * If empty, there are no limitations on which resources can be restricted by
     * an ACM policy, and there are no limitations on where ACM resources can be
     * referenced.
     * Only one policy can include a given scope (attempting to create a second
     * policy which includes "folders/123" will result in an error).
     * Currently, scopes cannot be modified after a policy is created.
     * Currently, policies can only have a single scope.
     * Format: list of `folders/{folder_number}` or `projects/{project_number}`
     *
     * Generated from protobuf field <code>repeated string scopes = 7;</code>
     */
    private $scopes;
    /**
     * Output only. Time the `AccessPolicy` was created in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time the `AccessPolicy` was updated in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     */
    protected $update_time = null;
    /**
     * Output only. An opaque identifier for the current version of the
     * `AccessPolicy`. This will always be a strongly validated etag, meaning that
     * two Access Polices will be identical if and only if their etags are
     * identical. Clients should not expect this to be in any specific format.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the `AccessPolicy`. Format:
     *           `accessPolicies/{access_policy}`
     *     @type string $parent
     *           Required. The parent of this `AccessPolicy` in the Cloud Resource
     *           Hierarchy. Currently immutable once created. Format:
     *           `organizations/{organization_id}`
     *     @type string $title
     *           Required. Human readable title. Does not affect behavior.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *           The scopes of a policy define which resources an ACM policy can restrict,
     *           and where ACM resources can be referenced.
     *           For example, a policy with scopes=["folders/123"] has the following
     *           behavior:
     *           - vpcsc perimeters can only restrict projects within folders/123
     *           - access levels can only be referenced by resources within folders/123.
     *           If empty, there are no limitations on which resources can be restricted by
     *           an ACM policy, and there are no limitations on where ACM resources can be
     *           referenced.
     *           Only one policy can include a given scope (attempting to create a second
     *           policy which includes "folders/123" will result in an error).
     *           Currently, scopes cannot be modified after a policy is created.
     *           Currently, policies can only have a single scope.
     *           Format: list of `folders/{folder_number}` or `projects/{project_number}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time the `AccessPolicy` was created in UTC.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time the `AccessPolicy` was updated in UTC.
     *     @type string $etag
     *           Output only. An opaque identifier for the current version of the
     *           `AccessPolicy`. This will always be a strongly validated etag, meaning that
     *           two Access Polices will be identical if and only if their etags are
     *           identical. Clients should not expect this to be in any specific format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the `AccessPolicy`. Format:
     * `accessPolicies/{access_policy}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the `AccessPolicy`. Format:
     * `accessPolicies/{access_policy}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The parent of this `AccessPolicy` in the Cloud Resource
     * Hierarchy. Currently immutable once created. Format:
     * `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent of this `AccessPolicy` in the Cloud Resource
     * Hierarchy. Currently immutable once created. Format:
     * `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Human readable title. Does not affect behavior.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Required. Human readable title. Does not affect behavior.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The scopes of a policy define which resources an ACM policy can restrict,
     * and where ACM resources can be referenced.
     * For example, a policy with scopes=["folders/123"] has the following
     * behavior:
     * - vpcsc perimeters can only restrict projects within folders/123
     * - access levels can only be referenced by resources within folders/123.
     * If empty, there are no limitations on which resources can be restricted by
     * an ACM policy, and there are no limitations on where ACM resources can be
     * referenced.
     * Only one policy can include a given scope (attempting to create a second
     * policy which includes "folders/123" will result in an error).
     * Currently, scopes cannot be modified after a policy is created.
     * Currently, policies can only have a single scope.
     * Format: list of `folders/{folder_number}` or `projects/{project_number}`
     *
     * Generated from protobuf field <code>repeated string scopes = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * The scopes of a policy define which resources an ACM policy can restrict,
     * and where ACM resources can be referenced.
     * For example, a policy with scopes=["folders/123"] has the following
     * behavior:
     * - vpcsc perimeters can only restrict projects within folders/123
     * - access levels can only be referenced by resources within folders/123.
     * If empty, there are no limitations on which resources can be restricted by
     * an ACM policy, and there are no limitations on where ACM resources can be
     * referenced.
     * Only one policy can include a given scope (attempting to create a second
     * policy which includes "folders/123" will result in an error).
     * Currently, scopes cannot be modified after a policy is created.
     * Currently, policies can only have a single scope.
     * Format: list of `folders/{folder_number}` or `projects/{project_number}`
     *
     * Generated from protobuf field <code>repeated string scopes = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

    /**
     * Output only. Time the `AccessPolicy` was created in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time the `AccessPolicy` was created in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time the `AccessPolicy` was updated in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time the `AccessPolicy` was updated in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. An opaque identifier for the current version of the
     * `AccessPolicy`. This will always be a strongly validated etag, meaning that
     * two Access Polices will be identical if and only if their etags are
     * identical. Clients should not expect this to be in any specific format.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. An opaque identifier for the current version of the
     * `AccessPolicy`. This will always be a strongly validated etag, meaning that
     * two Access Polices will be identical if and only if their etags are
     * identical. Clients should not expect this to be in any specific format.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

