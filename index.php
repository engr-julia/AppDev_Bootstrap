<?php
    $studentName = "Julia T. Rodrigo";  
    $section = "3BSCS-1";
    $courseTitle = "CCC321 - Application Development and Emerging Technologies (Lab)";
    $imageFile = "23-11591-358.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CS Lab Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 40px;
        }

        img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #333; /* IMAGE BORDER ADDED */
            margin-bottom: 15px;
        }

        hr {
            width: 90%;
            margin: 20px auto;
        }

        a {
            display: block;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin: 8px 0;
        }

        a:hover {
            color: #0056b3;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h2><?php echo $courseTitle; ?></h2>
    <p><strong>Section:</strong> <?php echo $section; ?></p>

    <hr>

    <?php
        if(file_exists($imageFile)){
            echo "<img src='$imageFile' alt='Student Image'>";
        } else {
            echo "<p class='error'>Image not found.</p>";
        }
    ?>

    <p><strong>Name:</strong> <?php echo $studentName; ?></p>

    <hr>

    <h3>BOOTSTRAP ACTIVITIES</h3>

    <?php
        for ($i = 1; $i <= 6; $i++) {
            $folder = "Activity$i";
            if (is_dir($folder)) {
                echo "<a href='$folder/'>Activity $i</a>";
            } else {
                echo "<a style='color:gray;'>Activity $i (Folder Missing)</a>";
            }
        }
    ?>

</body>
</html>
