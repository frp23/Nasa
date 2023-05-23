<?php
session_start(); // Start the session

if (isset($_SESSION['photos'])) {
    $photos = $_SESSION['photos']; // Retrieve the photo data from the session
    ?>

    <div class="image-gallery">
        <?php foreach ($photos as $photo) { ?>
            <div class="image-container">
                <a href="large_image.php?image=<?php echo urlencode($photo['img_src']); ?>" target="_blank">
                    <img src="<?php echo $photo['img_src']; ?>" alt="NASA Image" class="mars-image">
                </a>
            </div>
        <?php } ?>
    </div>

    <?php
    //unset($_SESSION['photos']); // Clear the session variable
} else {
    echo 'No photos found.';
}
?>

<a href="index.php" class="back-link">Back</a>



<style>

body {
    background: linear-gradient(to bottom, #0000ff, #000000);
    color: #ffffff; /* White text */
    font-family: 'Arial', sans-serif;
    padding: 20px;
}

.image-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.image-container {
    margin: 10px;
}

.image-container img {
    width: 300px;
    height: auto;
    cursor: pointer;
}

.mars-image {
    width: 300px;
    height: auto;
    margin: 10px;
}
a {
		color: #ffffff; 
		border: 1px solid #ffffff; 
		padding: 5px 10px; 
		text-decoration: none; 
		}
.back-link {
    position: fixed;
    top: 20px;
    left: 20px;
    color: #ffffff; /* White link */
    text-decoration: none;
    transition: color 0.3s ease;
}

.back-link:hover {
    color: azure; /* Azure on hover */
}

</style>

