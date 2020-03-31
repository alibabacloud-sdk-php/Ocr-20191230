<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeVATInvoiceRequest extends Model
{
    public $fileURL;
    public $fileType;
    protected $_required = [
        'fileURL'  => true,
        'fileType' => true,
    ];
    protected $_name = [
        'fileURL'  => 'FileURL',
        'fileType' => 'FileType',
    ];
    protected $_description = [
        'fileURL'  => 'fileUrl',
        'fileType' => 'fileType',
    ];
}
