<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imgae Upload</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <form action="./submit.php" method="POST" enctype="multipart/form-data">
            <div class="input_group">
                <label for="fullname">Full Name <span>*</span></label>
                <input type="text" name="fullname" id="fullname" placeholder="Enter your name" required>
            </div>

            <div class="input_group">
                <label for="email">Email Address <span>*</span></label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <div class="input_group upload">
                <label>Add Image <span>*</span></label>
                <div class="file_container">
                    <div class="upload_content">
                        <img src="./upload.png" alt="Upload" width="50" style="margin-bottom: 1rem;">
                    </div>
                    <input type="file" name="user_img" id="image" required>
                    <label for="image" class="upload_btn">Upload Image</label>
                </div>
            </div>

            <div class="button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>