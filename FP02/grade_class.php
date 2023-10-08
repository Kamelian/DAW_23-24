<?php

namespace Person;

class Grade
{
    //public $subjectID;        // Código numérico que representa a disciplina
    public $subjectName;        // nome da disciplina
    //public $subjectAccronym;  //Sigla que representa a disciplina
    //public $academicYear;     // Ano académico em que foi a disciplina
    public $finalGrade;         // nota da disciplina
    public $status;             // Aprovado ou reprovado

    /**
     * @param $subjectID
     * @param $subjectName
     * @param $academicYear
     * @param $finalGrade
     */
    public function __construct(//$subjectID,
                                $subjectName,
                                //$subjectAccronym,
                                //$academicYear,
                                $finalGrade)
    {
        //$this->subjectID = $subjectID;
        $this->subjectName = $subjectName;
        //$this->subjectAccronym = $subjectAccronym;
        //$this->academicYear = $academicYear;
        $this->finalGrade = $finalGrade;
        //$this->finalGrade = $this->checkFinalGrade($finalGrade);
        $status = $this->calculateStatus($this->finalGrade); // calcula o status com base na finalGrade
        $this->status = $status; // atribui o valor calculado a variaável status, assim continua a poder existir GETTER E SETTER
        //$this->status = $this->calculateStatus($this->finalGrade);
    }

    /**
     * @return mixed
     */
    public function getSubjectID()
    {
        return $this->subjectID;
    }

    /**
     * @param mixed $subjectID
     */
    public function setSubjectID($subjectID)
    {
        $this->subjectID = $subjectID;
    }         // Estado em que está a disciplina

    /**
     * @return mixed
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param mixed $subjectName
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }

    /**
     * @return mixed
     */
    public function getSubjectAccronym()
    {
        return $this->subjectAccronym;
    }

    /**
     * @param mixed $subjectAccronym
     */
    public function setSubjectAccronym($subjectAccronym)
    {
        $this->subjectAccronym = $subjectAccronym;
    }

    /**
     * @return mixed
     */
    public function getAcademicYear()
    {
        return $this->academicYear;
    }

    /**
     * @param mixed $academicYear
     */
    public function setAcademicYear($academicYear)
    {
        $this->academicYear = $academicYear;
    }

    /**
     * @return mixed
     */
    public function getFinalGrade()
    {
        return $this->finalGrade;
    }

    /**
     * @param mixed $finalGrade
     */
    public function setFinalGrade($finalGrade)
    {
        $this->finalGrade = $finalGrade;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($tatus)
    {
        $this->status = $status;
    }

    /*
     * Vewrifica se a finalGrade está dentro dos limite (implementar função independente)
     *  e calcula o status com base na finalGrade.
     */
    protected function calculateStatus($grade){
        //Checks if the grade is valid
        switch ($grade){
            case $grade < 0:
                $grade = 0;
                echo "O valor minimo para uma nota é 0";
                break;
            case $grade > 20:
                $grade = 20;
                echo "O valor máximo para uma nota é 20";
                break;
        }

        $this->finalGrade = $grade; //Se o valor da grade for alterado passa-o para a final grade

        if($grade >= 9.5){
            return "Approved";
        }else{
            return "Disapproved";
        }
    }

}