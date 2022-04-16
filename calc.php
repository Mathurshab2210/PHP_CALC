<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="stylecalc.css">
</head>
<body>
    <div class="container"><br><br><br><br><br><br><br> 
        <div class="main">
           <div class="head"><h1>PHP Calculator</h1><hr></div>
           <div class="entry">
               <form method="POST" >
                   <input type="text" name="n1" id="n1" placeholder="enter value 1"> <br><br>
                   <input type="text" name="n2" id="n2" placeholder="enter value 2"> <br><br> 
                   <div class="opr">
                       <select name="oprations">
                           <option value="add">Add</option>
                           <option value="sub">Sub</option>
                           <option value="mul">Mul</option>
                           <option value="div">Div</option>
                       </select>
                       <input type="submit" value="submit" name="submit">
                   </div>
               </form><br>
               <div class="result">
               <p><?php
               if(isset($_POST['submit'])){
                   $num1 = $_POST['n1'];
                   $num2 = $_POST['n2'];
                   $oprations =$_POST['oprations'];
                   switch ($oprations) {
                       case 'add':
                                  $sum=$num1+$num2;
                                  echo"The sum is {$sum}";
                           
                           break;
                       
                       case 'sub':
                                  if($num1<$num2){
                                      $sub=$num2-$num1;
                                      echo"The subtraction is {$sub}";
                                      
                                  }
                                  else{
                                      $sub=$num1-$num2;
                                      echo"The subtraction is {$sub}";
                                  }
                        
                                    break;
                     case 'mul':
                            $mul=$num1*$num2;
                            echo"The multiply is {$mul}";
                     
                                break;    
                     case 'div':
                        $sum=$num1/$num2;
                        echo"The division  is {$div}";
                 
                            break; 
                    default: echo"choose correct choice";         

               }  
            }   
               ?>
               </p>
           </div> 
           </div> 
           
        </div>
        
    </div>
</body>
</html>
