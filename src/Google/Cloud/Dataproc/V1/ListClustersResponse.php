<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The list of all clusters in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ListClustersResponse</code>
 */
class ListClustersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output-only. The clusters in the project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Cluster clusters = 1;</code>
     */
    private $clusters;
    /**
     * Output-only. This token is included in the response if there are more
     * results to fetch. To fetch additional results, provide this value as the
     * `page_token` in a subsequent `ListClustersRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct();
    }

    /**
     * Output-only. The clusters in the project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Cluster clusters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * Output-only. The clusters in the project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.Cluster clusters = 1;</code>
     * @param \Google\Cloud\Dataproc\V1\Cluster[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClusters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\Cluster::class);
        $this->clusters = $arr;

        return $this;
    }

    /**
     * Output-only. This token is included in the response if there are more
     * results to fetch. To fetch additional results, provide this value as the
     * `page_token` in a subsequent `ListClustersRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Output-only. This token is included in the response if there are more
     * results to fetch. To fetch additional results, provide this value as the
     * `page_token` in a subsequent `ListClustersRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

