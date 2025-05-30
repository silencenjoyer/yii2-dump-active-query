<?php

namespace Silencenjoyer\DumpActiveQuery\Components\Behaviors;

use yii\base\Behavior;
use yii\base\InvalidCallException;
use yii\db\QueryInterface;

/**
 * @property QueryInterface|static $owner
 */
class DumpActiveQuery extends Behavior
{
    /**
     * @param string $method
     * @return never
     */
    protected function throwUnsupportedOwner(string $method): never
    {
        throw new InvalidCallException(sprintf('Unsupported owner for %s', $method));
    }

    /**
     * @param string $property
     * @param string $method
     * @return never
     */
    protected function ddPossibleProperty(string $property, string $method): never
    {
        if (!$this->owner->hasProperty($property)) {
            $this->throwUnsupportedOwner($method);
        }

        dd($this->owner->$property);
    }

    /**
     * @param string $method
     * @param string $calledMethod
     * @return void
     */
    protected function checkMethod(string $method, string $calledMethod): void
    {
        if (!$this->owner->hasMethod($method)) {
            $this->throwUnsupportedOwner($calledMethod);
        }
    }

    /**
     * @return never
     */
    public function ddCommand(): never
    {
        $this->checkMethod('createCommand', __METHOD__);

        dd($this->owner->createCommand());
    }

    /**
     * @return never
     */
    public function ddRawSql(): never
    {
        $this->checkMethod('createCommand', __METHOD__);

        dd($this->owner->createCommand()->getRawSql());
    }

    /**
     * @return never
     */
    public function ddWhere(): never
    {
        $this->ddPossibleProperty('where', __METHOD__);
    }

    public function ddWith(): never
    {
        $this->ddPossibleProperty('with', __METHOD__);
    }

    /**
     * @return never
     */
    public function ddJoinWith(): never
    {
        $this->ddPossibleProperty('joinWith', __METHOD__);
    }

    /**
     * @return never
     */
    public function ddGroupBy(): never
    {
        $this->ddPossibleProperty('groupBy', __METHOD__);
    }

    /**
     * @return never
     */
    public function ddHaving(): never
    {
        $this->ddPossibleProperty('having', __METHOD__);
    }

    /**
     * @param array $props
     * @return never
     */
    public function ddProps(array $props): never
    {
        $result = [];
        foreach ($props as $prop) {
            if ($this->owner->hasProperty($prop)) {
                $result[$prop] = $this->owner->$prop;
            }
        }

        dd($result);
    }

    /**
     * @return never
     */
    public function dd(): never
    {
        dd($this->owner);
    }
}
