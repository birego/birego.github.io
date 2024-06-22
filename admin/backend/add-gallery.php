<?php
include_once "../inc/db.php";

if (isset($_POST['save'])) {
    // Récupération des données du formulaire
    $category = $_POST['category'];
    $link = $_POST['link'];

    // Dossier de destination pour les images
    $target_dir = "../../img/bg-img/";

    // Vérifie et crée le dossier de destination si nécessaire
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Traitement de chaque fichier
    foreach ($_FILES['images']['name'] as $key => $name) {
        $tmp_name = $_FILES['images']['tmp_name'][$key];
        $target_file = $target_dir . basename($name);
        $webp_file = $target_dir . pathinfo($name, PATHINFO_FILENAME) . ".webp";

        // Convertir l'image en WebP
        $image = imagecreatefromstring(file_get_contents($tmp_name));
        imagewebp($image, $webp_file);
        imagedestroy($image);

        // Enregistrement des informations de l'image dans la base de données
        $stmt = $conn->prepare("INSERT INTO gallery (category, image, link) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $category, $webp_file, $link);

        if ($stmt->execute()) {
            echo "<script>window.location.href='../add-gallery?status=1'</script>";
        } else {
            echo "Erreur : " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>
