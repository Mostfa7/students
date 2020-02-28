<?php
/**
 * DATABASE CONNECTION
 */
$HOSTNAME = "localhost";
$DBNAME = "sums";
$USERNAME = "root";
$PASSWORD = "";
$CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);

    if(!$CONNECTION)
        die("CONNECTION FAILED : " .mysqli_connect_error());
    // else
    //     echo "CONNECTED<br>";

        //DB METHODS

/**
 * TO VIEW STUDENT PROFILE 
 * PARAMETR IS ID  EXAMPLE ID = 5
 * RETURN STUDENT INFO 
 *  */ 
    function READ_DB($id){
        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
        $QUERY = "SELECT * FROM student WHERE id = $id";
       
        $RESULT = mysqli_query($CONNECTION,$QUERY);
    
            while($ROW = mysqli_fetch_Assoc($RESULT)){
    
                if(mysqli_num_rows($RESULT)>0){
    
                    echo "
                     <h4>COLLAGE  :     ".$ROW["collage"]."</h4>"." 
                     <h4>DATE OF REGISTER : ".$ROW["Date_of_Reg"]."</h4>"." 
                     <h4> YEAR OF STUDY : ".$ROW["y_of_s"]."</h4>"." 
                     <h4>DATE OF BIRTH : ".$ROW["studentAge"]."</h4>";    
                }
    
    
    
            }
    
            mysqli_close($CONNECTION);
    
        }
       /**
        * VIEW STUDENTS IN PAGE ADMIN
        * 
        */
        function view_student(){
            $HOSTNAME = "localhost";
            $DBNAME = "sums";
            $USERNAME = "root";
            $PASSWORD = "";
            $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
            $QUERY = "SELECT * FROM `student` ORDER BY `student`.`y_of_s` ASC ";
           
            $RESULT = mysqli_query($CONNECTION,$QUERY);
        
                while($ROW = mysqli_fetch_Assoc($RESULT)){
        
                    if(mysqli_num_rows($RESULT)>0){
        
                        // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];
        
                            echo '
                            <tr>
                            <tbody>
                            <th scope="row"><img src='.$ROW['stu_profile_img'].' style="height:40px; width:40px;border-radius: 12rem;   "></th>
                            <td>'.$ROW['id'].'</td>
                            <td>"'.$ROW['studentName'].'"</td>
                            <td>"'.$ROW['email'].'"</td>
                            <td>'.$ROW['y_of_s'].'</td>
                            <td>'.$ROW['Date_of_Reg'].'</td>
                            </tbody>
                            </tr>';





                    }
        
        
        
                }
        
                mysqli_close($CONNECTION);
        
            }
            /**
             * VIEW INFO ABOUT DOCTOR IN ADMIN PAGE 
             * 
             * 
             */
            function view_doctors(){
                $HOSTNAME = "localhost";
                $DBNAME = "sums";
                $USERNAME = "root";
                $PASSWORD = "";
                $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                $QUERY = "SELECT * FROM `doctor` ORDER BY `id` ASC ";
               
                $RESULT = mysqli_query($CONNECTION,$QUERY);
            
                    while($ROW = mysqli_fetch_Assoc($RESULT)){
            
                        if(mysqli_num_rows($RESULT)>0){
            
                            // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];
            
                                echo '
                                <tr>
                                <tbody>
                                <th scope="row"><img src=../admins/'.$ROW['doc_img'].' style="height:40px; width:40px;border-radius: 12rem;   "></th>

                                <td>'.$ROW['doctorName'].'</td>
                                <td>"'.$ROW['doc_special'].'"</td>
                                <td>"'.$ROW['email'].'"</td>
                                <td>'.$ROW['doctorAge'].'</td>
                                </tbody>
                                </tr>';
    
    
    
    
    
                        }
            
            
            
                    }
            
                    mysqli_close($CONNECTION);
            
                }
            /**
             * UPDATE INFO STUDENTS IN ADMIN PAGE
             * 
             * 
             */
            function Update_student(){
                $HOSTNAME = "localhost";
                $DBNAME = "sums";
                $USERNAME = "root";
                $PASSWORD = "";
                $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                $QUERY = "SELECT * FROM `student` ORDER BY `student`.`id` ASC  ";
               
                $RESULT = mysqli_query($CONNECTION,$QUERY);
            // echo '<form action="update.php" method="get">';
                    while($ROW = mysqli_fetch_Assoc($RESULT)){
            
                        if(mysqli_num_rows($RESULT)>0){
            
                            // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];
            




                            
                                echo '
                                <tr>
                                <tbody>
                                
                                <input type="hidden" name="stu_id[]" value="'.$ROW["id"].'">
                                <td>"'.$ROW['studentName'].'"
                                <input type="text" name="name[]" value="'.$ROW['studentName'].'" id="" placeholder=" NAME">
                                </td>
                                
                                <td>"'.$ROW['email'].'"
                                <input type="email" name="email[]"  value="'.$ROW['email'].'" id="" placeholder=" EMAIL"></td>
                                <td>"'.$ROW['password'].'"
                                <input type="password" name="password[]"  value="'.$ROW['password'].'" id="" placeholder=" PASSWORD"></td>

                                <td>'.$ROW['y_of_s'].'
                                <input type="text" name="year_of_study[]"  value="'.$ROW['y_of_s'].'" id="" placeholder=" YEAR"></td>
                                <td>'.$ROW['collage'].'
                                <input type="text" name="collage[]" value="'.$ROW['collage'].'"  id="" placeholder=" COLLAGE"></td>

                                <td>'.$ROW['Date_of_Reg'].'
                                <input type="date" name="date[]" value="'.$ROW['Date_of_Reg'].'"  id="" ></td>

                                </tbody>
                                </tr>
              
   '
   ;
    
    
    
    
    
                        }
            
            
            
                    }
            echo '<td><input class="btn btn-outline-primary" type="submit" value="UPDATE"></td>';
            // echo '<td><input type="submit" class="btn btn-dark mt--1" value="SAVE" style="margin-left: 18rem;margin-top: -1rem;"></td>';

                    mysqli_close($CONNECTION);
            
                }
            /**
             * RECIEVE DATA FROM UPDATE STUDENT AND APLLAY INSERT QUERY TO DATABASE
             * 
             * 
             */
                function update_student_insert($stu_id,$name,$email,$password,$year,$date,$collage)
                {
                    $HOSTNAME = "localhost";
                    $DBNAME = "sums";
                    $USERNAME = "root";
                    $PASSWORD = "";
                    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                
                           
                    $QUERY = "SELECT * FROM student where 1";
                    $RESULT = mysqli_query($CONNECTION,$QUERY);
                    $update_query="UPDATE student
                    SET studentName = '$name', collage = '$collage', email = '$email',
                    password = $password , y_of_s = $year , Date_of_Reg = '$date'
                     WHERE id = $stu_id";
                    //  mysqli_query($CONNECTION,$update_query);
                    while($ROW = mysqli_fetch_Assoc($RESULT)){
                        if(mysqli_num_rows($RESULT)>0){
                
                        if($stu_id==$ROW['id']){
                        if(mysqli_query($CONNECTION,$update_query)){
                            // echo "succeed";
                      
                        }
                    } 
                            // else echo "error".$update_query."<br>".mysqli_error($CONNECTION);
                        
                        
                        }}
                
                
                
                }

//-------------------------------------------------------------------------------

/**
 * ALLOW STUDENTS TO CHANGE PHOTO AND PASSWORD FROM PROFILE 
 * 
 * 
 */

function prof_update($email,$password,$item,$value){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);

           
    $QUERY = "SELECT * FROM student where 1";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
    $update_query="UPDATE student
    SET stu_profile_img = '$item' where email='$email' and password ='$password'";
    $update_query1="UPDATE student
    SET password = '$item' where email='$email' and password ='$password'";
    //  mysqli_query($CONNECTION,$update_query);
    while($ROW = mysqli_fetch_Assoc($RESULT)){
        if(mysqli_num_rows($RESULT)>0){

        if($ROW['email']==$email&&$ROW['password']==$password&&$value=='img'){
        if(mysqli_query($CONNECTION,$update_query)){
            // echo "succeed";
      
        }
    } else if($ROW['email']==$email&&$ROW['password']==$password&&$value=='password'){
            // else echo "error".$update_query."<br>".mysqli_error($CONNECTION);
            if(mysqli_query($CONNECTION,$update_query1)){
            }
    }
        }}








}
function prof_update_d($email,$password,$item,$value){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);

           
    $QUERY = "SELECT * FROM doctor where 1";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
    $update_query="UPDATE doctor
    SET doc_img = '$item' where email='$email' and password ='$password'";
    $update_query1="UPDATE doctor
    SET password = '$item' where email='$email' and password ='$password'";
    //  mysqli_query($CONNECTION,$update_query);
    while($ROW = mysqli_fetch_Assoc($RESULT)){
        if(mysqli_num_rows($RESULT)>0){

        if($ROW['email']==$email&&$ROW['password']==$password&&$value=='img'){
        if(mysqli_query($CONNECTION,$update_query)){
            // echo "succeed";
      
        }
    } else if($ROW['email']==$email&&$ROW['password']==$password&&$value=='password'){
            // else echo "error".$update_query."<br>".mysqli_error($CONNECTION);
            if(mysqli_query($CONNECTION,$update_query1)){
            }
    }
        }}








}
/**
 * VIEW DOCTOR INFO AND RECEIVE DATA FROM STUDENT AND SAVE PASSED TO  update_doctor_insert FUNCTION
 * 
 * 
 * 
 */
function Update_doctor(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `doctor` ORDER BY `doctor`.`id` ASC  ";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);
// echo '<form action="update.php" method="get">';
        while($ROW = mysqli_fetch_Assoc($RESULT)){

            if(mysqli_num_rows($RESULT)>0){

                // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];





                
                    echo '
                    <tr>
                    <tbody>
                    
                   
                    <td>"'.$ROW['doctorName'].'"
                    <input type="text" name="name[]" value="'.$ROW['doctorName'].'">
                    <input type="hidden" name="doc_id[]" value="'.$ROW["id"].'">
                    </td>
                    
                    <td>"'.$ROW['email'].'"
                    <input type="email" name="email[]"  value="'.$ROW['email'].'" ></td>
                    <td>"'.$ROW['password'].'"
                    <input type="password" name="password[]"  value="'.$ROW['password'].'" </td>

                    <td>"'.$ROW['doc_special'].'"
                    <input type="text" name="doc_special[]"  value="'.$ROW['doc_special'].'"</td>
                    
                    </tbody>
                    </tr>
  
'
;





            }



        }
echo '<td><input class="btn btn-outline-primary" type="submit" value="UPDATE"></td>';
// echo '<td><input type="submit" class="btn btn-dark mt--1" value="SAVE" style="margin-left: 18rem;margin-top: -1rem;"></td>';

        mysqli_close($CONNECTION);

    }
/**
 * RECEIVE DATA FROM UPDATE_STUDENT FUNCTION AND SEND IT TO DATABASE
 * 
 * 
 * 
 */
    function update_doctor_insert($doc_id,$name,$email,$password,$doc_special)
    {
        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    
               
        $QUERY = "SELECT * FROM student where 1";
        $RESULT = mysqli_query($CONNECTION,$QUERY);
        $update_query="UPDATE doctor
        SET doctorName = '$name', email = '$email',
        password = $password , doc_special = '$doc_special' 
         WHERE id = $doc_id";
        //  mysqli_query($CONNECTION,$update_query);
        while($ROW = mysqli_fetch_Assoc($RESULT)){
            if(mysqli_num_rows($RESULT)>0){
    
            if($doc_id==$ROW['id']){
            if(mysqli_query($CONNECTION,$update_query)){
                // echo "succeed";
          
            }
        } 
                // else echo "error".$update_query."<br>".mysqli_error($CONNECTION);
            
            
            }}
    
    
    
    }






//------------------------------------------------------------------------------

/**
 * VIEW FORM STUDENT INFO AND PASSED ACTION (DELETE BUTTON ) TO Delete_student FUNCTION
 * 
 * 
 */
function delete_view_student(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `student` ORDER BY `student`.`y_of_s` ASC ";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

        while($ROW = mysqli_fetch_Assoc($RESULT)){

            if(mysqli_num_rows($RESULT)>0){

                // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];

                    echo '
                    <tr>
                    <tbody>
                    
                    <td>"'.$ROW['studentName'].'"</td>
                    <td>"'.$ROW['email'].'"</td>
                    <td>'.$ROW['y_of_s'].'</td>
                    <td>'.$ROW['Date_of_Reg'].'</td>
                    <td>
                    <a href="del.php?delete='.$ROW['id'].'">
                    <input type="submit" class="btn btn-primary"  value="DELETE"></td>
                    </tbody>
                    </tr>';





            }



        }

        mysqli_close($CONNECTION);

    }

function Delete_student($id){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY ="DELETE FROM `student` where id =$id" ;  
     $q = "SET FOREIGN_KEY_CHECKS = 0";
     mysqli_query($CONNECTION,$q);
     if(mysqli_query($CONNECTION,$QUERY)){
    //  echo "SUCCESS";
         
         
         }
        //  else echo "error".$QUERY."<br>".mysqli_error($CONNECTION);
         



}




//=================================================================================================

/**
 * VIEW DOCTOR FORM INFO AND PASS ACTION TO Delete_doctor FUNCTION
 * 
 * 
 */
function delete_view_doctor(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `doctor` ORDER BY `doctor`.`id` ASC ";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

        while($ROW = mysqli_fetch_Assoc($RESULT)){

            if(mysqli_num_rows($RESULT)>0){

                // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];

                    echo '
                    <tr>
                    <tbody>
                    
                    <td>"'.$ROW['doctorName'].'"</td>
                    <td>"'.$ROW['email'].'"</td>
                    <td>'.$ROW['password'].'</td>
                    <td>'.$ROW['doc_special'].'</td>
                    <td>
                    <a href="del_doc.php?delete='.$ROW['id'].'">
                    <input type="submit" class="btn btn-primary"  value="DELETE"></td>
                    </tbody>
                    </tr>';





            }



        }

        mysqli_close($CONNECTION);

    }


/**
 * RECEIVE ID FROM  delete_view_doctor FUNCTION AND APLLAY CHANGES TO TABLE IN DATABASE
 */

    function Delete_doctor($id){
        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
        $QUERY ="DELETE FROM `doctor` where id =$id" ;  
         $q = "SET FOREIGN_KEY_CHECKS = 0"; // DESIBLE FOREIGN_KEY_CHECKS  0 FALSE 
         mysqli_query($CONNECTION,$q);
         if(mysqli_query($CONNECTION,$QUERY)){
        //  echo "SUCCESS";
             
             
             }
            //  else echo "error".$QUERY."<br>".mysqli_error($CONNECTION);
             
    
    
    
    }
    



//====================================================================================================

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



function delete_view_subject(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `subject` ORDER BY `subject`.`year_of_study` ASC ";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

        while($ROW = mysqli_fetch_Assoc($RESULT)){

            if(mysqli_num_rows($RESULT)>0){

                // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];

                    echo '
                    <tr>
                    <tbody>
                    
                    <td>"'.$ROW['sub_name'].'"</td>
                    <td>"'.$ROW['sub_code'].'"</td>
                    <td>'.$ROW['sub_hours'].'</td>
                    <td>'.$ROW['year_of_study'].'</td>
                    <td>
                    <a href="del_sub.php?delete='.$ROW['id'].'">
                    <input type="submit" class="btn btn-primary"  value="DELETE"></td>
                    </tbody>
                    </tr>';





            }



        }

        mysqli_close($CONNECTION);

    }

    function Delete_subject($id){
        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
        $QUERY ="DELETE FROM `subject` where id =$id" ;  
         $q = "SET FOREIGN_KEY_CHECKS = 0";
         mysqli_query($CONNECTION,$q);
         if(mysqli_query($CONNECTION,$QUERY)){
        //  echo "SUCCESS";
             
             
             }
            //  else echo "error".$QUERY."<br>".mysqli_error($CONNECTION);
             
    
    
    
    }

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/**
 * VIEW ALL SUBJECTS IN ADMIN PAGE
 * 
 * 
 */
function view_subject(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `subject` JOIN doctor on subject.doc_id = doctor.id ORDER BY `subject`.`year_of_study` ASC ";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

        while($ROW = mysqli_fetch_Assoc($RESULT)){

            if(mysqli_num_rows($RESULT)>0){

                // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];

                    echo '
                    <tr>
                    <tbody>
                    
                    <td>"'.$ROW['sub_name'].'"</td>
                    <td>"'.$ROW['sub_code'].'"</td>
                    <td>'.$ROW['sub_hours'].'</td>
                    <td>'.$ROW['year_of_study'].'</td>
                    <td>'.$ROW['doctorName'].'</td>

                    <td>
                
                    </tbody>
                    </tr>';





            }



        }

        mysqli_close($CONNECTION);

    }




/**
 * CREATE STUDENT AND INSERT ALL INFO IN DATABASE
 * 
 * 
 */
function CERATE_USERS($name,$age,$collage,$email,$password,$date,$img,$yos){
 $HOSTNAME = "localhost";
$DBNAME = "sums";
$USERNAME = "root";
$PASSWORD = "";
 $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
 

$sql = "INSERT INTO `STUDENT`(`studentName`,`studentAge`,`collage`,`email`,`password`,`stu_profile_img`,`y_of_s`,`Date_of_Reg`)
                      VALUES ("."'". $name."'".",". $age.","."'". $collage."'".","."'". $email."'".",". $password.","."'". $img."'".",". $yos.","."'". $date."'".")";
if(mysqli_query($CONNECTION,$sql)){
// echo "succeed";


}
// else echo "error".$sql."<br>".mysqli_error($CONNECTION);

mysqli_close($CONNECTION);
}
/**
 * ADD DOCOTR TO DATABASE 
 * 
 */
function CERATE_Doctor($name,$age,$specialization,$email,$password,$img){
    $HOSTNAME = "localhost";
$DBNAME = "sums";
$USERNAME = "root";
$PASSWORD = "";
 $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
 

$sql = "INSERT INTO `doctor`(`doctorName`,`doctorAge`,`doc_special`,`email`,`password`,`doc_img`)
                      VALUES ("."'". $name."'".",". $age.","."'". $specialization."'".","."'". $email."'".",". $password.","."'".$img."'".")";

if(mysqli_query($CONNECTION,$sql)){
// echo "succeed";


}
// else echo "error".$sql."<br>".mysqli_error($CONNECTION);

mysqli_close($CONNECTION);
}

//create subject

/**
 * ADD NEW SUBJECT TO DATABASE 
 */
function CERATE_Sub($sub_name,$sub_code,$num_of_hours,$doc_id,$year_of_study){
$HOSTNAME = "localhost";
$DBNAME = "sums";
$USERNAME = "root";
$PASSWORD = "";
 $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
 

$sql = "INSERT INTO `subject`(`sub_name`,`sub_code`,`sub_hours`,`doc_id`,`year_of_study`)
                      VALUES ("."'". $sub_name."'". ",". $sub_code. ",".$num_of_hours. ",". $doc_id.",".$year_of_study.")";

if(mysqli_query($CONNECTION,$sql)){
// echo "succeed";


}
// else echo "error".$sql."<br>".mysqli_error($CONNECTION);

mysqli_close($CONNECTION);
}

/**
 * المواد الي منزلها الطالب 
 * يتم العرض في حسابه الشخصي قسم degree
 * 
 */

function Get_subjects($ids1,$ids2){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
     
    // SELECT * FROM `subject` JOIN student ON subject.id = student.id JOIN marks ON marks.id = subject.id
    // SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1 
    //SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1
    // $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1";
    //$QUERY  = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1"; 
//    $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 1";
$id = 0;
$QUERY ="SELECT * FROM student where 1";
$RESULT = mysqli_query($CONNECTION,$QUERY);

while($ROW = mysqli_fetch_Assoc($RESULT)){

            if(mysqli_num_rows($RESULT)>0){
               
                if($ids1==$ROW['email']&&$ids2==$ROW['password']){
$id=$ROW['id'];
                }}}
                $QUERY1 ="SELECT * FROM `subject` JOIN suggested_subjec on subject.id = suggested_subjec.sub_ids WHERE $id = suggested_subjec.stu_id  ORDER BY `subject`.`year_of_study` ASC";

                $RESULT1 = mysqli_query($CONNECTION,$QUERY1);

        while($ROW1 = mysqli_fetch_Assoc($RESULT1)){

            if(mysqli_num_rows($RESULT1)>0){

                echo '
                            <tr>
                            <tbody>
                            <th scope="row">"'.$ROW1['sub_name'].'"</th>
                            <td>'.$ROW1['sub_code'].'</td>
                            <td>"'.$ROW1['sub_hours'].'"</td>
                            <td>"'.$ROW1['year_of_study'].'"</td>
                            </tbody>
                            </tr>';





                    
            }
            }
           
        

        mysqli_close($CONNECTION);

    }



       
          
            
            /**
             * ALL VIEW MARKS FUNCTIONs FOR NEW DEGREE 
             * 
             */
            function view_marks_first_exam($ids1,$ids2){
                $HOSTNAME = "localhost";
                $DBNAME = "sums";
                $USERNAME = "root";
                $PASSWORD = "";
                $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                 
                // SELECT * FROM `subject` JOIN student ON subject.id = student.id JOIN marks ON marks.id = subject.id
                // SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1 
                //SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1
                // $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1";
                //$QUERY  = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1"; 
                $QUERY1="SELECT * FROM student where 1";
                $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
                $yos =0;
                while($ROW1 = mysqli_fetch_Assoc($RESULT1)){
        
                    if(mysqli_num_rows($RESULT1)>0){
                        if($ids1==$ROW1['email']&&$ids2==$ROW1['password']){
                            $yos = $ROW1['y_of_s'];
                    }
                }
               
               
            }
               
               
                $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 1 and stu_sub.year_of_study  = $yos";
                
               $RESULT = mysqli_query($CONNECTION,$QUERY);
                    while($ROW = mysqli_fetch_Assoc($RESULT)){
            
                        if(mysqli_num_rows($RESULT)>0){
                            
                            if(/*substr($ids1,12)*/$ids1==$ROW['email']&&$ids2==$ROW['password']){
            
                            echo "
                            <tr>
                             <tbody>
                            <td>".$ROW['sub_name']." </td>
                            <td>".$ROW['mark']."</td>
                            <td>".$ROW['grade']."</td>
    
                            </tbody>
                            </tr>
                            ";
                           
                           
                        
    
                        // echo '
                        
                        // <th scope="row">"'.$ROW['sub_name'].'"</th>
                        // <td>'.$ROW['mark'].'</td>
                        
                        // ';
    
    
    
    
                    }
    
    
            
                    }
            
                    }
                   
                    mysqli_close($CONNECTION);
            
                }
        
                function view_marks_second_exam($ids1,$ids2){
                    $HOSTNAME = "localhost";
                    $DBNAME = "sums";
                    $USERNAME = "root";
                    $PASSWORD = "";
                    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                     
                    // SELECT * FROM `subject` JOIN student ON subject.id = student.id JOIN marks ON marks.id = subject.id
                    // SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1 
                    //SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1
                    // $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1";
                    //$QUERY  = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1"; 
                    $QUERY1="SELECT * FROM student where 1";
                    $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
                    $yos =0;
                    while($ROW1 = mysqli_fetch_Assoc($RESULT1)){
            
                        if(mysqli_num_rows($RESULT1)>0){
                            if($ids1==$ROW1['email']&&$ids2==$ROW1['password']){
                                $yos = $ROW1['y_of_s'];
                        }
                    }
                   
                   
                }
                   
                   
                    $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 2 and stu_sub.year_of_study  = $yos";
                    
                   $RESULT = mysqli_query($CONNECTION,$QUERY);
                        while($ROW = mysqli_fetch_Assoc($RESULT)){
                
                            if(mysqli_num_rows($RESULT)>0){
                                
                                if(/*substr($ids1,12)*/$ids1==$ROW['email']&&$ids2==$ROW['password']){
                
                                echo "
                                <tr>
                                 <tbody>
                                <td>".$ROW['sub_name']." </td>
                                <td>".$ROW['mark']."</td>
                                <td>".$ROW['grade']."</td>
        
                                </tbody>
                                </tr>
                                ";
                               
                               
                            
        
                            // echo '
                            
                            // <th scope="row">"'.$ROW['sub_name'].'"</th>
                            // <td>'.$ROW['mark'].'</td>
                            
                            // ';
        
        
        
        
                        }
        
        
                
                        }
                
                        }
                       
                        mysqli_close($CONNECTION);
                
                    }
                    function view_marks_final_exam($ids1,$ids2){
                        $HOSTNAME = "localhost";
                        $DBNAME = "sums";
                        $USERNAME = "root";
                        $PASSWORD = "";
                        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                         
                        // SELECT * FROM `subject` JOIN student ON subject.id = student.id JOIN marks ON marks.id = subject.id
                        // SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1 
                        //SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1
                        // $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1";
                        //$QUERY  = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1"; 
                        $QUERY1="SELECT * FROM student where 1";
                        $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
                        $yos =0;
                        while($ROW1 = mysqli_fetch_Assoc($RESULT1)){
                
                            if(mysqli_num_rows($RESULT1)>0){
                                if($ids1==$ROW1['email']&&$ids2==$ROW1['password']){
                                    $yos = $ROW1['y_of_s'];
                            }
                        }
                       
                       
                    }
                       
                       
                        $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 3 and stu_sub.year_of_study  = $yos";
                        
                       $RESULT = mysqli_query($CONNECTION,$QUERY);
                            while($ROW = mysqli_fetch_Assoc($RESULT)){
                    
                                if(mysqli_num_rows($RESULT)>0){
                                    
                                    if(/*substr($ids1,12)*/$ids1==$ROW['email']&&$ids2==$ROW['password']){
                    
                                    echo "
                                    <tr>
                                     <tbody>
                                    <td>".$ROW['sub_name']." </td>
                                    <td>".$ROW['mark']."</td>
                                    <td>".$ROW['grade']."</td>
            
                                    </tbody>
                                    </tr>
                                    ";
                                   
                                   
                                
            
                                // echo '
                                
                                // <th scope="row">"'.$ROW['sub_name'].'"</th>
                                // <td>'.$ROW['mark'].'</td>
                                
                                // ';
            
            
            
            
                            }
            
            
                    
                            }
                    
                            }
                           
                            mysqli_close($CONNECTION);
                    
                        }
            /**
             * ALL GET MARKS FUNCTIONS FOR TRANSCRIPT PAGE 
             * 
             */
            function Get_marks_first_exam($ids1,$ids2,$yos){
                $HOSTNAME = "localhost";
                $DBNAME = "sums";
                $USERNAME = "root";
                $PASSWORD = "";
                $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                 
                // SELECT * FROM `subject` JOIN student ON subject.id = student.id JOIN marks ON marks.id = subject.id
                // SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1 
                //SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1
                // $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1";
                //$QUERY  = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1"; 
                $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 1 and stu_sub.year_of_study  = $yos";
                
               $RESULT = mysqli_query($CONNECTION,$QUERY);
                    while($ROW = mysqli_fetch_Assoc($RESULT)){
            
                        if(mysqli_num_rows($RESULT)>0){
                            
                            if(/*substr($ids1,12)*/$ids1==$ROW['email']&&$ids2==$ROW['password']){
            
                            echo "
                            <tr>
                             <tbody>
                            <td>".$ROW['sub_name']." </td>
                            <td>".$ROW['mark']."</td>
                            <td>".$ROW['grade']."</td>
    
                            </tbody>
                            </tr>
                            ";
                           
                           
                        }
    
    
    
    
    
    
            
                    }
            
                    }
                   
                    mysqli_close($CONNECTION);
            
                }
    
            function Get_marks_second_exam($ids1,$ids2,$yos){
                $HOSTNAME = "localhost";
                $DBNAME = "sums";
                $USERNAME = "root";
                $PASSWORD = "";
                $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                 
                // SELECT * FROM `subject` JOIN student ON subject.id = student.id JOIN marks ON marks.id = subject.id
                // SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1 
                //SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1
                // $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.student_id = stu_sub.sub_id1";
                //$QUERY  = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1"; 
                $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 2 and stu_sub.year_of_study  = $yos";
                
               $RESULT = mysqli_query($CONNECTION,$QUERY);
                    while($ROW = mysqli_fetch_Assoc($RESULT)){
            
                        if(mysqli_num_rows($RESULT)>0){
                            
                            if(/*substr($ids1,12)*/$ids1==$ROW['email']&&$ids2==$ROW['password']){
            
                                echo "
                        <tr>
                         <tbody>
                        <td>".$ROW['sub_name']." </td>
                        <td>".$ROW['mark']."</td>
                        <td>".$ROW['grade']."</td>

                        </tbody>
                        </tr>
                        ";
                        }
            
                    }
            
                    }
                   
                    mysqli_close($CONNECTION);
            
                }
             
                function Get_marks_final($ids1,$ids2,$yos){
                    $HOSTNAME = "localhost";
                    $DBNAME = "sums";
                    $USERNAME = "root";
                    $PASSWORD = "";
                    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                    $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 3 and stu_sub.year_of_study  = $yos";
                    $grade = array(
                    "A+"=>"4.0","A-"=>"3.7",
                    "B+"=>"3.3","B"=>"3.0","B-"=>"2.7",
                    "C+"=>"2.3","C"=>"2.0","C-"=>"1.7",
                    "D+"=>"1.3","D"=>"1.0","D-"=>"0.7",
                    "F"=>"0.0"
                );
                    $CALC=0.0;
                    $CALC1=0.0;
                   $RESULT = mysqli_query($CONNECTION,$QUERY);
                  
                        while($ROW = mysqli_fetch_Assoc($RESULT)){
                
                            if(mysqli_num_rows($RESULT)>0){
                                
                                if(/*substr($ids1,12)*/$ids1==$ROW['email']&&$ids2==$ROW['password']){
                
                                    echo "
                                    <tr>
                                     <tbody>
                                    <th>".$ROW['sub_name']."</th>
                                     <th> ".$ROW['mark']."</th>
                                     <th> ".$ROW['grade']."</th>
                                    </tbody>
                                </tr>
                                    ";
                                
                              @$CALC +=($ROW['sub_hours']*$grade[$ROW['grade']]);
                               $CALC1 += $ROW['sub_hours'];
                            //    echo "  calc = ".$CALC."<br>";
                             
                               
                            }
                
                        }
                
                        }
                        
                        if($CALC1 == 0 )
                        echo "<th style='background: red;'> ".$CALC."</th>";                 
                               else{
                         $gpa = $CALC/$CALC1;
                         if($gpa>1)
                        echo "<th style='background: #8acd00;'> ".$gpa."</th>";

                         
                    
                        else    echo "<th style='background: red;'> ".$gpa."</th>";

                        }
                        // "GPA = ".$gpa.;}
                        mysqli_close($CONNECTION);
                
                    }
                    function GPA_FOR_NOW($ids1,$ids2){
                        $HOSTNAME = "localhost";
                        $DBNAME = "sums";
                        $USERNAME = "root";
                        $PASSWORD = "";
                        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
                        $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id = stu_sub.stu_id1 WHERE type_of_exam = 3 and stu_sub.mark !=0 and stu_sub.mark !=null ";
                        $grade = array(
                        "A+"=>"4.0","A-"=>"3.7",
                        "B+"=>"3.3","B"=>"3.0","B-"=>"2.7",
                        "C+"=>"2.3","C"=>"2.0","C-"=>"1.7",
                        "D+"=>"1.3","D"=>"1.0","D-"=>"0.7",
                        "F"=>"0.0"
                    );
                        $CALC=0.0;
                        $CALC1=0.0;
                       $RESULT = mysqli_query($CONNECTION,$QUERY);
                      
                            while($ROW = mysqli_fetch_Assoc($RESULT)){
                    
                                if(mysqli_num_rows($RESULT)>0){
                                    
                                    if(/*substr($ids1,12)*/$ids1==$ROW['email']&&$ids2==$ROW['password']){
                    
                                    
                                  @$CALC +=($ROW['sub_hours']*$grade[$ROW['grade']]);
                                   $CALC1 += $ROW['sub_hours'];
                                //    echo "  calc = ".$CALC."<br>";
                                 
                                   
                                }
                    
                            }
                    
                            }
                            
                            if($CALC1 == 0 )
                            echo "<th style='background: red;'> ".$CALC."</th>";                 
                                   else{
                             $gpa = $CALC/$CALC1;
                             if($gpa>1)
                            echo "<th style='background: #8acd00;'> ".$gpa."</th>";
    
                             
                        
                            else    echo "<th style='background: red;'> ".$gpa."</th>";
    
                            }
                            // "GPA = ".$gpa.;}
                            mysqli_close($CONNECTION);
                    
                        }
/**
 * VIEW DOCOTRS NAME IN PAGE ADMIN -> ADD SUBJECT 
 * 
 * 
 */
function READ_Doc(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM doctor WHERE 1";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

        while($ROW = mysqli_fetch_Assoc($RESULT)){

            if(mysqli_num_rows($RESULT)>0){

                echo  "<option value = ".$ROW["id"].">" . "[".$ROW["doctorName"]."]"."</option>";
                
            }



        }

        mysqli_close($CONNECTION);

    }
    /**
     * VIEW DOCTOR PORFILE 
     */

    function READ_Doc1($id){
        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
        $QUERY = "SELECT * FROM doctor WHERE id = $id";
       
        $RESULT = mysqli_query($CONNECTION,$QUERY);
    
            while($ROW = mysqli_fetch_Assoc($RESULT)){
    
                if(mysqli_num_rows($RESULT)>0){
    
                   
                    echo "
                    <h4>Doctor Name :     ".$ROW["doctorName"]."</h4>"." 
                    <h4>Age : ".$ROW["doctorAge"]."</h4>"." 
                    <h4> special : ".$ROW["doc_special"]."</h4>"." 
                    ";    
                    // echo '</form>';
                }
    
    
    
            }
    
            mysqli_close($CONNECTION);
    
        }
        
// function get_all_marks_by_year($username,$password,$yos){
    
//  Get_marks_first_exam($username,$password,$yos);
//  Get_marks_second_exam($username,$password,$yos);
//  Get_marks_final($username,$password,$yos);


// }
// function get_all_marks_by_this_year($username,$password){
//     $HOSTNAME = "localhost";
//     $DBNAME = "sums";
//     $USERNAME = "root";
//     $PASSWORD = "";
//     $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
//     $QUERY = "SELECT * FROM student WHERE 1";
   
//     $RESULT = mysqli_query($CONNECTION,$QUERY);
// $yos=0;
//         while($ROW = mysqli_fetch_Assoc($RESULT)){

//             if(mysqli_num_rows($RESULT)>0){
//                 if($username == $ROW['email']&&$password==$ROW['password'])
//             {
//                 $yos=$ROW['y_of_s'];
//             }
            
            
//             }
//             }
//  Get_marks_first_exam($username,$password,$yos);
//  Get_marks_second_exam($username,$password,$yos);
//  Get_marks_final($username,$password,$yos);


// }

function Redirect($url){



    header('Location: '.$url);

	exit();
}
/**
 * CHECK EMAIL AND PASSWORD FORM STUDENT AND ADMIN AND DOCTOR
 */
function check($email,$password){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT email,password,id FROM student WHERE 1";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

    // $ROW = mysqli_fetch_Assoc($RESULT);
    while($ROW = mysqli_fetch_Assoc($RESULT)){

        if(mysqli_num_rows($RESULT)>0){
    if($email==$ROW['email']&&$password==$ROW['password']){
        Redirect("../students/home.php");
    
}
    // else echo "email or password are failed";
            

}}
$QUERY1 = "SELECT email,password,id FROM doctor WHERE 1";
   
$RESULT1 = mysqli_query($CONNECTION,$QUERY1);

// $ROW = mysqli_fetch_Assoc($RESULT);
while($ROW1 = mysqli_fetch_Assoc($RESULT1)){

    if(mysqli_num_rows($RESULT1)>0){
if($email==$ROW1['email']&&$password==$ROW1['password']){
    Redirect("../doctors/home.php");

}
// else echo "email or password are failed";
        

}}

$QUERY2 = "SELECT * FROM `admin` WHERE 1";
   
$RESULT2 = mysqli_query($CONNECTION,$QUERY2);

// $ROW = mysqli_fetch_Assoc($RESULT);
while($ROW2 = mysqli_fetch_Assoc($RESULT2)){

    if(mysqli_num_rows($RESULT2)>0){
if($email==$ROW2['email']&&$password==$ROW2['password']){
    Redirect("../admins/admin.php");

}
// else echo "email or password are failed";
        

}}











}

function nav_stu_item($email,$password,$item){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM student WHERE email='$email' and password = '$password'";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

    $ROW = mysqli_fetch_Assoc($RESULT);
   
    echo $ROW[$item];


}

function nav_doc_item($email,$password,$item){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM doctor WHERE email='$email' and password = '$password'";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

    $ROW = mysqli_fetch_Assoc($RESULT);

    echo $ROW[$item];


}
function nav_admin_item($email,$password,$item){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `admin` WHERE email='$email' and password = '$password'";
   
    $RESULT = mysqli_query($CONNECTION,$QUERY);

    $ROW = mysqli_fetch_Assoc($RESULT);

    echo $ROW[$item];





}

function creat_comment($comment_body,$commented_by,$post_id){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
     
    
    $sql = "INSERT INTO `comments`(`comment_body`,`commented_by`,`post_id_c`)
                          VALUES ("."'". $comment_body."'". ",".$commented_by.",".$post_id.")";
    
    if(mysqli_query($CONNECTION,$sql)){
    // echo "succeed";
    
    
    }
    // else echo "error".$sql."<br>".mysqli_error($CONNECTION);
    
    mysqli_close($CONNECTION);
    }
    function creat_reply($comment_body,$commented_by,$post_id){

        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
         $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
         
        
        $sql = "INSERT INTO `reply`( `comment_body`, `replied_by`, `post_id_c`)
        
                              VALUES ("."'". $comment_body."'". ",".$commented_by.",".$post_id.")";
        
        if(mysqli_query($CONNECTION,$sql)){
        // echo "succeed";
        
        
        }
        // else echo "error".$sql."<br>".mysqli_error($CONNECTION);
        
        mysqli_close($CONNECTION);
        }



function posts ($email,$password){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM doctor WHERE 1";
    $QUERY2 = "SELECT * FROM `doctor` JOIN posts ON doc_id=doctor.id ORDER BY `posts`.`post_date` DESC ";
    // $QUERY2 = "SELECT * FROM `doctor` JOIN posts ON doc_id=doctor.id WHERE post_body LIKE ('can%')"; 
    // $QUERY3 = "SELECT * FROM `student` JOIN comments ON commented_by=student.id JOIN pos_com ON pos_com.pos_c = post_id_c";
    $QUERY3 = "SELECT * FROM `student` JOIN comments ON commented_by=student.id JOIN pos_com ON pos_com.pos_c = post_id_c";

    $QUERY4 = "SELECT * FROM `comments` JOIN pos_com ON pos_com.pos_c = post_id_c";
    $QUERY5 = "SELECT id FROM student WHERE email='$email' and password = '$password'";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
    $ROW = mysqli_fetch_Assoc($RESULT);
    $RESULT2 = mysqli_query($CONNECTION,$QUERY2);
    $ROW2 = mysqli_fetch_Assoc($RESULT2);
    $RESULT3 = mysqli_query($CONNECTION,$QUERY3);
    $ROW3 = mysqli_fetch_Assoc($RESULT3);
    $RESULT4 = mysqli_query($CONNECTION,$QUERY4);
    $ROW4 = mysqli_fetch_Assoc($RESULT4);
    $RESULT5 = mysqli_query($CONNECTION,$QUERY5);
    $ROW5 = mysqli_fetch_Assoc($RESULT5);

    //-------------------O---------------------------
    while($ROW2 = mysqli_fetch_Assoc($RESULT2)){

        if(mysqli_num_rows($RESULT2)>0){
           

    
    $ids = "comment_body".$ROW2['ids'];
    
           if(strlen(isset($_POST[$ids]))>0){



    if(isset($_POST[$ids])&&isset($ROW5['id'])){
    $comment_body = $_POST[$ids];
    $commented_by = $ROW5['id'];
    
    // echo $_POST[$ids];
    creat_comment($comment_body,$commented_by,$ROW2['ids']);
    // creat_reply($comment_body,2,$ROW2['ids']);
}}
    // }}}
    // while($ROW2 = mysqli_fetch_Assoc($RESULT2)){

    //     if(mysqli_num_rows($RESULT2)>0){
           
            
    echo ' <div class="post-container">
 
     <div class="post-head">
     
     <div class="img-circle" style="background:#a7a7a7;">
     <img src=../admins/'.$ROW2["doc_img"].' class = "prof-img">
     
     </div>
     <div class="name">
     
     <h4>'.$ROW2["doctorName"].'</h4>
     </div>
     </div>
     <hr class="hrx">
    
     <div class="body-post">
     
     <h6 class="h6x">'.$ROW2["post_body"].'</h6>
     
     </div>
     <hr class="hrx">
     <div class="react-container">
     <div href="#" class="comments"><img src ="images/chat.png"  id="com-sec'.$ROW2['ids'].'"  onclick ="toggle(this.id);" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 5px;height: 2rem;"  >comments</div>
     
     
     </div>
        ';
    echo' <div id="com-sec'.$ROW2['ids'].'1"  onclick ="toggle(this.id);" style ="  display:block;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;padding-top: 2rem;padding-left: 3rem;" >
 <form action="home.php" method="post" style="display: flex;background:#ececec;padding-bottom: 2rem;">
 <textarea name="comment_body'.$ROW2['ids'].'" id="" cols="30" rows="10" style = "width: 438px;height: 50px;"></textarea>
 <input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:#f62459;color:white; border-radius: 6px;">
 
 </form>'; 
    
// echo substr($ids,12);
read_reply($ids);
read_commments($ids);


    }}
//-------------
// while($ROW3 = mysqli_fetch_Assoc($RESULT2)){

//     if(mysqli_num_rows($RESULT2)>0){
// if($_POST['comment_body']){
//     $post_id =$ROW2['ids'];
//     echo $ROW2['ids']."<h1>here</h1>";
 
//     
//     }else echo "erererere";
// }

// }


//====================

 
}

//  $QUERY5 = 'SELECT id FROM student WHERE email=".$_SESSION["email"]." and password = ".$_SESSION["password"]."';
//  $QUERY5 = "SELECT id FROM student WHERE email=".$_SESSION["email"]." and password =".$_SESSION["password"].";
//===============================================================
function read_reply($ids1){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY3 = "SELECT * FROM `doctor` JOIN reply ON reply.replied_by=doctor.id JOIN pos_com ON pos_com.pos_c = post_id_c";

    $RESULT3 = mysqli_query($CONNECTION,$QUERY3);
    $ROW3 = mysqli_fetch_Assoc($RESULT3);
    while($ROW3 = mysqli_fetch_Assoc($RESULT3)){
   
       if(mysqli_num_rows($RESULT3)>0){
          
           if(substr($ids1,12)==$ROW3['post_id_c']){
   echo '
   
   <hr style="margin-left: -3rem;width: 58rem;border-top: 1px solid #bfbfbf;">
    <div class="comment" style="float: right;padding: 8px 3px 3px 3px;color: #8a8a8a;">'.$ROW3["com_date"].'</div>
   <div class="comment" style="padding: 8px 3px 3px 3px;margin-left: 2rem;text-transform: uppercase;color:#2C93FF; color:red;">'.$ROW3["doctorName"].'</a> </div>
   <div class="comment" style="padding: 8px 3px 3px 3px;height: 7rem;"><img src = ../admins/'.$ROW3["doc_img"].' style="height: 4rem;width: 4rem;border-radius: 50%;margin-top: -8rem;margin-left: -3rem;"> </div>
   <div class="comment" style= "margin-top: -5rem;font-weight: bold;">'.$ROW3["comment_body"].'</div>
    
    
        
        ';
           }
           
   //     }else echo '<hr style="margin-left: -3rem;width: 58rem;border-top: 1px solid #bfbfbf;">
   //     <div class="comment1" style="float: right;padding: 8px 3px 3px 3px;color: #8a8a8a;">'.$ROW3["com_date"].'</div>
   //    <div class="comment1" style="padding: 8px 3px 3px 3px;margin-left: 2rem;text-transform: uppercase;color:#2C93FF;">'.$ROW3["studentName"].' </div>
   //    <div class="comment1" style="padding: 8px 3px 3px 3px;height: 7rem;"><img src = '.$ROW3["stu_profile_img"].'.jpg style="height: 4rem;width: 4rem;border-radius: 50%;margin-top: -8rem;margin-left: -3rem;"> </div>
   //    <div class="comment" style= "margin-top: -5rem;font-weight: bold;">'.$ROW3["comment_body"].'</div>
       
       
           
   //         ';
   
   }
   
    }
    
    // echo '</div></div>';
   
   }
   
  
function posts_doc ($email,$password){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM doctor WHERE 1";
    $QUERY2 = "SELECT * FROM `doctor` JOIN posts ON doc_id=doctor.id  ORDER BY `posts`.`post_date` DESC";
    $QUERY3 = "SELECT * FROM `student` JOIN comments ON commented_by=student.id JOIN pos_com ON pos_com.pos_c = post_id_c";
    
    $QUERY4 = "SELECT * FROM `comments` JOIN pos_com ON pos_com.pos_c = post_id_c";
    $QUERY5 = "SELECT id FROM doctor WHERE email='$email' and password = '$password'";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
    $ROW = mysqli_fetch_Assoc($RESULT);
    $RESULT2 = mysqli_query($CONNECTION,$QUERY2);
    // $ROW2 = mysqli_fetch_Assoc($RESULT2);
    $RESULT3 = mysqli_query($CONNECTION,$QUERY3);
    $ROW3 = mysqli_fetch_Assoc($RESULT3);
    $RESULT4 = mysqli_query($CONNECTION,$QUERY4);
    $ROW4 = mysqli_fetch_Assoc($RESULT4);
    $RESULT5 = mysqli_query($CONNECTION,$QUERY5);
    $ROW5 = mysqli_fetch_Assoc($RESULT5);

    //-------------------O---------------------------
    while($ROW2 = mysqli_fetch_Assoc($RESULT2)){

        if(mysqli_num_rows($RESULT2)>0){
           

    
    $ids = "comment_body".$ROW2['ids'];
    
           if(strlen(isset($_POST[$ids]))>0){



    if(isset($_POST[$ids])&&isset($ROW5['id'])){
    $comment_body = $_POST[$ids];
    $commented_by = $ROW5['id'];
    
    // echo $_POST[$ids];
    // creat_comment($comment_body,$commented_by,$ROW2['ids']);
    creat_reply($comment_body,$commented_by,$ROW2['ids']);
}}
    // }}}
    // while($ROW2 = mysqli_fetch_Assoc($RESULT2)){

    //     if(mysqli_num_rows($RESULT2)>0){
           
            
    echo ' <div class="post-container">
 
     <div class="post-head">
     
     <div class="img-circle" style="background:#a7a7a7;">
     <img src=../admins/'.$ROW2["doc_img"].' class = "prof-img">
     
     </div>
     <div class="name">
     
     <h4 style="color:red; text-transform:uppercase;">'.$ROW2["doctorName"].'</h4>
     </div>
     </div>
     <hr class="hrx">
     <div class="body-post">
     
     <h6 class="h6x">'.$ROW2["post_body"].'</h6>
     
     </div>
     
     <hr class="hrx">
     <div class="react-container">
     <div href="#" class="comments"><img src ="images/chat.png"  id="com-sec'.$ROW2['ids'].'"  onclick ="toggle(this.id);" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 5px;height: 2rem;"  >comments</div>
     
     
     </div>
        ';
    echo' <div id="com-sec'.$ROW2['ids'].'1"  onclick ="toggle(this.id);" style ="  display:block;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;padding-top: 2rem;padding-left: 3rem;" >
 <form action="home.php" method="post" style="display: flex;background:#ececec;">
 <textarea name="comment_body'.$ROW2['ids'].'" id="" cols="30" rows="10" style = "width: 438px;height: 50px;"></textarea>
 <input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:#f62459;color:white; border-radius: 6px;">
 
 </form>'; 
    
// echo substr($ids,12);
read_reply($ids);
read_commments($ids);


    }}}

function create_post($post_body,$email,$password){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM doctor WHERE 1";

    $RESULT = mysqli_query($CONNECTION,$QUERY);

    // $ROW = mysqli_fetch_Assoc($RESULT);
    while($ROW = mysqli_fetch_Assoc($RESULT)){
    
        if(mysqli_num_rows($RESULT)>0){
    if($email==$ROW['email']&&$password==$ROW['password']){

        $id=$ROW['id'];
        $doc_img  = $ROW["doc_img"];
        $doc_name=$ROW["doctorName"];
    
    }}}
        
    
//         echo'<div class="post-container">
 
//         <div class="post-head">
        
//         <div class="img-circle">
//         <img src='.$doc_img.'.jpg class = "prof-img">
        
//         </div>
//         <div class="name">
        
//         <h4 style="color:red;text-transform:uppercase;">'.$doc_name.'</h4>
//         </div>
//         </div>
//         <form action="home.php" method="POST">
//         <hr class="hrx">
//         <div class="body-post">
        
//         <div class="form-group purple-border">
   
//      <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" style="width: 577px;height: 180px;font-size: 2rem;margin-top: -1rem; resize:none;padding: 3px;" placeholder="Type something...." name="post_body"></textarea>
//    </div>     </div>
       
//    <div id="com-sec" style =" padding: 4px; display:flex;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;flex-direction: row-reverse;" >
    
//     <input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:#f62459;color:white; border-radius: 6px;">
    
//     </div></div></form>';




    // ="INSERT INTO `posts` (`post_body`, `doc_id`) VALUES('.$post_body.','.$id.')";
    $QUERY2 = "INSERT INTO `posts`(`post_body`,`doc_id`)
    VALUES ("."'". $post_body."'". ",".$id.")";

if(mysqli_query($CONNECTION,$QUERY2)){
// echo "succeed";


}
// else echo "error".$QUERY2."<br>".mysqli_error($CONNECTION);

mysqli_close($CONNECTION);
}



function create_view_post($email,$password){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM doctor WHERE 1";

    $RESULT = mysqli_query($CONNECTION,$QUERY);

    // $ROW = mysqli_fetch_Assoc($RESULT);
    while($ROW = mysqli_fetch_Assoc($RESULT)){
    
        if(mysqli_num_rows($RESULT)>0){
    if($email==$ROW['email']&&$password==$ROW['password']){

        $id=$ROW['id'];
        $doc_img  = $ROW["doc_img"];
        $doc_name=$ROW["doctorName"];
    
    }}}
        
    
        echo'<div class="post-container">
 
        <div class="post-head">
        
        <div class="img-circle" style="background:#a7a7a7;">
        <img src=../admins/'.$doc_img.' class = "prof-img">
        
        </div>
        <div class="name">
        
        <h4 style="color:red;text-transform:uppercase;">'.$doc_name.'</h4>
        </div>
        </div>
        <form action="home.php" method="POST">
        <hr class="hrx">
        <div class="body-post">
        
        <div class="form-group purple-border">
   
     <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" style="width: 577px;height: 180px;font-size: 2rem;margin-top: -1rem; resize:none;padding: 3px;" placeholder="Type something...." name="post_body"></textarea>
   </div>     </div>
       
   <div id="com-sec" style =" padding: 4px; display:flex;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;flex-direction: row-reverse;" >
    
    <input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:#f62459;color:white; border-radius: 6px;">
    
    </div></div></form>';




    
mysqli_close($CONNECTION);
}






function read_commments($ids1){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY3 = "SELECT * FROM `student` JOIN comments ON commented_by=student.id JOIN pos_com ON pos_com.pos_c = post_id_c";
    $q = "SET FOREIGN_KEY_CHECKS = 0";
    mysqli_query($CONNECTION,$q);
    $QUERY = "INSERT INTO `pos_com`(`pos_c`)SELECT ids FROM posts WHERE ids NOT IN (SELECT pos_c FROM pos_com)";
    if(mysqli_query($CONNECTION,$QUERY)){
    
        
        
        }
        // else echo "error".$QUERY."<br>".mysqli_error($CONNECTION);
        
       
    $RESULT3 = mysqli_query($CONNECTION,$QUERY3);
    $ROW3 = mysqli_fetch_Assoc($RESULT3);
    while($ROW3 = mysqli_fetch_Assoc($RESULT3)){
   
       if(mysqli_num_rows($RESULT3)>0){
          
           if(substr($ids1,12)==$ROW3['post_id_c']){
   echo '
   
   <hr style="margin-left: -3rem;width: 58rem;border-top: 1px solid #bfbfbf;">
    <div class="comment" style="float: right;padding: 8px 3px 3px 3px;color: #8a8a8a;">'.$ROW3["com_date"].'</div>
   <div class="comment" style="padding: 8px 3px 3px 3px;margin-left: 2rem;text-transform: uppercase;color:#2C93FF;">'.$ROW3["studentName"].' </div>
   <div class="comment" style="padding: 8px 3px 3px 3px;height: 7rem;"><img src =../admins/'.$ROW3["stu_profile_img"].' style="height: 4rem;width: 4rem;border-radius: 50%;margin-top: -8rem;margin-left: -3rem;"> </div>
   <div class="comment" style= "margin-top: -5rem;font-weight: bold;">'.$ROW3["comment_body"].'</div>
    
    
        
        ';
           }
           
   //     }else echo '<hr style="margin-left: -3rem;width: 58rem;border-top: 1px solid #bfbfbf;">
   //     <div class="comment1" style="float: right;padding: 8px 3px 3px 3px;color: #8a8a8a;">'.$ROW3["com_date"].'</div>
   //    <div class="comment1" style="padding: 8px 3px 3px 3px;margin-left: 2rem;text-transform: uppercase;color:#2C93FF;">'.$ROW3["studentName"].' </div>
   //    <div class="comment1" style="padding: 8px 3px 3px 3px;height: 7rem;"><img src = '.$ROW3["stu_profile_img"].'.jpg style="height: 4rem;width: 4rem;border-radius: 50%;margin-top: -8rem;margin-left: -3rem;"> </div>
   //    <div class="comment" style= "margin-top: -5rem;font-weight: bold;">'.$ROW3["comment_body"].'</div>
       
       
           
   //         ';
   
   }
   
    }
    
    echo '</div></div>';
    
    $q = "SET FOREIGN_KEY_CHECKS = 1";
    mysqli_query($CONNECTION,$q);
   }
   
  function view_posts(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `posts` JOIN doctor ON posts.doc_id = doctor.id ORDER BY `posts`.`post_date` ASC ";


    $RESULT = mysqli_query($CONNECTION,$QUERY);
        
    while($ROW = mysqli_fetch_Assoc($RESULT)){

        if(mysqli_num_rows($RESULT)>0){

            // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];

                echo '
                <tr>
                <tbody>
                <th>"'.$ROW['doctorName'].'"</th>
                <td>"'.$ROW['post_body'].'"</td>
                <td>'.$ROW['post_date'].'</td>
                </tbody>
                </tr>';



        }

        }

        mysqli_close($CONNECTION);


    }


function  delete_view_posts(){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `posts` JOIN doctor ON posts.doc_id = doctor.id ORDER BY `posts`.`post_date` ASC ";


    $RESULT = mysqli_query($CONNECTION,$QUERY);
        
    while($ROW = mysqli_fetch_Assoc($RESULT)){

        if(mysqli_num_rows($RESULT)>0){

            // echo "name = ".$ROW['id']."'>".$ROW["studentName"]."</a>  age = ".$ROW["studentAge"]."<br>"."  collage = ".$ROW["collage"]."<br>"."  email = ".$ROW["email"]."<br>"."  password = ".$ROW["password"];

                echo '
                <tr>
                <tbody>
                <th>"'.$ROW['doctorName'].'"</th>
                <td>"'.$ROW['post_body'].'"</td>
                <td>'.$ROW['post_date'].'</td>
                <td><a href="delete_posts.php?delete='.$ROW['ids'].'">
                <input type="submit" class="btn btn-primary"  value="DELETE"></td>
                </tbody>
                </tr>';



        }

        }

        mysqli_close($CONNECTION);


}

function Delete_posts($id){
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY ="DELETE FROM `posts` where ids =$id" ;  
     $q = "SET FOREIGN_KEY_CHECKS = 0";
     mysqli_query($CONNECTION,$q);
     if(mysqli_query($CONNECTION,$QUERY)){
    //  echo "SUCCESS";
         
         
         }
        // else echo "error".$QUERY."<br>".mysqli_error($CONNECTION);
         



}

  


    function get_uncommn_subject($email,$password){


        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
        $QUERY1 = "SELECT * FROM student WHERE 1";
    $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
$id=0;
    // $ROW = mysqli_fetch_Assoc($RESULT);
    $year_of_study=0;

    while($ROW1 = mysqli_fetch_Assoc($RESULT1)){

        if(mysqli_num_rows($RESULT1)>0){
    if($email==$ROW1['email']&&$password==$ROW1['password']){
    $id=$ROW1['id'];
    $year_of_study= $ROW1['y_of_s'];
    
}
    
            

}}
// echo $id;
// $QUERY = "create temporary table mix23 SELECT subject_s_name ,sub_ids  FROM 
// `suggested_subjec` JOIN subject_students_groups ON ".$id." = subject_students_groups.group_num ;
// SELECT * FROM subject LEFT JOIN mix23 ON subject.id = mix23.sub_ids WHERE mix23.sub_ids is null  ";
$QUERY = "create temporary table mix23 SELECT subject_s_name ,sub_ids,stu_id FROM `suggested_subjec` JOIN subject_students_groups ON ".$id." = subject_students_groups.group_num WHERE stu_id =subject_students_groups.group_num
;SELECT * FROM subject LEFT JOIN mix23 ON subject.id = mix23.sub_ids WHERE mix23.sub_ids is null 
";

        if (mysqli_multi_query($CONNECTION,$QUERY))
        {
          do
            {
            // Store first result set
            if ($result=mysqli_store_result($CONNECTION)) {
              // Fetch one and one row
              while ($row=mysqli_fetch_row($result))
                {
                    echo"  
                                <tr>
                                <th scope='row'>" .$row[2]."</th>
                                <td> ".$row[1]."</td>
                                <td>" .$row[3]."</td>
                                <td>" .$row[5]."</td>";
                               
                                if($row[5]<=$year_of_study) echo"
                                <td><input type='checkbox' name='check_list[]' value ='$row[0] $row[5] $row[1]'  class='custom-control-input' id='defaultUnchecked'> </td>
                                ";
                                else echo"
                                <td><input type='checkbox' name='check_list[]' class='custom-control-input' id='defaultUnchecked' disabled = true style='opacity:0;' ></td>";

                                ;"
                                </tr>
                                <tr>";
                }
              // Free result set
              mysqli_free_result($result);
              }
            }
          while (mysqli_next_result($CONNECTION));
        }
        
        mysqli_close($CONNECTION);
        


    }




function subject_failed($username , $password){


    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM `subject` JOIN stu_sub ON subject.id = stu_sub.sub_id1 JOIN student ON student.id =
    stu_sub.stu_id1 WHERE Successful_failed = 'failed' and type_of_exam =3";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
    while($ROW = mysqli_fetch_Assoc($RESULT)){
   
        if(mysqli_num_rows($RESULT)>0){
        //     echo "Subject Name : ".$ROW['sub_name']."   Year Of Study : ".$ROW['year_of_study']."     ";
        //     echo '
        
        //     <input type="checkbox" class="custom-control-input" id="defaultUnchecked" onchange="checked();">
        //     <br>
        // '."     ";
        if(/*substr($ids1,12)*/$username==$ROW['email']&&$password==$ROW['password']){
            echo"  
            <tr>
            <th scope='row' style='color:red'>" .$ROW['sub_id1']."</th>
            <th scope='row' style='color:red'>" .$ROW['stu_id1']."</th>
            <input type='hidden' name='sub_id1[]' value='".$ROW['sub_id1']."'>
            <input type='hidden' name='stu_id1[]' value='".$ROW['stu_id1']."'>

            <th scope='row'>" .$ROW['sub_code']."</th>
            <td> ".$ROW['sub_name']."</td>
            <td>" .$ROW['sub_hours']."</td>
            <td>" .$ROW['mark']."</td>
            
            ";

             echo "<th style='background:red;text-align: center;'>" .$ROW['Successful_failed']."</th>
             <td><input type='checkbox' name='check_lists[]' class='custom-control-input' id='defaultUnchecked' </td>
            </tr>
            
            <tr>";
            

        }}}
}

function rgister_subject($sub_id1,$year_of_study,$subject_s_name,$email,$password){


    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
     $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
     $QUERY1 = "SELECT email,password,id FROM student WHERE 1";
   
     $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
 $id=0;
     // $ROW = mysqli_fetch_Assoc($RESULT);
     while($ROW1 = mysqli_fetch_Assoc($RESULT1)){
 
         if(mysqli_num_rows($RESULT1)>0){
     if($email==$ROW1['email']&&$password==$ROW1['password']){
     $stu_id1=$ROW1['id'];
     
 }
     
             
 
 }}
    $t1=1;
    $t2=2;
    $t3=3;
    $sql1 = "INSERT INTO `stu_sub`(`stu_id1`,`sub_id1`,`year_of_study`,`type_of_exam`)
                          VALUES ("."'". $stu_id1."'". ",". $sub_id1.",".$year_of_study.",".$t1.")";
    $sql11 = "INSERT INTO `stu_sub`(`stu_id1`,`sub_id1`,`year_of_study`,`type_of_exam`)
                          VALUES ("."'". $stu_id1."'". ",". $sub_id1.",".$year_of_study.",".$t2.")";
    $sql111 = "INSERT INTO `stu_sub`(`stu_id1`,`sub_id1`,`year_of_study`,`type_of_exam`)
                          VALUES ("."'". $stu_id1."'". ",". $sub_id1.",".$year_of_study.",".$t3.")";
    $sql2 = "INSERT INTO `suggested_subjec`(`subject_s_name`,`stu_id`,`sub_ids`)
                          VALUES ("."'". $subject_s_name."'". ",". $stu_id1.",".$sub_id1.")";
    $sql3 = "INSERT INTO `subject_students_groups`(`group_num`)SELECT id FROM student WHERE id NOT IN (SELECT group_num FROM subject_students_groups )";
    
    // note student groups dont forget
    if(mysqli_query($CONNECTION,$sql1)){
    // echo "succeed";
    
    
    }
    // else echo "error".$sql1."<br>".mysqli_error($CONNECTION);
    if(mysqli_query($CONNECTION,$sql11)){
        // echo "succeed";
        
        
        }
        // else echo "error".$sql11."<br>".mysqli_error($CONNECTION);
        if(mysqli_query($CONNECTION,$sql111)){
            // echo "succeed";
            
            
            }
            // else echo "error".$sql111."<br>".mysqli_error($CONNECTION);
    if(mysqli_query($CONNECTION,$sql2)){
        // echo "succeed";
        
        
        }
        // else echo "error".$sql2."<br>".mysqli_error($CONNECTION);
        $q = "SET FOREIGN_KEY_CHECKS = 0";
        mysqli_query($CONNECTION,$q);
        if(mysqli_query($CONNECTION,$sql3)){
            // echo "succeed";
            
            
            }
            // else echo "error".$sql3."<br>".mysqli_error($CONNECTION);
        
    mysqli_close($CONNECTION);
    }
    
function Set_Marks($email,$password,$year_of_study){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);


    $QUERY1 = "SELECT email,password,doctorName FROM doctor WHERE 1";
   
    $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
    $Doc_name="";
    // $ROW = mysqli_fetch_Assoc($RESULT);
    while($ROW1 = mysqli_fetch_Assoc($RESULT1)){

        if(mysqli_num_rows($RESULT1)>0){
    if($email==$ROW1['email']&&$password==$ROW1['password']){
    $Doc_name=$ROW1['doctorName'];
    
}}}


    // $QUERY = "SELECT * FROM `stu_sub` JOIN student ON student.id = stu_sub.stu_id1
    // JOIN subject ON subject.id = stu_sub.sub_id1 JOIN
    //  doctor ON subject.doc_id = doctor.id where  type_of_exam =3 and(doctorName='$Doc_name' and stu_sub.year_of_study = $year_of_study) ";
     $QUERY = "SELECT * FROM `stu_sub` JOIN student ON student.id = stu_sub.stu_id1 JOIN subject ON subject.id = stu_sub.sub_id1 
     JOIN doctor ON subject.doc_id = doctor.id 
     where type_of_exam =3 and(doctorName='$Doc_name' and stu_sub.year_of_study = $year_of_study AND stu_sub.mark= 0 or stu_sub.mark=null )";
$RESULT = mysqli_query($CONNECTION,$QUERY);
// echo '';
$index=0;
while($ROW = mysqli_fetch_Assoc($RESULT)){
    if(mysqli_num_rows($RESULT)>0){
$index++;
echo '<tr>
<th scope="row">'.$ROW["studentName"].'</a></th>
<td>'.$ROW["sub_name"].'</td>
<td>   <div class="form-group col-md-2 ">
<input type="hidden" name="stu_id1[]" value="'.$ROW["stu_id1"].'">

<input type="hidden" name="sub_id1[]" value = "'.$ROW["sub_id1"].'">
<select name = "selected_type[]" id="inputState" class="form-control" style="width:auto;height: 28px;">
 <option selected ></option>
 <option value = 1>first exam</option>
 <option value = 2>second exam</option>
 <option value = 3>Final</option>
 
</select>
</div></td> 
<td><input type="text" name="check_list[]" id="" placeholder="Mark"></td>
<td><input type="text" name="degree[]"  id="" placeholder="Degree"></td></tr>';

// echo '<td style="color:red;">failed</td>';}

// else {echo '<td style="color:green;">successful</td>
    









}}




}

function find_stu($email,$password,$stu_id,$sub_id,$toe,$mark,$grade)
{
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY1 = "SELECT email,password,doctorName FROM doctor WHERE 1";
   
    $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
    $Doc_name="";
    // $ROW = mysqli_fetch_Assoc($RESULT);
    while($ROW1 = mysqli_fetch_Assoc($RESULT1)){

        if(mysqli_num_rows($RESULT1)>0){
    if($email==$ROW1['email']&&$password==$ROW1['password']){
    $Doc_name=$ROW1['doctorName'];
    
}}}


    $QUERY = "SELECT * FROM `stu_sub` JOIN student ON student.id = stu_sub.stu_id1
    JOIN subject ON subject.id = stu_sub.sub_id1 JOIN
     doctor ON subject.doc_id = doctor.id where (doctorName='$Doc_name') ";
$update_query="UPDATE stu_sub
SET mark = $mark, grade= '$grade'
WHERE stu_id1 =$stu_id and sub_id1=$sub_id and type_of_exam =$toe";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
  
    while($ROW = mysqli_fetch_Assoc($RESULT)){
        if(mysqli_num_rows($RESULT)>0){

        if($stu_id==$ROW['stu_id1']&&$sub_id==$ROW['sub_id1']&&$toe==$ROW['type_of_exam']){
        
        if(mysqli_query($CONNECTION,$update_query)){
            // echo "succeed";
      
            
            
            }
            // else echo "error".$update_query."<br>".mysqli_error($CONNECTION);
        }
        
        }}



}
function reset_sub_mark($email,$password,$stu_id,$sub_id)
{
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
 

    $QUERY = "SELECT * FROM `stu_sub` JOIN student ON student.id = stu_sub.stu_id1
     JOIN subject ON subject.id = stu_sub.sub_id1";
$update_query="UPDATE stu_sub
SET mark = null, grade= '',Successful_failed =''
WHERE stu_id1 =$stu_id and sub_id1=$sub_id";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
  
    while($ROW = mysqli_fetch_Assoc($RESULT)){
        if(mysqli_num_rows($RESULT)>0){

        if($stu_id==$ROW['stu_id1']&&$sub_id==$ROW['sub_id1']){
        
        if(mysqli_query($CONNECTION,$update_query)){
            // echo "succeed";
      
            
            
            }
            // else echo "error".$update_query."<br>".mysqli_error($CONNECTION);
        }
        
        }}



}




function Absent_Present($email,$password,$year_of_study){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);


    $QUERY1 = "SELECT email,password,doctorName FROM doctor WHERE 1";
   
    $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
    $Doc_name="";
    // $ROW = mysqli_fetch_Assoc($RESULT);
    while($ROW1 = mysqli_fetch_Assoc($RESULT1)){

        if(mysqli_num_rows($RESULT1)>0){
    if($email==$ROW1['email']&&$password==$ROW1['password']){
    $Doc_name=$ROW1['doctorName'];
    
}}}


    $QUERY = "SELECT * FROM `stu_sub` JOIN student ON student.id = stu_sub.stu_id1
    JOIN subject ON subject.id = stu_sub.sub_id1 JOIN
     doctor ON subject.doc_id = doctor.id where type_of_exam=3 and (doctorName='$Doc_name' and stu_sub.year_of_study = $year_of_study ) and stu_sub.mark = 0";
$RESULT = mysqli_query($CONNECTION,$QUERY);
// echo '';
$index=0;
while($ROW = mysqli_fetch_Assoc($RESULT)){
    if(mysqli_num_rows($RESULT)>0){
$index++;
echo '<tr>
<th scope="row">'.$ROW["studentName"].'</a></th>
<td>'.$ROW["sub_name"].'</td>
<td>'.$ROW["stu_id1"].'</td>
<td>'.$ROW["sub_id1"].'</td>
<td><input type="checkbox" name="checks[]" value = "Absent"></td>
<td><input type="checkbox" name="checks[]" value = "Present"></td>
<td>   <div class="form-group col-md-2 ">

<input type="hidden" name="stu_id1[]" value="'.$ROW["stu_id1"].'">
<input type="hidden" name="sub_id1[]" value = "'.$ROW["sub_id1"].'">



</tr>';







}}




}


function Set_Absent_Present($email,$password,$stu_id,$sub_id,$p_or_a,$toe)
{
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY1 = "SELECT email,password,doctorName FROM doctor WHERE 1";
   
    $RESULT1 = mysqli_query($CONNECTION,$QUERY1);
    $Doc_name="";
    // $ROW = mysqli_fetch_Assoc($RESULT);
    while($ROW1 = mysqli_fetch_Assoc($RESULT1)){

        if(mysqli_num_rows($RESULT1)>0){
    if($email==$ROW1['email']&&$password==$ROW1['password']){
    $Doc_name=$ROW1['doctorName'];
    
}}}


    $QUERY = "SELECT * FROM `stu_sub` JOIN student ON student.id = stu_sub.stu_id1
    JOIN subject ON subject.id = stu_sub.sub_id1 JOIN
     doctor ON subject.doc_id = doctor.id where (doctorName='$Doc_name') ";

// $insert= "INSERT INTO `absent` (`student_id`,`sub_id`,`presentOrAbsent`)VALUES
// (".$stu_id.",".$sub_id.","."'". $subject_s_name."'".")";
if($p_or_a !=null)
$insert= "INSERT INTO `absent` (`student_id`,`sub_id`,`presentOrAbsent`)VALUES
 (".$stu_id.",".$sub_id.","."'".$p_or_a."'".")";

// $update_query="UPDATE stu_sub
// SET presentOrAbsent = $a_or_b;
// WHERE stu_id1 =$stu_id and sub_id1=$sub_id and type_of_exam =$toe";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
  
    while($ROW = mysqli_fetch_Assoc($RESULT)){
        if(mysqli_num_rows($RESULT)>0){

        if($stu_id==$ROW['stu_id1']&&$sub_id==$ROW['sub_id1']&&$toe==$ROW['type_of_exam']){
        
        if(mysqli_query($CONNECTION,$insert)){
            // echo "succeed";
      
            
            
            }
            // else echo "error".$insert."<br>".mysqli_error($CONNECTION);
        }
        
        }}



}



function countq($TABLE){

     $HOSTNAME = "localhost";
     $DBNAME = "sums";
     $USERNAME = "root";
     $PASSWORD = "";
     $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
     $QUERY = "SELECT COUNT(*) as total FROM ".$TABLE."";   
     $RESULT = mysqli_query($CONNECTION,$QUERY);

    $ROW = mysqli_fetch_Assoc($RESULT);
   
    echo $ROW["total"];

}

function search_enginez($email,$password,$input){
// echo "$input";
    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
    $QUERY = "SELECT * FROM doctor WHERE 1";
    $QUERY2 = "SELECT * FROM `doctor` JOIN posts ON doc_id=doctor.id WHERE posts.post_body LIKE ('$input%')";
    // echo $QUERY2;
    // $QUERY3 = "SELECT * FROM `student` JOIN comments ON commented_by=student.id JOIN pos_com ON pos_com.pos_c = post_id_c";
    $QUERY3 = "SELECT * FROM `student` JOIN comments ON commented_by=student.id JOIN pos_com ON pos_com.pos_c = post_id_c";

    $QUERY4 = "SELECT * FROM `comments` JOIN pos_com ON pos_com.pos_c = post_id_c";
    $QUERY5 = "SELECT id FROM student WHERE email='$email' and password = '$password'";
    $RESULT = mysqli_query($CONNECTION,$QUERY);
    $ROW = mysqli_fetch_Assoc($RESULT);
    $RESULT2 = mysqli_query($CONNECTION,$QUERY2);
    // $ROW2 = mysqli_fetch_Assoc($RESULT2);
    $RESULT3 = mysqli_query($CONNECTION,$QUERY3);
    $ROW3 = mysqli_fetch_Assoc($RESULT3);
    $RESULT4 = mysqli_query($CONNECTION,$QUERY4);
    $ROW4 = mysqli_fetch_Assoc($RESULT4);
    $RESULT5 = mysqli_query($CONNECTION,$QUERY5);
    $ROW5 = mysqli_fetch_Assoc($RESULT5);

    //-------------------O---------------------------
    while($ROW2 = mysqli_fetch_Assoc($RESULT2)){

        if(mysqli_num_rows($RESULT2)>0){
           

    
    $ids = "comment_body".$ROW2['ids'];
    
           if(strlen(isset($_POST[$ids]))>0){



    if(isset($_POST[$ids])&&isset($ROW5['id'])){
    $comment_body = $_POST[$ids];
    $commented_by = $ROW5['id'];
    
    // echo $_POST[$ids];
    creat_comment($comment_body,$commented_by,$ROW2['ids']);
    // creat_reply($comment_body,2,$ROW2['ids']);
}}
    // }}}
    // while($ROW2 = mysqli_fetch_Assoc($RESULT2)){

    //     if(mysqli_num_rows($RESULT2)>0){
           
            
    echo ' <div class="post-container" name="d1">
 
     <div class="post-head">
     
     <div class="img-circle" style="background:#a7a7a7;">
     <img src=../admins/'.$ROW2["doc_img"].'class = "prof-img">
     
     </div>
     <div class="name">
     
     <h4>'.$ROW2["doctorName"].'</h4>
     </div>
     </div>
     <hr class="hrx">
     <div class="body-post">
     <hr>
     <h6 class="h6x">'.$ROW2["post_body"].'</h6>
     
     </div>
     <hr class="hrx">
     <div class="react-container">
     <div href="#" class="comments"><img src ="images/chat.png"  id="com-sec'.$ROW2['ids'].'"  onclick ="toggle(this.id);" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 5px;height: 2rem;"  >comments</div>
     
     
     </div>
        ';
    echo' <div id="com-sec'.$ROW2['ids'].'1"  onclick ="toggle(this.id);" style ="  display:block;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;padding-top: 2rem;padding-left: 3rem;" >
 <form action="home.php?m='.$input.'" method="post" style="display: flex;background:#ececec;padding-bottom: 2rem;">
 <textarea name="comment_body'.$ROW2['ids'].'" id="" cols="30" rows="10" style = "width: 438px;height: 50px;"></textarea>
 <input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:#f62459;color:white; border-radius: 6px;">
 
 </form>'; 
    
// echo substr($ids,12);
read_reply($ids);
read_commments($ids);


    }}

 
}
function search_enginezd($email,$password,$input){
    
     

        $HOSTNAME = "localhost";
        $DBNAME = "sums";
        $USERNAME = "root";
        $PASSWORD = "";
        $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
        $QUERY = "SELECT * FROM doctor WHERE 1";
        $QUERY2 = "SELECT * FROM `doctor` JOIN posts ON doc_id=doctor.id WHERE posts.post_body LIKE ('$input%')";
        $QUERY3 = "SELECT * FROM `student` JOIN comments ON commented_by=student.id JOIN pos_com ON pos_com.pos_c = post_id_c";
        
        $QUERY4 = "SELECT * FROM `comments` JOIN pos_com ON pos_com.pos_c = post_id_c";
        $QUERY5 = "SELECT id FROM doctor WHERE email='$email' and password = '$password'";
        $RESULT = mysqli_query($CONNECTION,$QUERY);
        $ROW = mysqli_fetch_Assoc($RESULT);
        $RESULT2 = mysqli_query($CONNECTION,$QUERY2);
        // $ROW2 = mysqli_fetch_Assoc($RESULT2);
        $RESULT3 = mysqli_query($CONNECTION,$QUERY3);
        $ROW3 = mysqli_fetch_Assoc($RESULT3);
        $RESULT4 = mysqli_query($CONNECTION,$QUERY4);
        $ROW4 = mysqli_fetch_Assoc($RESULT4);
        $RESULT5 = mysqli_query($CONNECTION,$QUERY5);
        $ROW5 = mysqli_fetch_Assoc($RESULT5);
    
        //-------------------O---------------------------
        while($ROW2 = mysqli_fetch_Assoc($RESULT2)){
    
            if(mysqli_num_rows($RESULT2)>0){
               
    
        
        $ids = "comment_body".$ROW2['ids'];
        
               if(strlen(isset($_POST[$ids]))>0){
    
    
    
        if(isset($_POST[$ids])&&isset($ROW5['id'])){
        $comment_body = $_POST[$ids];
        $commented_by = $ROW5['id'];
        
        // echo $_POST[$ids];
        // creat_comment($comment_body,$commented_by,$ROW2['ids']);
        creat_reply($comment_body,$commented_by,$ROW2['ids']);
    }}
        // }}}
        // while($ROW2 = mysqli_fetch_Assoc($RESULT2)){
    
        //     if(mysqli_num_rows($RESULT2)>0){
               
                
        echo ' <div class="post-container">
     
         <div class="post-head">
         
         <div class="img-circle" style="background:#a7a7a7;">
         <img src=../admins/'.$ROW2["doc_img"].' class = "prof-img">
         
         </div>
         <div class="name">
         
         <h4 style="color:red; text-transform:uppercase;">'.$ROW2["doctorName"].'</h4>
         </div>
         </div>
         <hr class="hrx">
         <div class="body-post">
         
         <h6 class="h6x">'.$ROW2["post_body"].'</h6>
         
         </div>
         
         <hr class="hrx">
         <div class="react-container">
         <div href="#" class="comments"><img src ="images/chat.png"  id="com-sec'.$ROW2['ids'].'"  onclick ="toggle(this.id);" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 5px;height: 2rem;"  >comments</div>
         
         
         </div>
            ';
        echo' <div id="com-sec'.$ROW2['ids'].'1"  onclick ="toggle(this.id);" style ="  display:block;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;padding-top: 2rem;padding-left: 3rem;" >
     <form action="home.php" method="post" style="display: flex;background:#ececec;">
     <textarea name="comment_body'.$ROW2['ids'].'" id="" cols="30" rows="10" style = "width: 438px;height: 50px;"></textarea>
     <input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:#f62459;color:white; border-radius: 6px;">
     
     </form>'; 
        
    // echo substr($ids,12);
    read_reply($ids);
    read_commments($ids);
    
    







        }}



    }
    
function successful_failed_checker(){

    $HOSTNAME = "localhost";
    $DBNAME = "sums";
    $USERNAME = "root";
    $PASSWORD = "";
    $CONNECTION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);

    // $QUERY = "SELECT mark FROM `stu_sub`";

    // $RESULT = mysqli_query($CONNECTION,$QUERY);
 
    // while($ROW = mysqli_fetch_Assoc($RESULT)){
    //     if(mysqli_num_rows($RESULT)>0){
    // if($ROW['mark']==0){

        $update_query = "UPDATE `stu_sub` SET `Successful_failed`= '' WHERE stu_sub.mark=0";
        mysqli_query($CONNECTION,$update_query);
    
    // }
    // if($ROW['mark']<=50){
    $update_query = "UPDATE `stu_sub` SET `Successful_failed`= 'f' WHERE  stu_sub.mark<=50 and stu_sub.mark!=0 ";
        mysqli_query($CONNECTION,$update_query);
    
    // }
    // else if($ROW['mark']>50) {
    $update_query = "UPDATE `stu_sub` SET `Successful_failed`= 'successful' WHERE stu_sub.mark>50";
        mysqli_query($CONNECTION,$update_query);
    
    // }
    //     }

    // }

}
// }

?>