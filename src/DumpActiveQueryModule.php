<?php

namespace Silencenjoyer\DumpActiveQuery;

use Silencenjoyer\DumpActiveQuery\Components\Behaviors\DumpActiveQuery;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\Module;
use yii\db\ActiveQuery;

class DumpActiveQueryModule extends Module implements BootstrapInterface
{
    /**
     * @var list<class-string>
     */
    public array $queryClasses = [];

    /**
     * {@inheritDoc}
     * @param Application $app
     * @return void
     */
    public function bootstrap($app): void
    {
        if (!in_array(ActiveQuery::class, $this->queryClasses)) {
            $this->queryClasses[] = ActiveQuery::class;
        }

        foreach ($this->queryClasses as $queryClass) {
            $app->setContainer([
                'definitions' => [
                    $queryClass => [
                        'class' => $queryClass,
                        'as dumpQuery' => DumpActiveQuery::class,
                    ],
                ]
            ]);
        }
    }
}
