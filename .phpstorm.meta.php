<?php

/* @noinspection ALL */

namespace PHPSTORM_META {

    override(\yii\db\ActiveRecordInterface::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Stubs\DumpedActiveQueryStub::class,
    ]));

    override(\yii\db\ActiveRecordInterface::find(0), map([
        '' => \Silencenjoyer\DumpActiveQuery\Stubs\DumpedActiveQueryStub::class,
    ]));

    expectedArguments(\yii\db\ActiveRecordInterface::find(), 0, '');
    expectedArguments(\yii\db\ActiveRecordInterface::find(), 0, '');
}
