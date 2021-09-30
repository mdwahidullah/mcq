<?php
    error_reporting(0);
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];

    // echo " 1. $q1 <br>";
    // echo " 2. $q2 <br>";
    // echo " 3. $q3 <br>";

    if($q1=='Bangali'){
        echo "1. Your Answer is Correct <br>";
    }else{
        echo "1. Your Answer is Incorrect Your Correct Answer is Bangali<br>";
    }
    if($q2=='Graduate admissions (ex.: MBA, PhD)'){
        echo "2. Your Answer is Correct <br>";
    }else{
        echo "2. Your Answer is Incorrect Your Correct Answer is Bangali<br>";
    }
    if($q2=='All of the above'){
        echo "3. Your Answer is Correct <br>";
    }else{
        echo "3. Your Answer is Incorrect Your Correct Answer is All of the above<br>";
    }
    
    ?>