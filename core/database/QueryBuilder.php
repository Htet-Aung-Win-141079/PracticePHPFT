<?php

class QueryBuilder{
    protected $pdoo;
    public function __construct($pdooo)
    {
        $this->pdoo=$pdooo;
    }
    public function selectAll($table){
        $stmt=$this->pdoo->prepare("select * from $table");
        $stmt->execute();
        //print_r($stmt->fetchAll(PDO::FETCH_OBJ));
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //L-25 dynamic insert with query builder insert method
    public function insert($dataArr,$table){
        //$sql="insert into $table ($cols) values (?)";
        $getDataKeys=array_keys($dataArr); //name
        //dd($getDataKeys);
        $questionMark="";
        $cols=implode(",",$getDataKeys); // name array to string with ,
        foreach($getDataKeys as $key){
            $questionMark.="?,";
        }
        $questionMark=rtrim($questionMark,",");
        $sql=$this->pdoo->prepare("insert into $table($cols) values ($questionMark)");
        $getDataValues=array_values($dataArr);
        $sql->execute($getDataValues);

        header("Location: /");


    }
}

?>