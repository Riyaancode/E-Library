<?php
include('Partials\functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
  

$statusMsg = '';

// File upload path
$targetEbook = "e-books/";
$targetCover = "Assets/img/";
$ebook = $_FILES['ebook']['name'];
$cover = $_FILES['cover']['name'];
$title = $_POST['title'];
$author = $_POST['author'];
$targetEbookPath = $targetEbook . $ebook;
$targetCoverPath = $targetCover . $cover;
$ebookInfo = pathinfo($targetEbookPath,PATHINFO_EXTENSION);
$coverInfo = pathinfo($targetCoverPath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["ebook"]["name"])){
    // Allow certain file formats
    $pdfOnly = array('pdf');
    $imageOnly = array('png','jpg','jpeg');
    if(in_array($ebookInfo, $pdfOnly) && in_array($coverInfo, $imageOnly)){
        // Upload file to server
        if(move_uploaded_file($_FILES["ebook"]["tmp_name"], $targetEbookPath) && move_uploaded_file($_FILES["cover"]["tmp_name"], $targetCoverPath)){
            // Insert image file name into database
            
           // $insert = $db->query("INSERT into e_books (eblink, ebcover, ebname, ebauthor, uploadedon) VALUES ('http://localhost/E-Library/e-books/".$ebook."','http://localhost/E-Library/Assets/img/".$cover."', ".$title.", ".$author." NOW())");
            $insert = $db->query("INSERT INTO `e_books` (`ebid`, `ebname`, `ebcover`, `eblink`, `ebauthor`, `uploadedon`, `status`) VALUES (NULL, '.$title.', 'http://localhost/E-Library/Assets/img/".$cover."', 'http://localhost/E-Library/e-books/".$ebook."', '$author', current_timestamp(), '1');");
            if($insert){
                $statusMsg = "The file ".$ebook. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
function isAdmin() {
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}


if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header("location: form.php?statusMsg= $statusMsg");
}else{
header("Location: admin-dashboard.php? statusMsg= $statusMsg");
}
?>