<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeDriverLicenseAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeDriverLicense/jsz2.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example face
     *
     * @var string
     */
    public $side;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'side'           => 'Side',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->side) {
            $res['Side'] = $this->side;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeDriverLicenseAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['Side'])) {
            $model->side = $map['Side'];
        }

        return $model;
    }
}
