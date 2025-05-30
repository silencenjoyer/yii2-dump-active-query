<?php

/* @noinspection ALL */

namespace PHPSTORM_META {

    override(\yii\db\BaseActiveRecord::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Components\Behaviors\DumpActiveQuery::class,
    ]));

    override(\yii\db\ActiveRecord::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Components\Behaviors\DumpActiveQuery::class,
    ]));

    expectedArguments(\yii\db\BaseActiveRecord::find(), 0, '');
    expectedArguments(\yii\db\ActiveRecord::find(), 0, '');
}
