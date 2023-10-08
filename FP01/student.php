<!DOCTYPE html>
<html>
<body>

<?php
class Student{
    // declare variables
    private $name;
    private $number;
    private $email;
    private $program;

    // must have subjectName, grade and status
    private $subjectList = array();

        public function setName($name){
            $this->name=$name;
        }

        public function getName(){
            return $this->name;
        }

        public function setNumber($number){
            $this->number=$number;
        }

        public function getNumber(){
            return $this->number;
        }

        public function setEmail($email){
            $this->email=$email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setProgram($program){
            $this->program=$program;
        }

        public function getProgram(){
            return $this->program;
        }

        public function setSubjectList($subjectName,$grade){
            $status=null;
            if($grade>=0 and $grade >9.4 and $grade <=20){
                $status="Approved";
            }else if($grade>=0 and $grade <9.5 and $grade <=20){
                $status="Dissaproved";
            }else{
                $status="Dissaproved"; // ADD CONDITION TO ERROR IN GRADE
            }
            array_push($this->subjectList,$subjectName,$grade,$status);
        }

        public function getSubjectList(){
            return $this->subjectList;
        }

        public function printStudentSubjects($subjectList){
            $headerLine = array("Disciplina","Nota","Estado");
            echo("<table>");
            echo("<tr>");
            for($i=0; $i< count($headerLine); $i++){
                echo("<th>".$headerLine[$i]."</th>");
            }
            echo("</tr>");


            echo("<tr>");
            for($i=0; $i< count($subjectList); $i++){
                echo("<td>".$subjectList[$i]."</td>");
            }
            echo("</tr>");

        }

} //END class student

// Instanciate new object
$student= new Student();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student->setName($_POST['fname']);
    $student->setNumber($_POST['fnumber']);
    $student->setEmail($_POST['femail']);
    $student->setProgram($_POST['fprogram']);
    $student->setSubjectList($_POST['fsubject'], $_POST['fgrade']);
}

//$student->printStudentSubjects($student->getSubjectList());

//$student->setName('Ricardo');
//$student->setNumber('16145');
//$student->setEmail('ricardo@mail.com');
//$student->setProgram('eng. Informatica');

//$name = $student->getName();
//$number = $student->getNumber();
//$email = $student->getEmail();
//$program = $student->getProgram();

//print $student->getName()."<br>";
//print $student->getNumber()."<br>";
//print $student->getEmail()."<br>";
//print $student->getProgram()."<br>";

//print $student->getSubjectList()[0]."<br>";
//print $student->getSubjectList()[1]."<br>";
//print $student->getSubjectList()[2]."<br>";


?>
<!--FORMS-->
<form method="post" action="">
    <pre>Nome: <input type="text" name="fname" id='fname'></pre>
    <pre>Número: <input type="number" name="fnumber"></pre>
    <pre>e-mail: <input type="text" name="femail"></pre>
    <pre>Curso: <input type="text" name="fprogram"></pre>

    <pre>Disciplina: <input type="text" name="fsubject"></pre>
    <pre>Nota: <input type="text" name="fgrade"></pre>

    <input type="submit" value="Submit">
</form>

<!--Print information-->
<h2>Nome: <?php echo $student->getName()?></h2><br>
<h2>Número: <?php echo $student->getNumber()?></h2><br>
<h2>e-mail: <?php echo $student->getEmail()?></h2><br>
<h2>Curso: <?php echo $student->getProgram()?></h2><br>

<!--Function that builds html table-->
<?php $student->printStudentSubjects($student->getSubjectList()); ?>

</body>
</html>
