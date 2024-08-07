<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1\PollAirflowCommandResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about how a command ended.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.PollAirflowCommandResponse.ExitInfo</code>
 */
class ExitInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The exit code from the command execution.
     *
     * Generated from protobuf field <code>int32 exit_code = 1;</code>
     */
    protected $exit_code = 0;
    /**
     * Error message. Empty if there was no error.
     *
     * Generated from protobuf field <code>string error = 2;</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $exit_code
     *           The exit code from the command execution.
     *     @type string $error
     *           Error message. Empty if there was no error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The exit code from the command execution.
     *
     * Generated from protobuf field <code>int32 exit_code = 1;</code>
     * @return int
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * The exit code from the command execution.
     *
     * Generated from protobuf field <code>int32 exit_code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setExitCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->exit_code = $var;

        return $this;
    }

    /**
     * Error message. Empty if there was no error.
     *
     * Generated from protobuf field <code>string error = 2;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Error message. Empty if there was no error.
     *
     * Generated from protobuf field <code>string error = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}


