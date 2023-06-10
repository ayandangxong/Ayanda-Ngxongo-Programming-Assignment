<?php
// calculation the oldest or maximin
$query2 = "SELECT MAX(age) AS highest_age FROM survey";
$result3 = mysqli_query($connect, $query2);

// Fetch the result
$row = mysqli_fetch_assoc($result3);
$highestAge = $row['highest_age'];


// Execute the query to retrieve the person with the highest age
$query6 = "SELECT name FROM survey WHERE age = (SELECT MAX(age) FROM survey)";
$result7 = mysqli_query($connect, $query6);

// Check if a row is returned
if ($result7 && mysqli_num_rows($result7) > 0) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result7);
    // oldest person
    $personName = $row['name'];
} 

$query8 = "SELECT name FROM survey WHERE age = (SELECT Min(age) FROM survey)";
$result8 = mysqli_query($connect, $query8);

// Check if a row is returned
if ($result8 && mysqli_num_rows($result8) > 0) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result8);
    // youngest person
    $personName2= $row['name'];
} 


$query3 = "SELECT MIN(age) AS lowest_age FROM survey";
$result9 = mysqli_query($connect, $query3);

// Fetch the result
$rowAge = mysqli_fetch_assoc($result9);
$lowestAge = $rowAge['lowest_age']; 
       
      
      
$query4 = "SELECT age FROM survey";
$result5 = mysqli_query($connect, $query4);

// Initialize variables for sum and count
$totalAges = 0;
$numberOfAges = 0;

// Calculate the sum and count of ages

while ($row = mysqli_fetch_assoc($result5)) {
    $totalAges += $row['age'];
    $numberOfAges++;
}

// Calculate the average age
$query11 = "SELECT * FROM survey ";
$averageAge =round( ($numberOfAges > 0) ? $totalAges / $numberOfAges : 0);
        
$results = mysqli_query($connect, $query11);

if($results){
    
    $register = mysqli_fetch_all($results);
    
    
}
//count all surveys
$results = mysqli_query($connect, "SELECT * FROM survey");

if($results){
$all = mysqli_num_rows($results);
}

//eat out average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageEatOut=round($totalEatOut/$checkAverage*5);
if($averageEatOut>=1)
{
    $eatOutrating="Strongly agree(1)";
}
if($averageEatOut>=2)
{
    $eatOutrating="Agree(1)";
}
if($averageEatOut>=3)
{
    $eatOutrating="Neutral(3)";
}
if($averageEatOut>=4)
{
    $eatOutrating="Disagree(4)";
}
if($averageEatOut>=5)
{
    $eatOutrating="Strongly disagree(5)";
}

//movies average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageMovie=round($totalEatOut/$checkAverage*5);
if($averageMovie>=1)
{
    $movierating="Strongly agree(1)";
}
if($averageMovie>=2)
{
    $movierating="Agree(1)";
}
if($averageMovie>=3)
{
    $movierating="Neutral(3)";
}
if($averageMovie>=4)
{
    $movierating="Disagree(4)";
}
if($averageMovie>=5)
{
    $movierating="Strongly disagree(5)";
}

//watch tv average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageTV=round($totalEatOut/$checkAverage*5);
if($averageTV>=1)
{
    $tvrating="Strongly agree(1)";
}
if($averageTV>=2)
{
    $tvrating="Agree(1)";
}
if($averageTV>=3)
{
    $tvrating="Neutral(3)";
}
if($averageTV>=4)
{
    $tvrating="Disagree(4)";
}
if($averageTV>=5)
{
    $tvrating="Strongly disagree(5)";
}

//watch tv average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageRadio=round($totalEatOut/$checkAverage*5);
if($averageRadio>=1)
{
    $radiorating="Strongly agree(1)";
}
if($averageRadio>=2)
{
    $radiorating="Agree(1)";
}
if($averageRadio>=3)
{
    $radiorating="Neutral(3)";
}
if($averageRadio>=4)
{
    $radiorating="Disagree(4)";
}
if($averageRadio>=5)
{
    $radiorating="Strongly disagree(5)";
}

//count all People who Like Pizza
$results = mysqli_query($connect, "SELECT * FROM survey WHERE favourite='Pizza'");

if($results){
$PizzaCount = mysqli_num_rows($results);
}
//count all People who Like Pasta
$results = mysqli_query($connect, "SELECT * FROM survey WHERE favourite='Pasta'");

if($results){
$PastaCount = mysqli_num_rows($results);
}
//count all People who Like Pap And Wors
$results = mysqli_query($connect, "SELECT * FROM survey WHERE favourite='Pap and Wors'");

if($results){
$PapAndWors = mysqli_num_rows($results);

//count all People who Like Chicken
$results = mysqli_query($connect, "SELECT * FROM survey WHERE favourite='Chicken stir fry'");
if($results){
$chickenCount = mysqli_num_rows($results);
}

//count all People who Like Beef
$results = mysqli_query($connect, "SELECT * FROM survey WHERE favourite=' Beef stir fry'");
if($results){
$BeefCount = mysqli_num_rows($results);
}

//count all People who Like Other Food
$results = mysqli_query($connect, "SELECT * FROM survey WHERE favourite=' Other'");

if($results){
$OtherCount = mysqli_num_rows($results);
}
$totalfood=$PizzaCount+$PastaCount+$PapAndWors+$chickenCount+$BeefCount+$OtherCount;
$pizzaPerc=round($PizzaCount/$totalfood*100,1);
$pastaPerc=round($PastaCount/$totalfood*100,1);
$worsPerc=round($PapAndWors/$totalfood*100,1);
$chickenPerc=round($chickenCount/$totalfood*100,1);
$beefPerc=round($BeefCount/$totalfood*100,1);
$otherPerc=round($OtherCount/$totalfood*100,1);
}
?>