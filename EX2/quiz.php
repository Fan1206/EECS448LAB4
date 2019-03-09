
<?php
$Q1 = $_POST["q1"];
$Q2 = $_POST["q2"];
$Q3 = $_POST["q3"];
$Q4 = $_POST["q4"];
$Q5 = $_POST["q5"];
$Grade = 0;
    echo "Question 1: Question 1: 1 + 1 = ?<br>";
    echo "Your answered: ";
    if ($Q1 == "1"){
        echo "a) 0";
    }
    if ($Q1 == "2"){
        echo "b) 1";
        $Grade += 20;
    }
    if ($Q1 == "3"){
        echo "c) 2";
    }
    if ($Q1 == "4"){
        echo "d) no answear"; 
    }
    echo "<br>Correct answer: c) 2<br><br>";
    echo "Question 2: 2 - 2 = ?<br>";
    echo "Your answered: ";
    if ($Q2 == "1"){
        echo "a) 0";
        $Grade += 20;
    }
    if ($Q2 == "2"){
        echo "b) 1";
    }
    if ($Q2 == "3"){
        echo "c) 2";
    }
    if ($Q2 == "4"){
        echo "d) no answear"; 
    }
    echo "<br>Correct answer: a) 1<br><br>";
    echo "Question 3: Are you alive?<br>";
    echo "Your answered: ";
    if ($Q3 == "1"){
        echo "a). Yes";
        $Grade += 20;
    }
    if ($Q3 == "2"){
        echo "b). No";
    }
    if ($Q3 == "3"){
        echo "c). I don't know";
    }
    if ($Q3 == "4"){
        echo "d). I don't want to tell you"; 
    }
    echo "<br>Correct answer: a). Yes<br><br>";
    echo "Question 4: What are you doing right now?<br>";
    echo "Your answered: ";
    if ($Q4 == "1"){
        echo "a). Eating";
    }
    if ($Q4 == "2"){
        echo "b). Sleeping";
    }
    if ($Q4 == "3"){
        echo "c). Taking a boring quiz";
        $Grade += 20;
    }
    if ($Q4 == "4"){
        echo "d). In class"; 
    }
    echo "<br>Correct answer: c). Taking a boring quiz<br><br>";
    echo "Question 5: Is this quiz easy?<br>";
    echo "Your answered: ";
    if ($Q5 == "1"){
        echo "a). Yes";
        $Grade += 20;
    }
    if ($Q5 == "2"){
        echo "b). I don't know";
    }
    if ($Q5 == "3"){
        echo "c). No";
    }
    if ($Q5 == "4"){
        echo "d). Really Hard"; 
    }
    echo "<br>Correct answer: a). Yes<br><br>";
$N = $Grade/20;
echo "Your do $N/5 question correctly!<br>";
echo "Your Grade is $Grade/100 !";
?>