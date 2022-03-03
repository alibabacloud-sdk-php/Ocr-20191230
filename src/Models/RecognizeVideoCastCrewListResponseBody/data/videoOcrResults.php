<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults\detailInfoes;
use AlibabaCloud\Tea\Model;

class videoOcrResults extends Model
{
    /**
     * @var detailInfoes[]
     */
    public $detailInfoes;

    /**
     * @var float
     */
    public $endTime;

    /**
     * @var float
     */
    public $startTime;
    protected $_name = [
        'detailInfoes' => 'DetailInfoes',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailInfoes) {
            $res['DetailInfoes'] = [];
            if (null !== $this->detailInfoes && \is_array($this->detailInfoes)) {
                $n = 0;
                foreach ($this->detailInfoes as $item) {
                    $res['DetailInfoes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoOcrResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailInfoes'])) {
            if (!empty($map['DetailInfoes'])) {
                $model->detailInfoes = [];
                $n                   = 0;
                foreach ($map['DetailInfoes'] as $item) {
                    $model->detailInfoes[$n++] = null !== $item ? detailInfoes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
