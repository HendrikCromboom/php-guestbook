<?php

Class Filter{
    private array $list;

    public function checkList($name, $author, $message):bool
    {
        $total = $name.$author.$message;
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $total))
        {
            return false;
        }else{return true;}
    }
}