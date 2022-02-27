<?php

class Variable extends ATerm
{
    public function calc()
    {
        return $this->var;
    }
}