<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusResponse;

use AlibabaCloud\Tea\Model;

class convertSteps extends Model
{
    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepStatus;

    /**
     * @var string
     */
    public $stepStartTime;
    protected $_name = [
        'stepName'      => 'StepName',
        'stepStatus'    => 'StepStatus',
        'stepStartTime' => 'StepStartTime',
    ];

    public function validate()
    {
        Model::validateRequired('stepName', $this->stepName, true);
        Model::validateRequired('stepStatus', $this->stepStatus, true);
        Model::validateRequired('stepStartTime', $this->stepStartTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
        }
        if (null !== $this->stepStartTime) {
            $res['StepStartTime'] = $this->stepStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return convertSteps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }
        if (isset($map['StepStartTime'])) {
            $model->stepStartTime = $map['StepStartTime'];
        }

        return $model;
    }
}
