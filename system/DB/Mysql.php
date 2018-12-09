<?php
/**
 * Created by PhpStorm.
 * User: prazzolthapa
 * Date: 12/9/18
 * Time: 1:14 PM
 */

namespace System\DB;


class Mysql
{
    protected $con=null;
    protected $result=null;
    protected $last_query=null;


public function __construct($host,$name,$user,$pass='')
{
    $this->con = new \PDD("mysql:host={$host};dbname={$name}",$user,$pass);
    $this->con->setAttribute(\PDO:ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
}
public  function query($sql){
    $this->last_query=$sql;
    $this->result=$this->con->prepare($sql);
    $this->result->execute();
    return $this->result;
}
public function num_rows()
{
    return $this->result->rowCount();

}
public  function last_id()
{
    return $this->con->lastInsert();
}
    public  function last_query()
    {
        return $this->last_query();

    }
}