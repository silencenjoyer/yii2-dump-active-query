<?php

namespace Silencenjoyer\DumpActiveQuery;

use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\Module;
use yii\db\ActiveQuery;

class DumpActiveQueryModule extends Module implements BootstrapInterface
{
    /**
     * {@inheritDoc}
     * @param Application $app
     * @return void
     */
    public function bootstrap($app): void
    {
        $app->setContainer([
            'definitions' => [
                ActiveQuery::class => Db\ActiveQuery::class,
            ]
        ]);
    }
}
