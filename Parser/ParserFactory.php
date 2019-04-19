<?php
/**
 * Created by PhpStorm.
 * User: Royal
 * Date: 4/12/2019
 * Time: 11:55 PM
 */

class ParserFactory
{
    public static function createParser()
    {
        return ParserImpl::getInstance();
    }
}