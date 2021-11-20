

<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/log.css" rel="stylesheet">
</head>
<body>
  <div id="p3">
  <div class="container" id="id1">
  <div class="row-justify-content-center">
  <div class="col-sm-12" style="background-color:#ffffff !important ;">
    <?php
	


$head="Q1A,Q2A,Q3A,Q4A,Q5A,Q6A,Q7A,Q8A,Q9A,Q10A,Q11A,Q12A,Q13A,Q14A,Q15A,Q16A,Q17A,Q18A,Q19A,Q20A,Q21A";
$data="$_POST[Q1A],$_POST[Q2A],$_POST[Q3A],$_POST[Q4A],$_POST[Q5A],$_POST[Q6A],$_POST[Q7A],$_POST[Q8A],$_POST[Q9A],$_POST[Q10A],$_POST[Q11A],$_POST[Q12A],$_POST[Q13A],$_POST[Q14A],$_POST[Q15A],$_POST[Q16A],$_POST[Q17A],$_POST[Q18A],$_POST[Q19A],$_POST[Q20A],$_POST[Q21A]";

$myfile="test.csv";
$fh=fopen($myfile,'w') or die('canot open file');
$str="$head\n$data";
fwrite($fh,$str);
fclose($fh);
$python=`python pgm_test.py`;
echo"<pre>$python</pre>";
	
	?>
  
   </div>
   </div>
   </div>
   </div>
   </div>
</body>
</html>