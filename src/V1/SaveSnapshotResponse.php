<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to SaveSnapshotRequest.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.SaveSnapshotResponse</code>
 */
class SaveSnapshotResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The fully-resolved Cloud Storage path of the created snapshot,
     * e.g.:
     * "gs://my-bucket/snapshots/project_location_environment_timestamp".
     * This field is populated only if the snapshot creation was successful.
     *
     * Generated from protobuf field <code>string snapshot_path = 1;</code>
     */
    protected $snapshot_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $snapshot_path
     *           The fully-resolved Cloud Storage path of the created snapshot,
     *           e.g.:
     *           "gs://my-bucket/snapshots/project_location_environment_timestamp".
     *           This field is populated only if the snapshot creation was successful.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The fully-resolved Cloud Storage path of the created snapshot,
     * e.g.:
     * "gs://my-bucket/snapshots/project_location_environment_timestamp".
     * This field is populated only if the snapshot creation was successful.
     *
     * Generated from protobuf field <code>string snapshot_path = 1;</code>
     * @return string
     */
    public function getSnapshotPath()
    {
        return $this->snapshot_path;
    }

    /**
     * The fully-resolved Cloud Storage path of the created snapshot,
     * e.g.:
     * "gs://my-bucket/snapshots/project_location_environment_timestamp".
     * This field is populated only if the snapshot creation was successful.
     *
     * Generated from protobuf field <code>string snapshot_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshotPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot_path = $var;

        return $this;
    }

}

