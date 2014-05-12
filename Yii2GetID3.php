<?php

namespace kato\getid3;

use GetId3\GetId3Core as GetId3;
use yii\web\NotFoundHttpException;

class Yii2GetID3 extends \yii\base\object
{
    public $filename;

    public function getData($filename)
    {
        $this->filename = $filename;

        $getId3 = new GetId3();
        $audio = $getId3
            ->setOptionMD5Data(true)
            ->setOptionMD5DataSource(true)
            ->setEncoding('UTF-8')
            ->analyze($filename);

        if (isset($audio['error'])) {
            throw new NotFoundHttpException(sprintf('Error at reading audio properties from "%s" with GetId3: %s.', $filename, $audio['error']));
        }

        return $audio;
    }

}
