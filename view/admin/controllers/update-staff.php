<?php
    require_once "../config/connect_db.php";

    $connect = connect_db(); //establishing a connection to db

    //Updating records for video table
    if(isset($_POST["author"])){
        $vidId = $_POST["vidId"];
        $author = mysqli_real_escape_string($connect,$_POST["author"]);
        $dateCreated = mysqli_real_escape_string($connect,$_POST["dateCreated"]);
        $vidTopic = mysqli_real_escape_string($connect,$_POST["vidTopic"]);
        $vidUrl = mysqli_real_escape_string($connect,$_POST["vidUrl"]);
        $numViews = mysqli_real_escape_string($connect,$_POST["numViews"]);
        $rating = mysqli_real_escape_string($connect,$_POST["rating"]);
        $approved = mysqli_real_escape_string($connect,$_POST["approved"]);
    
       
        var_dump($_POST);
    
        $sqlUpdate = "UPDATE video SET author='$author',dateCreated='$dateCreated',vidTopic='$vidTopic',vidURL='$vidUrl',numViews='$numViews',rating='$rating',approved='$approved' WHERE vidId='$vidId'";
    
        if(mysqli_query($connect, $sqlUpdate)){
            echo $vidId;
            echo " ,Record updated successfully";
        }
        else {
            echo "Error updating record: " . mysqli_error($connect);
          }
        mysqli_close($connect);
    }

    //Updating records for records table
    else if(isset($_POST["development_gap"])){
        $record_id = $_POST["record_id"];
        $kayacare_id = mysqli_real_escape_string($connect,$_POST["kayacare_id"]);
        $development_gap = mysqli_real_escape_string($connect,$_POST["development_gap"]);
        $record_date = mysqli_real_escape_string($connect,$_POST["record_date"]);
    
       
        var_dump($_POST);
    
        $sqlUpdate = "UPDATE records SET kayacare_id ='$kayacare_id',development_gap='$development_gap',record_date='$record_date' WHERE record_id='$record_id'";
    
        if(mysqli_query($connect, $sqlUpdate)){
            echo $record_id;
            echo "Record updated successfully";
        }
        else {
            echo "Error updating record: " . mysqli_error($connect);
          }
        mysqli_close($connect);
    }

    //Updating Records for Cognitive Data
    else if(isset($_POST["rw_index"])){
        $record_id = $_POST["record_id"];
        $rw_index = $_POST["rw_index"];
        $numeracy_skills = $_POST["numeracy_skills"];
        $decision_making = $_POST["decision_making"];
        $ct_index = $_POST["ct_index"];
        $problem_solving = $_POST["problem_solving"];
        $curiosity = $_POST["curiosity"];
        
    
       
        var_dump($_POST);
    
        $sqlUpdate = "UPDATE cognitive_data SET rw_index ='$rw_index',numeracy_skills='$numeracy_skills',decision_making='$decision_making',ct_index='$ct_index',problem_solving='$problem_solving',curiosity='$curiosity' WHERE record_id='$record_id'";
    
        if(mysqli_query($connect, $sqlUpdate)){
            echo $record_id;
            echo "Record updated successfully";
        }
        else {
            echo "Error updating record: " . mysqli_error($connect);
          }
        mysqli_close($connect);
    }

    //Updating records for nutrition table
    else if(isset($_POST["iron_deficiency"])){
        $record_id = $_POST["record_id"];
        $iron_deficiency =$_POST["iron_difficiency"];
        $zinc_deficiency = $_POST["zinc_difficiency"];
        $growth = $_POST["growth"];
    
       
        var_dump($_POST);
    
        $sqlUpdate = "UPDATE nutrition_data SET iron_difficiency ='$iron_deficiency',zinc_difficiency='$zinc_deficiency',growth='$growth' WHERE record_id='$record_id'";
    
        if(mysqli_query($connect, $sqlUpdate)){
            echo $record_id;
            echo "Record updated successfully";
        }
        else {
            echo "Error updating record: " . mysqli_error($connect);
        }
        mysqli_close($connect);
    }

    else if(isset($_POST['child_name'])){
        $bene_id = $_POST['bene_id'];
        //Split parent and child names into first,middle,last format
        $parent_array = explode(" ", $_POST['parent_name']);
        $child_array = explode(" ", $_POST['child_name']);
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $sex = $_POST['sex'];
        $development_stage = $_POST['development_stage'];
        $location = $_POST['location'];
        
        //to update parent table we need to add 1 to bene id
        $pbene_id = $bene_id + 1;

        var_dump($_POST);
        //Let's update parent field but remember
        // parent has phone and no dob
        $sqlUpdate = "UPDATE beneficiaries SET fname ='$parent_array[0]',mname='$parent_array[1]',lname='$parent_array[2]', location='$location', sex='$sex' WHERE bene_id='$pbene_id'";
    
        if(mysqli_query($connect, $sqlUpdate)){
            echo "Record updated successfully";
        }
        else {
            echo "Error updating record: " . mysqli_error($connect);
        }

        //Update phone details for parent
         
        $sqlUpdate = "UPDATE parent SET phone='$phone' WHERE parentBene_id='$pbene_id'";
    
        if(mysqli_query($connect, $sqlUpdate)){
            echo "Record updated successfully";
        }
        else {
            echo "Error updating record: " . mysqli_error($connect);
        }

         //Update queries first update child field
         $sqlUpdate = "UPDATE beneficiaries SET fname ='$child_array[0]',mname='$child_array[1]',lname='$child_array[2]', location='$location', dob ='$dob', sex='$sex' WHERE bene_id='$bene_id'";
    
         if(mysqli_query($connect, $sqlUpdate)){
             echo $bene_id;
             echo "Record updated successfully";
         }
         else {
             echo "Error updating record: " . mysqli_error($connect);
         }

         //Update development stage for child
         $sqlUpdate = "UPDATE child SET development_stage='$development_stage' WHERE bene_id='$bene_id'";
    
         if(mysqli_query($connect, $sqlUpdate)){
             echo "Record updated successfully";
         }
         else {
             echo "Error updating record: " . mysqli_error($connect);
         }
        

         mysqli_close($connect);
    }

    //Deleting a staff
    else if(isset($_POST['staff_id']) and isset($_POST['delete'])){

        $staff_id = $_POST['staff_id'];
        $sqlDelete = "DELETE from staff WHERE staff_id=".$staff_id;

        if(mysqli_query($connect, $sqlDelete)){
            echo "Record deleted successfully";
        }
        else {
            echo "Error deleting record: " . mysqli_error($connect);
          }
        mysqli_close($connect);
    }

    //Delete a Record
    else if(isset($_POST['record_id']) and isset($_POST['delete'])){

        $record_id = $_POST['record_id'];
        $sqlDelete = "DELETE from records WHERE record_id=".$record_id;

        if(mysqli_query($connect, $sqlDelete)){
            echo "Record deleted successfully";
        }
        else {
            echo "Error deleting record: " . mysqli_error($connect);
          }
        mysqli_close($connect);
    }
    //Delete Beneficiary
    else if(isset($_POST['bene_id']) and isset($_POST['delete'])){
        $bene_id = $_POST['bene_id'];
        $pbene_id = $bene_id+1;
        //Delete Parent
        $sqlDelete = "DELETE from beneficiaries WHERE bene_id=".$pbene_id;

        if(mysqli_query($connect, $sqlDelete)){
            echo "Record deleted successfully";
        }
        else {
            echo "Error deleting record: " . mysqli_error($connect);
        }
        //Delete Child
        $sqlDelete = "DELETE from beneficiaries WHERE bene_id=".$bene_id;

        if(mysqli_query($connect, $sqlDelete)){
            echo "Record deleted successfully";
        }
        else {
            echo "Error deleting record: " . mysqli_error($connect);
        }

        
        mysqli_close($connect);
    }