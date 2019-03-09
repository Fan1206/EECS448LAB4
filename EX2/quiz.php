
<?php
    $Q1 = $_POST["q1"];
    $Q2 = $_POST["q2"];
    $Q3 = $_POST["q3"];
    $Q4 = $_POST["q4"];
    $Q5 = $_POST["q5"];
    $Correct = 0;
    
    echo "Question 1: Question 1: 1 + 1 = ?<br>";
    echo "Your answer is: ";
    if ($Q1 == "1"){
        echo "a) 0";
    }
    if ($Q1 == "2"){
        echo "b) 1";
    }
    if ($Q1 == "3"){
        echo "c) 2";
        $Correct += 1;
    }
    if ($Q1 == "4"){
        echo "d) no answer";
    }
    echo "<br>Correct answer: c) 2<br><br>";
    
    
    
    echo "Question 2: 2 - 2 = ?<br>";
    echo "Your answer is: ";
    if ($Q2 == "1"){
        echo "a) 0";
        $Correct += 1;
    }
    if ($Q2 == "2"){
        echo "b) 1";
    }
    if ($Q2 == "3"){
        echo "c) 2";
    }
    if ($Q2 == "4"){
        echo "d) no answer";
    }
    echo "<br>Correct answer: a) 0<br><br>";
    
    
    echo "Question 3: 3 / 3= ? <br>";
    echo "Your answer is: ";
    if ($Q3 == "1"){
        echo "a) 0";
    }
    if ($Q3 == "2"){
        echo "b) 1";
        $Correct += 1;
    }
    if ($Q3 == "3"){
        echo "c) 2";
    }
    if ($Q3 == "4"){
        echo "d) no answer";
    }
    echo "<br>Correct answer: b) 1<br><br>";
    
    
    echo "Question 4: 4 + 4 - 8 = ?<br>";
    echo "Your answer is: ";
    if ($Q4 == "1"){
        echo "a) 0";
        $Correct += 1;
    }
    if ($Q4 == "2"){
        echo "b) 1";
    }
    if ($Q4 == "3"){
        echo "c) 2";
    }
    if ($Q4 == "4"){
        echo "d) no answer";
    }
    echo "<br>Correct answer: a) 0<br><br>";
    
    
    echo "Question 5: 5 + 5 = ?<br>";
    echo "Your answered: ";
    if ($Q5 == "1"){
        echo "a) 0";
    }
    if ($Q5 == "2"){
        echo "b) 10";
        $Correct += 1;
    }
    if ($Q5 == "3"){
        echo "c) 20";
    }
    if ($Q5 == "4"){
        echo "d) no answer";
    }
    echo "<br>Correct answer: b) 10<br><br>";
    $Score= 20 * $Correct ;
    echo "Your did $Correct/5 questions correctly!<br>";
   
    echo "Your Grade is $Score/100, receive $Score%!";
    ?>
