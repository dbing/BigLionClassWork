<?php


interface DataBase
{
    public function add($table,$data);


    public function delete($table,$where);

    public function save($table,$where);

    public function find($table,$where=1);

    public function select($table,$where=1);

    public function getField($table,$column,$where = 1);
}