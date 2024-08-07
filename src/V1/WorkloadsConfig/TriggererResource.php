<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for resources used by Airflow triggerers.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.TriggererResource</code>
 */
class TriggererResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The number of triggerers.
     *
     * Generated from protobuf field <code>int32 count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $count = 0;
    /**
     * Optional. CPU request and limit for a single Airflow triggerer replica.
     *
     * Generated from protobuf field <code>float cpu = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cpu = 0.0;
    /**
     * Optional. Memory (GB) request and limit for a single Airflow triggerer
     * replica.
     *
     * Generated from protobuf field <code>float memory_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $memory_gb = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $count
     *           Optional. The number of triggerers.
     *     @type float $cpu
     *           Optional. CPU request and limit for a single Airflow triggerer replica.
     *     @type float $memory_gb
     *           Optional. Memory (GB) request and limit for a single Airflow triggerer
     *           replica.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The number of triggerers.
     *
     * Generated from protobuf field <code>int32 count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Optional. The number of triggerers.
     *
     * Generated from protobuf field <code>int32 count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Optional. CPU request and limit for a single Airflow triggerer replica.
     *
     * Generated from protobuf field <code>float cpu = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Optional. CPU request and limit for a single Airflow triggerer replica.
     *
     * Generated from protobuf field <code>float cpu = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setCpu($var)
    {
        GPBUtil::checkFloat($var);
        $this->cpu = $var;

        return $this;
    }

    /**
     * Optional. Memory (GB) request and limit for a single Airflow triggerer
     * replica.
     *
     * Generated from protobuf field <code>float memory_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getMemoryGb()
    {
        return $this->memory_gb;
    }

    /**
     * Optional. Memory (GB) request and limit for a single Airflow triggerer
     * replica.
     *
     * Generated from protobuf field <code>float memory_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setMemoryGb($var)
    {
        GPBUtil::checkFloat($var);
        $this->memory_gb = $var;

        return $this;
    }

}


