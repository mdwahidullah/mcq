<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Application</title>
    <style>
       
        .mcqhead{
            background-color: teal;
            text-align: center;
            padding: 10px;
            font-size: 50px;
        }
        .quesrep{
            margin-left: 300px;
        }
        p{
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="mcqhead">MCQ Application Powered by  PHP</h1>
    <div class="quesrep">
    <form action="result.php" method="POST">
        <p>1. What is your Nationality ?</p>       

        A. <input required type="radio" name="q1" id="" value="Bangali">Bangali <br>
        B. <input required type="radio" name="q1" id="" value="Indian">Indian <br>
        C. <input required type="radio" name="q1" id="" value="Pakistany">Pakistany <br>
        D. <input required type="radio" name="q1" id="" value="Rohaigga">Rohingya

        <p>2. What are you interested in?</p>
        A. <input required type="radio" name="q2" id="" value="Undergraduate university admissions">Undergraduate university admissions <br>
        B. <input required type="radio" name="q2" id="" value="Graduate admissions (ex.: MBA, PhD)">Graduate admissions (ex.: MBA, PhD) <br>
        C. <input required type="radio" name="q2" id="" value="Middle or high school admissions">Middle or high school admissions <br>
        D. <input required type="radio" name="q2" id="" value="Applying for a job or promotion">Applying for a job or promotion

        <p>3. You should save your computer from?</p>
        A. <input required type="radio" name="q3" id="" value="Viruses">Viruses <br>
        B. <input required type="radio" name="q3" id="" value="Time bombs">Time bombs <br>
        C. <input required type="radio" name="q3" id="" value="Worms">Worms <br>
        D. <input required type="radio" name="q3" id="" value="All of the above">All of the above <br> <br>

        <p>4. Word Wide Web is being standard by</p>
        A. <input required type="radio" name="q4" id="" value="Worldwide corporatoin">Worldwide corporatoin <br>
        B. <input required type="radio" name="q4" id="" value="W3C">W3C <br>
        C. <input required type="radio" name="q4" id="" value="World Wide Consortium">World Wide Consortium <br>
        D. <input required type="radio" name="q4" id="" value="World Wide Web Standard">World Wide Web Standard <br> <br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        </form>
    </div>
   
</body>
</html>