<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;
use AlibabaCloud\Tea\Model;

class GetSmartHandleJobResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $FEExtend;

    /**
     * @var smartJobInfo
     */
    public $smartJobInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'jobId'        => 'JobId',
        'output'       => 'Output',
        'state'        => 'State',
        'userData'     => 'UserData',
        'FEExtend'     => 'FEExtend',
        'smartJobInfo' => 'SmartJobInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->FEExtend) {
            $res['FEExtend'] = $this->FEExtend;
        }
        if (null !== $this->smartJobInfo) {
            $res['SmartJobInfo'] = null !== $this->smartJobInfo ? $this->smartJobInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmartHandleJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['FEExtend'])) {
            $model->FEExtend = $map['FEExtend'];
        }
        if (isset($map['SmartJobInfo'])) {
            $model->smartJobInfo = smartJobInfo::fromMap($map['SmartJobInfo']);
        }

        return $model;
    }
}
