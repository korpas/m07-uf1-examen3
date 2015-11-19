<?php


namespace AppBundle\Service;

class ExamenService
{
    private $op1;
    private $op2;
    private $result;


    public function __construct()
    {
        $this->result;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @param int $result
     */
    public function getResult()
    {
        return $this->result;
    }

    public function lenAction($op1)
    {

        $string = $op1;
        $cont = 0;
        for ($i = 0; $i < strlen($string); $i++) {
        $cont++;

        }
        return $this->result = $cont;
    }
    public function conAction()
    {
        $this->result = $this->op1.$this->op2;
    }
    public function chatAction($op1)
    {

    }
    public function frarrayAction($op1)
    {

    }
    public function lowAction($op1)
    {

        return $this->result = strtolower($op1);
    }
    public function upAction($op1)
    {

        return $this->result = strtoupper($op1);
    }

}