<?php

/* @noinspection ALL */

namespace PHPSTORM_META {

    override(\yii\db\BaseActiveRecord::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Stubs\DumpedActiveQueryStub::class,
    ]));

    override(\yii\db\ActiveRecord::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Stubs\DumpedActiveQueryStub::class,
    ]));

    expectedArguments(\yii\db\BaseActiveRecord::find(), 0, '');
    expectedArguments(\yii\db\ActiveRecord::find(), 0, '');
}
