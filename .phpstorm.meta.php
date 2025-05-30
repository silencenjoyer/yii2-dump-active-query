<?php

/* @noinspection ALL */

namespace PHPSTORM_META {

    override(\yii\db\BaseActiveRecord::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Db\ActiveQuery::class,
    ]));

    override(\yii\db\ActiveRecord::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Db\ActiveQuery::class,
    ]));

    expectedArguments(\yii\db\BaseActiveRecord::find(), 0, '');
    expectedArguments(\yii\db\ActiveRecord::find(), 0, '');
}
