<?php 

if($_COOKIE['voted'] == 'true')
        header('Location: http://dokinetix.com/Survey/results.php');

?>


<html>
        <head>
                <link rel="stylesheet" type="text/css" href="../css/master.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <script src="../js/main.js"></script>
                <title>Survey</title>
        </head>
        <body class="background">
                <div class="col-md-8 col-md-offset-2 survey">
                        <div class="row">
                                <div class="surveyHeader">
                                        <hr class="head">
                                                Awesome Survey
                                        <hr class="head">
                                </div>
                        </div>
                        <form action="process.php" method="post">
                                <div class="row surveyQuestion">
                                        Which is the best band? 
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-2 col-md-offset-1 surveyAnswer">
                                                                <input type="radio" name="band" value="Dave Matthews Band">
                                                                Dave Matthews Band<br/>
                                                                <input type="radio" name="band" value="Daft Punk">
                                                                Daft Punk
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="band" value="Journey">
                                                                Journey<br/>
                                                                <input type="radio" name="band" value="Led Zeppelin">
                                                                Led Zeppelin
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="band" value="CCR">
                                                                CCR<br/>
                                                                <input type="radio" name="band" value="Red Hot Chili Peppers">
                                                                Red Hot Chili Peppers
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row surveyQuestion">
                                        What is your favorite place to eat?
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-2 col-md-offset-1 surveyAnswer">
                                                                <input type="radio" name="eat" value="Johnny Carino's">
                                                                Johnny Carino's<br/>
                                                                <input type="radio" name="eat" value="Texas Roadhouse">
                                                                Texas Roadhouse
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="eat" value="Red Lobster">
                                                                Red Lobster<br/>
                                                                <input type="radio" name="eat" value="Buffalo Wild Wings">
                                                                Buffalo Wild Wings
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="eat" value="Firehouse Subs">
                                                                Firehouse Subs<br/>
                                                                <input type="radio" name="eat" value="Five Guy's">
                                                                Five Guy's
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row surveyQuestion">
                                        <!-- <div class="tooltip tooltip-left really">
                                        Do you really have a
                                        favorite data structure?
                                        </div> -->
                                        What is your favorite data structure?
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-2 col-md-offset-1 surveyAnswer">
                                                                <input type="radio" name="data" value="Linked list">
                                                                Linked list<br/>
                                                                <input type="radio" name="data" value="Vector">
                                                                Vector
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="data" value="Array">
                                                                Array<br/>
                                                                <input type="radio" name="data" value="Map">
                                                                Map
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="data" value="Your own">
                                                                Your own<br/>
                                                                <input type="radio" name="data" value="None">
                                                                None
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row surveyQuestion">
                                        Do you know what it takes? 
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-2 col-md-offset-1 surveyAnswer">
                                                                <input type="radio" name="know" value="Yes">
                                                                Yes<br/>
                                                                <input type="radio" name="know" value="No">
                                                                No
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="know" value="Maybe">
                                                                Maybe<br/>
                                                                <input type="radio" name="know" value="It takes something?">
                                                                It takes something?
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row surveyQuestion">
                                        How often are you wrong? 
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-2 col-md-offset-1 surveyAnswer">
                                                                <input type="radio" name="right" value="Always">
                                                                Always<br/>
                                                                <input type="radio" name="right" value="Never">
                                                                Never
                                                        </div>
                                                        <div class="col-md-2 surveyAnswer">
                                                                <input type="radio" name="right" value="I am wrong right now">
                                                                I am wrong right now<br/>
                                                                <input type="radio" name="right" value="I ask others how it feels">
                                                                I ask others how it feels
                                                        </div>
                                                        <div class="col-md-2 col-md-offset-1 surveyAnswer">
                                                                <button type="button" class="btn btn-primary btn-md btn-block" onclick="results()">Results</button>
                                                                <input type="submit" class="btn btn-primary btn-md btn-block"/>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </body>
</html>