<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class TrimDocumentAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $fileURLObject;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $outputType;
    protected $_name = [
        'fileURLObject' => 'FileURLObject',
        'fileType'      => 'FileType',
        'outputType'    => 'OutputType',
    ];

    public function validate()
    {
        Model::validateRequired('fileURLObject', $this->fileURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURLObject) {
            $res['FileURLObject'] = $this->fileURLObject;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrimDocumentAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURLObject'])) {
            $model->fileURLObject = $map['FileURLObject'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
