<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVietnamIdentityCardResponseBody\data\expiryDate\keyPoints;
use AlibabaCloud\Tea\Model;

class expiryDate extends Model
{
    /**
     * @var keyPoints[]
     */
    public $keyPoints;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'keyPoints' => 'KeyPoints',
        'score'     => 'Score',
        'text'      => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPoints) {
            $res['KeyPoints'] = [];
            if (null !== $this->keyPoints && \is_array($this->keyPoints)) {
                $n = 0;
                foreach ($this->keyPoints as $item) {
                    $res['KeyPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expiryDate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPoints'])) {
            if (!empty($map['KeyPoints'])) {
                $model->keyPoints = [];
                $n                = 0;
                foreach ($map['KeyPoints'] as $item) {
                    $model->keyPoints[$n++] = null !== $item ? keyPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
