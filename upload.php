<?php


// Commande UPLOAD !!

session_start();

var_dump($_POST);
if (isset($_POST['envoyer'])) {

    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError =$_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExtension = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExtension));
    $allowed = array('jpeg','jpg','png');

        if (in_array($fileActualExt,$allowed)) {
            if ($fileError === 0){
                if($fileSize <1000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $_SESSION['url']= $fileDestination = 'upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: ../view/memegeneView.php");
                }else{
                    echo "Le fichier est trop volumineux!";
                }

            }else{
                echo "Il y a une erreur d'uploading!";
            }
        }else{
            echo "Vous ne pouvez pas importer ce type de fichier!";

        }
    }
