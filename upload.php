<?php


if (isset($_POST['submit'])) {

    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError =$_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExtension = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExtension));

    $allowed = array('jpeg','jpg','png'); // Get all the file extensions
    // $uploadPath = $currentDir . $uploadDirectory . basename($fileName);



        if (!  in_array($fileActualExt,$allowed)) {
            if ($fileError === 0){
                if($fileSize <2000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: choixuploadView.php?uploadsuccess");
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
