<?php
$conn = new mysqli("localhost:3307", "root", "", "serenebeauty") or die("Connect failed: %s\n" . $conn->error);
$sql = "SELECT name, description, cost, img FROM service WHERE s_id = 58";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['img'];
 // Decode the Base64-encoded image data
$decodedImage = base64_decode($imageData);

// // Determine the image type based on the decoded image data
// $imageType = exif_imagetype($decodedImage);

// // Create the image source URL based on the image type
// if ($imageType === IMAGETYPE_PNG) {
//     $imgSrc = 'data:image/png;base64,' . base64_encode($decodedImage);
// } elseif ($imageType === IMAGETYPE_JPEG) {
//     $imgSrc = 'data:image/jpeg;base64,' . base64_encode($decodedImage);
// } else {
//     // Handle unsupported image types here
//     $imgSrc = ''; // Provide a default image source or error message
// }
$imgSrc = 'data:image/jpeg;base64,' . base64_encode($decodedImage);
// Display the image
echo '
    <img src="' . $imgSrc . '" alt="Image">';

}
?>