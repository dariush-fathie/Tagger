<?php
/**
 * Created by PhpStorm.
 * User: Royal
 * Date: 4/19/2019
 * Time: 11:13 AM
 */


function query()
{

    $query = Query::select()
        ->equalsTo("id", 10)
        ->between("size", 15, 18)
        ->execute();
    
}