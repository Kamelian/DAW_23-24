<!DOCTYPE html>
<html>
<body>



<?php
require 'student_class.php';

//$ricardo = new \Person\Student('Ricardo', '16147', 'ricardo@mail.com', 'Engenharia Informática');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = new \Person\Student( ($_POST['fStudentName']),
                                    ($_POST['fStudentNumber']),
                                    ($_POST['fStudentEmail']),
                                    ($_POST['fStudentCourse']));

    $student->addSubjectToSubjectList(  //$_POST['fsubjectID'],
                                        $_POST['fsubjectName'],
                                        //$_POST['fsubjectAccronym'],
                                        //$_POST['facademicYear'],
                                        $_POST['ffinalGrade']);

}

// DEBUGING - verifica o que foi criado no objecto. Sóp existe deposid e submeter o formulario
if (isset($student) == 1){
    var_dump($student);
}


?>

<!--FORMS-->
<form method="post" action="">
    <pre>Nome: <input type="text" name="fStudentName" id='fStudentName'></pre>
    <pre>Número: <input type="number" name="fStudentNumber"></pre>
    <pre>e-mail: <input type="email" name="fStudentEmail"></pre>
    <pre>Curso: <input type="text" name="fStudentCourse"></pre>

<!--    <pre>ID Disciplina: <input type="number" name="fsubjectID"></pre>-->
    <pre>Disciplina: <input type="text" name="fsubjectName"></pre>
<!--    <pre>Sigla: <input type="text" name="fsubjectAccronym"></pre>-->
<!--    <pre>Ano académico: <input type="text" name="facademicYear"></pre>-->
    <pre>Nota: <input type="number" name="ffinalGrade"></pre>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>


<!--Print information-->
<!--<h2>Nome: --><?php //echo $student->getName()?><!--</h2><br>-->
<!--<h2>Número: --><?php //echo $student->getNumber()?><!--</h2><br>-->
<!--<h2>e-mail: --><?php //echo $student->getEmail()?><!--</h2><br>-->
<!--<h2>Curso: --><?php //echo $student->getProgram()?><!--</h2><br>-->

</body>
</html>
