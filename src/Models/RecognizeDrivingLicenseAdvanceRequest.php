<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeDrivingLicenseAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var string
     */
    public $side;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'side'           => 'Side',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->side) {
            $res['Side'] = $this->side;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeDrivingLicenseAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['Side'])) {
            $model->side = $map['Side'];
        }

        return $model;
    }
}
