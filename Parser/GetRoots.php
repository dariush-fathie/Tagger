<?php
/**
 * Created by PhpStorm.
 * User: Royal
 * Date: 4/12/2019
 * Time: 11:57 PM
 */

class GetRoots
{

    public $parser = null;

    private function __construct()
    {
        // todo send connection information to factory
        $this->parser = ParserFactory::createParser();

        $this->parser->getRoots();
    }


}