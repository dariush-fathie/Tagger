<?php
/**
 * Created by PhpStorm.
 * User: Royal
 * Date: 4/12/2019
 * Time: 11:50 PM
 */


class ParserImpl implements Parser
{
    private function __construct($input)
    {
        $node = new Node();

    }

    static function getInstance()
    {
        $instance = new ParserImpl("this is input");
        // todo call some methods here
        return $instance;
    }

    public function getRoots()
    {
        // TODO: Implement getRoots() method.
    }

    public function getChildrenOf($node)
    {
        // TODO: Implement getChildrenOf() method.
    }

    public function getFatherOf($node)
    {
        // TODO: Implement getFatherOf() method.
    }

    public function getAllRelationShipsOf($node)
    {
        // TODO: Implement getAllRelationShipsOf() method.
    }

}