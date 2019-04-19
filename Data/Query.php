<?php
/**
 * Created by PhpStorm.
 * User: Royal
 * Date: 4/19/2019
 * Time: 10:58 AM
 */


class Query
{

    private function __construct()
    {
    }

    public static function select(): Selection
    {
        return new Selection();
    }

    public static function delete(): Deletion
    {
        return new Deletion();
    }

    public static function update(): Update
    {
        return new Update();
    }

    public static function insert(): Insertion
    {
        return new Insertion();
    }

}


class QueryBuilder
{
    public function __construct()
    {
    }

}

class RangeBuilder
{
    public function __construct()
    {
    }
}

class Insertion
{
    public function __construct()
    {
    }
}

class Deletion
{
    public function __construct()
    {
    }
}

class Update
{
    public function __construct()
    {
    }
}

class Selection implements Operations
{
    function __construct()
    {
    }

    function selectAll(): int
    {
        return 100;
    }


    function equalsTo(string $filed, $value)
    {

        return $this;
    }

    function between(string $field, $minValue, $maxValue)
    {
        // TODO: Implement between() method.

        return $this;
    }

    function greaterThan(string $filed, $value)
    {
        // TODO: Implement greaterThan() method.

        return $this;
    }

    function lessThan(string $filed, $value)
    {
        // TODO: Implement lessThan() method.

        return $this;
    }

    function distinct(string $filed)
    {
        // TODO: Implement distinct() method.
        return $this;
    }

    function groupBy()
    {
        // TODO: Implement groupBy() method.
        return $this;
    }

    function limit(int $num)
    {
        // TODO: Implement limit() method.
        return $this;
    }

    public function execute(): Result
    {
        // TODO: Implement execute() method.
        return new Result();
    }
}


interface Operations
{
    function equalsTo(string $filed, $value);

    function between(string $field, $minValue, $maxValue);

    function greaterThan(string $filed, $value);

    function lessThan(string $filed, $value);

    function distinct(string $filed);

    function groupBy();

    function limit(int $num);

    function execute();

}

class Result
{

}
