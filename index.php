<?php
include 'IIntroducable.php';
include 'Person.php';
include 'Student.php';
include 'Athlete.php';
include 'Executor.php';

$person1 = new Person('Rangel', 31);
$person1->introduceYourSelf();
echo '<br>';

$student1 = new Student('Peter', 22, 12345678);
$student1->introduceYourSelf();
echo '<br>';
//echo $student1;
Person::setNationality('US');

$athlete1 = new Athlete('Ivan', 25, 'tennis');
$athlete1->introduceYourSelf();
echo '<br>';

$executor1 = new Executor($athlete1);
$executor1->makeItSpeak();