<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponseBody\data\emblem;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponseBody\data\QRCode;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponseBody\data\stamp;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponseBody\data\title;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var float
     */
    public $angle;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $capital;

    /**
     * @var emblem
     */
    public $emblem;

    /**
     * @var string
     */
    public $establishDate;

    /**
     * @var string
     */
    public $legalPerson;

    /**
     * @var string
     */
    public $name;

    /**
     * @var QRCode
     */
    public $QRCode;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var stamp
     */
    public $stamp;

    /**
     * @var title
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $validPeriod;
    protected $_name = [
        'address'        => 'Address',
        'angle'          => 'Angle',
        'business'       => 'Business',
        'capital'        => 'Capital',
        'emblem'         => 'Emblem',
        'establishDate'  => 'EstablishDate',
        'legalPerson'    => 'LegalPerson',
        'name'           => 'Name',
        'QRCode'         => 'QRCode',
        'registerNumber' => 'RegisterNumber',
        'stamp'          => 'Stamp',
        'title'          => 'Title',
        'type'           => 'Type',
        'validPeriod'    => 'ValidPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->capital) {
            $res['Capital'] = $this->capital;
        }
        if (null !== $this->emblem) {
            $res['Emblem'] = null !== $this->emblem ? $this->emblem->toMap() : null;
        }
        if (null !== $this->establishDate) {
            $res['EstablishDate'] = $this->establishDate;
        }
        if (null !== $this->legalPerson) {
            $res['LegalPerson'] = $this->legalPerson;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->QRCode) {
            $res['QRCode'] = null !== $this->QRCode ? $this->QRCode->toMap() : null;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->stamp) {
            $res['Stamp'] = null !== $this->stamp ? $this->stamp->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = null !== $this->title ? $this->title->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->validPeriod) {
            $res['ValidPeriod'] = $this->validPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['Capital'])) {
            $model->capital = $map['Capital'];
        }
        if (isset($map['Emblem'])) {
            $model->emblem = emblem::fromMap($map['Emblem']);
        }
        if (isset($map['EstablishDate'])) {
            $model->establishDate = $map['EstablishDate'];
        }
        if (isset($map['LegalPerson'])) {
            $model->legalPerson = $map['LegalPerson'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QRCode'])) {
            $model->QRCode = QRCode::fromMap($map['QRCode']);
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Stamp'])) {
            $model->stamp = stamp::fromMap($map['Stamp']);
        }
        if (isset($map['Title'])) {
            $model->title = title::fromMap($map['Title']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ValidPeriod'])) {
            $model->validPeriod = $map['ValidPeriod'];
        }

        return $model;
    }
}
