<?php
// Include the database configuration file
require_once '../database/dbConfig.php';

// If file upload form is submitted
$status = $statusMsg = '';
$choix=$_GET['choix'];


  $status = 'error';

    // code...

  ;
        // Get info for prospect
        $id=$_POST['id'];
        $nom=$_POST['nom'];
        
        // insert prospect
          if ($choix=='insertion') {
            $id=$_GET['id'];
        for ($j = 0; $j <count($nom); $j++)
            {
            echo $image;
          $imgContent = addslashes(file_get_contents($image[$j]));

         $insert = $db->query("INSERT into matiere(id,nom) VALUES ('$id[$j],'$nom[$j]')");
        if($insert){
                $status = 'success';
                $statusMsg = "prospect upload successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
            }
            }


            if ($choix=='delete') {
                $id=$_GET['id'];
              // code...
            // delete section
            $sql = "DELETE FROM matiere WHERE id='$id'";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
          }
          else {


          $sql = "UPDATE etudiant SET nom='$nom' WHERE id='$id'";
          echo $id;
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
              }





// Display status message
echo $statusMsg;
?>
<a href="view.php">view</a>
