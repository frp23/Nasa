<?php
session_start();
$imageUrl = isset($_GET['image']) ? $_GET['image'] : '';

if (!empty($imageUrl)) {
    $_SESSION['current_image'] = $imageUrl; // Memorizza l'URL dell'immagine corrente nella sessione
    ?>

    <div style="background-color: #000; display: flex; align-items: center; justify-content: center; height: 100vh;">
        <a href="sol.php" style="position: absolute; top: 20px; left: 20px; color: #fff; text-decoration: none; font-size: 18px;">Back</a>
        <img src="<?php echo $imageUrl; ?>" alt="Large Image" style="max-width: 100%; max-height: 100%;">
    </div>

    <?php
    exit();
} else {
    echo 'Image URL is missing.';
}
?>
<style>


a {
		color: #ffffff; 
		border: 1px solid #ffffff; 
		padding: 5px 10px; 
		text-decoration: none; 
}

</style>

