<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCastCrewListRequest\params;
use AlibabaCloud\Tea\Model;

class RecognizeVideoCastCrewListRequest extends Model
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
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'params'      => 'Params',
        'registerUrl' => 'RegisterUrl',
        'videoUrl'    => 'VideoUrl',
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
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVideoCastCrewListRequest
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
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
