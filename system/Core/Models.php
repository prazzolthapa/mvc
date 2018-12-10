<?php
/**
 * Created by PhpStorm.
 * User: prazzolthapa
 * Date: 12/10/18
 * Time: 1:10 PM
 */

namespace System\Core;

use System\DB\Mysql;


abstract class Models extends Mysql
{

 protected $table='';
 protected $pk='id';
 protected $sql='';
 protected $select='*';
 protected $conditions=null;
 protected $order=null;
 protected $offset=null;
 protected  $limit=null;

    public function  select($columns ='*'){
        if(is_array($columns)){
          $this->select = implode(',',$columns);
        }
        else{
            $this->select=$columns;
        }
        return $this;
    }


}