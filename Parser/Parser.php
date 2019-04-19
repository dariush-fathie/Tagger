<?php
/**
 * Created by PhpStorm.
 * User: Royal
 * Date: 4/12/2019
 * Time: 11:34 PM
 */

interface Parser
{

    function getRoots();

    function getChildrenOf($node);

    function getFatherOf($node);

    function getAllRelationShipsOf($node);

}