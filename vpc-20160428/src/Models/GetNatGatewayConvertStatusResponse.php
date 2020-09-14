<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusResponse\convertSteps;
use AlibabaCloud\Tea\Model;

class GetNatGatewayConvertStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $dstNatType;

    /**
     * @var convertSteps[]
     */
    public $convertSteps;
    protected $_name = [
        'requestId'    => 'RequestId',
        'natGatewayId' => 'NatGatewayId',
        'bid'          => 'Bid',
        'aliUid'       => 'AliUid',
        'dstNatType'   => 'DstNatType',
        'convertSteps' => 'ConvertSteps',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('natGatewayId', $this->natGatewayId, true);
        Model::validateRequired('bid', $this->bid, true);
        Model::validateRequired('aliUid', $this->aliUid, true);
        Model::validateRequired('dstNatType', $this->dstNatType, true);
        Model::validateRequired('convertSteps', $this->convertSteps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->dstNatType) {
            $res['DstNatType'] = $this->dstNatType;
        }
        if (null !== $this->convertSteps) {
            $res['ConvertSteps'] = [];
            if (null !== $this->convertSteps && \is_array($this->convertSteps)) {
                $n = 0;
                foreach ($this->convertSteps as $item) {
                    $res['ConvertSteps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNatGatewayConvertStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['DstNatType'])) {
            $model->dstNatType = $map['DstNatType'];
        }
        if (isset($map['ConvertSteps'])) {
            if (!empty($map['ConvertSteps'])) {
                $model->convertSteps = [];
                $n                   = 0;
                foreach ($map['ConvertSteps'] as $item) {
                    $model->convertSteps[$n++] = null !== $item ? convertSteps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
