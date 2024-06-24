<?php
include_once "../inc/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
   
    // Récupérer et sécuriser les données du formulaire
    $title = $conn->real_escape_string($_POST['title']);
    $place = $conn->real_escape_string($_POST['place']);
    $start_date = $conn->real_escape_string($_POST['start_date']);
    $end_date = $conn->real_escape_string($_POST['end_date']);
    $details = $conn->real_escape_string($_POST['details']);

    // Gérer l'upload des images
    $target_dir = "../../img/bg-img/";
    $image_1_name = pathinfo($_FILES["image_1"]["name"], PATHINFO_FILENAME) . '.webp';
    $image_2_name = pathinfo($_FILES["image_2"]["name"], PATHINFO_FILENAME) . '.webp';
    $image_3_name = pathinfo($_FILES["image_3"]["name"], PATHINFO_FILENAME) . '.webp';
    $image_1 = $target_dir . $image_1_name;
    $image_2 = $target_dir . $image_2_name;
    $image_3 = $target_dir . $image_3_name;

    // Fonction pour convertir une image en WebP
    function convertToWebP($source, $destination, $quality = 80) {
        $info = getimagesize($source);

        switch ($info['mime']) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($source);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($source);
                break;
            case 'image/png':
                $image = imagecreatefrompng($source);
                break;
            default:
                return false;
        }

        imagewebp($image, $destination, $quality);
        imagedestroy($image);

        return file_exists($destination);
    }

    // Convertir et déplacer les images
    if (convertToWebP($_FILES["image_1"]["tmp_name"], $image_1) &&
        convertToWebP($_FILES["image_2"]["tmp_name"], $image_2) &&
        convertToWebP($_FILES["image_3"]["tmp_name"], $image_3)) {
        
        // Préparer et exécuter la requête SQL
        $sql = "INSERT INTO discoveries (title, place, image_1, image_2, image_3, start_date, end_date, details)
                VALUES ('$title', '$place', '$image_1', '$image_2', '$image_3', '$start_date', '$end_date', '$details')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>window.location.href='../add-discoveries?status=1'</script>";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    } else {
        // echo "Désolé, il y a eu une erreur lors de l'upload de vos fichiers.";
        echo "<script>alert('Désolé, il y a eu une erreur lors de l'upload de vos fichiers.')</script>";
        echo "<script>window.location.href='../add-discoveries?status=2'</script>";
    }

    $conn->close();
}
?>
