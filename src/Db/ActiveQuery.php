<?php

namespace Silencenjoyer\DumpActiveQuery\Db;

class ActiveQuery extends \yii\db\ActiveQuery
{
    /**
     * @return never
     */
    public function ddCommand(): never
    {
        dd($this->createCommand());
    }

    /**
     * @return never
     */
    public function ddRawSql(): never
    {
        dd($this->createCommand()->getRawSql());
    }

    /**
     * @return never
     */
    public function ddWhere(): never
    {
        dd($this->where);
    }

    public function ddWith(): never
    {
        dd($this->with);
    }

    /**
     * @return never
     */
    public function ddJoinWith(): never
    {
        dd($this->joinWith);
    }

    /**
     * @return never
     */
    public function ddGroupBy(): never
    {
        dd($this->groupBy);
    }

    /**
     * @return never
     */
    public function ddHaving(): never
    {
        dd($this->having);
    }
}
