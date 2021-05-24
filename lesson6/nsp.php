<?php

namespace WE16101;
class Student{

}


namespace CP16231;
use WE16101\Student as Student_S3;
class Student {

}

$c = new Student_S3();

namespace workspace;
use WE16101\Student;
use CP16231\Student as Student_S2;

$a = new Student();
$b = new Student_S2();
var_dump($a, $b, $c);



?>