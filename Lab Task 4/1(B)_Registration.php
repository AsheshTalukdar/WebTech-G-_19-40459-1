

<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label>Enter Name</label>";  
      }   
     else if(empty($_POST["email"]))  
      {  
           $error = "<label>Enter an e-mail</label>";  
      } 

      else if(empty($_POST["un"]))  
      {  
           $error = "<label>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label>Enter a password</label>";  
      } 
     else if(!strpos($_POST["pass"],"#")){

          $error="Special character needed";
     
     }

      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label>Confirm password field cannot be empty</label>";  
      } 
     
     else if ($_POST['pass']!=$_POST['Cpass']) {
          $error="Password and Confirm password does not match";
     }



      else if(empty($_POST["gender"]))  
      {  
           $error = "<label>Gender cannot be empty</label>";  
      } 
       
     else if (empty($_POST["dob"])) 
     {
          $error="Please put valid date of birth";
     }
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],
                     'password'     =>     $_POST["pass"],
                     'Confirm Password'     =>     $_POST["Cpass"],
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                       if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label>Successfully Submitted</p>";  
                }  
           }  
           else  
           {  
                $error = 'Sorry, something wrong with your json file';  
           }  
           
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
      </head>  
      <body>      
      <?php require 'upper.php';?>            
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  

          <fieldset style="height: 400px;  width: 1488px;">
          <fieldset style=" height: 350px;  width: 750px;margin: 0px auto;"> 
                      <legend><b>REGISTRATION</b></legend>
                         <table>
                              <tr>
                     <td><label>Name</label></td> 
                     <td><input type="text" name="name"> </td>
                     </tr> 
                     <tr>
                     <td><label>E-mail</label></td>
                     <td><input type="text" name = "email"></td>
                     </tr>
                     <tr>
                     <td><label>User Name</label></td>
                     <td><input type="text" name = "un" ></td>
                     </tr>
                     <tr>
                     <td><label>Password</label></td>
                     <td><input type="password" name = "pass" ></td>
                    </tr>
                    <tr>
                     <td><label>Confirm Password</label></td>
                     <td><input type="password" name = "Cpass" ></td>
                     </tr>

                    </table>
                         <tr>
                              <fieldset>
                    <td><legend><b>Gender</b></legend></td>
                    <td><input type="radio" id="male" name="gender" value="male"></td>
                     <td><label for="male">Male</label></td>                     
                     <td><input type="radio" id="female" name="gender" value="female"></td>
                     <td><label for="female">Female</label></td>
                     <td><input type="radio" id="other" name="gender" value="other"></td>
                     <td><label for="other">Other</label></td>
                     </fieldset>
                     </tr>
                     <fieldset>
                     <legend><b>Date of Birth:</b></legend>
                     <input type="date" name="dob"> <br><br>
                     </fieldset>
                     <br>

 <hr>
                    <input type="submit" name="submit" value="Submit">
                    <input type="Reset" name="submit" value="Reset">

                     </fieldset>
                     </fieldset>


                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
                <?php require 'lower.php';?>
         
      </body>  
 </html>  