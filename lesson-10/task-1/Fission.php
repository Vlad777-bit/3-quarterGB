<?php

class Fission extends ATerm
{
    public function calc()
    {
        return $this->childrenLeft->calc() / $this->childrenRight->calc();
    }
}