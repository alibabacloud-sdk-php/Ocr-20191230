<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data\signboards;

use AlibabaCloud\Tea\Model;

class texts extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int[]
     */
    public $points;
    protected $_name = [
        'type'   => 'Type',
        'score'  => 'Score',
        'tag'    => 'Tag',
        'label'  => 'Label',
        'points' => 'Points',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return texts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = $map['Points'];
            }
        }

        return $model;
    }
}
