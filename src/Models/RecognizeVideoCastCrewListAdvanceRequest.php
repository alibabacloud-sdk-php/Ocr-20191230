<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListAdvanceRequest\params;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeVideoCastCrewListAdvanceRequest extends Model
{
    /**
     * @var params[]
     */
    public $params;

    /**
     * @var string
     */
    public $registerUrl;

    /**
     * @var Stream
     */
    public $videoUrlObject;
    protected $_name = [
        'params'         => 'Params',
        'registerUrl'    => 'RegisterUrl',
        'videoUrlObject' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['Params'] = [];
            if (null !== $this->params && \is_array($this->params)) {
                $n = 0;
                foreach ($this->params as $item) {
                    $res['Params'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->registerUrl) {
            $res['RegisterUrl'] = $this->registerUrl;
        }
        if (null !== $this->videoUrlObject) {
            $res['VideoUrl'] = $this->videoUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVideoCastCrewListAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n             = 0;
                foreach ($map['Params'] as $item) {
                    $model->params[$n++] = null !== $item ? params::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegisterUrl'])) {
            $model->registerUrl = $map['RegisterUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrlObject = $map['VideoUrl'];
        }

        return $model;
    }
}
