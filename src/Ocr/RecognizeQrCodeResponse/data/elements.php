<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeQrCodeResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $taskId;
    public $imageURL;
    public $results;
    protected $_required = [
        'taskId'   => true,
        'imageURL' => true,
        'results'  => true,
    ];
    protected $_name = [
        'taskId'   => 'TaskId',
        'imageURL' => 'ImageURL',
        'results'  => 'Results',
    ];
    protected $_description = [
        'taskId'   => 'taskId',
        'imageURL' => 'imageUrl',
        'results'  => 'results',
    ];
}
