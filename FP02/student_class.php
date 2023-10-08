<?php
namespace Person;
require 'grade_class.php';



class Student
{
    /*
     *   static - Declaring class properties or methods as static makes
     *    them accessible without needing an instantiation of the class.
     */


    /*
     * public - chamado de todo o lado, pode ser chamado directamente, pode ser extendido
     * protected - Apenas pode ser acedido por funções dentro da classe. Pode ser extendido
     * private - Apenas existe dentro da classe, só é aceddio por funções não é extendido
     */
    protected $studentName;
    protected $studentNumber;
    protected $studentEmail;
    protected $studentCourse;

    /*
     * Este array contêm a lista de disciplinas do aluno. Cada posição do array
     * será outro array que contêm o nome da disciplina, ano-lectivo (para diferenciar as disciplinas
     * repetidas), a nota e o status da disciplina.
     * [subjectName, academicYear, finalGrade, status]
     */
    protected $studentSubjectList = [];

    /**
     * @param $studentName
     * @param $studentNumber
     * @param $studentEmail
     * @param $studentCourse
     * @param array $studentSubjectList
     */
    public function __construct($studentName, $studentNumber, $studentEmail, $studentCourse)
    {
        $this->studentName = $studentName;
        $this->studentNumber = $studentNumber;
        $this->studentEmail = $studentEmail;
        $this->studentCourse = $studentCourse;
        $this->studentSubjectList = [];
    }


    /**
     * @return mixed
     */
    public function getStudentName() {
        return $this->studentName;
    }

    /**
     * @param mixed $studentName
     */
    public function setStudentName($studentName) {
        $this->studentName = $studentName;
    }

    /**
     * @return mixed
     */
    public function getStudentNumber() {
        return $this->studentNumber;
    }

    /**
     * @param mixed $studentNumber
     */
    public function setStudentNumber($studentNumber) {
        $this->studentNumber = $studentNumber;
    }

    /**
     * @return mixed
     */
    public function getStudentEmail() {
        return $this->studentEmail;
    }

    /**
     * @param mixed $studentEmail
     */
    public function setStudentEmail($studentEmail) {
        $this->studentEmail = $studentEmail;
    }

    /**
     * @return mixed
     */
    public function getStudentCourse() {
        return $this->studentCourse;
    }

    /**
     * @param mixed $studentCourse
     */
    public function setStudentCourse($studentCourse) {
        $this->studentCourse = $studentCourse;
    }

    /**
     * @return array
     */
    public function getStudentSubjectList()
    {
        return $this->studentSubjectList;
    }

    /**
     * @param array $studentSubjectList
     */
    public function setStudentSubjectList($studentSubjectList)
    {
        $this->studentSubjectList = $studentSubjectList;
    }



    public function addSubjectToSubjectList(/*$subjectId,*/ $subjectName, /*$subjectAccronym, $academicYear,*/ $finalGrade)
    {
        $gradeObject = new namespace\Grade(/*$subjectId,*/ $subjectName, /*$subjectAccronym, $academicYear,*/ $finalGrade);
        $this->studentSubjectList[] = $gradeObject;
    }


}