<?php
include 'preview-maker.php';
if (isset($_FILES['picture'])) {
    if (preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['picture']['name'])) {
        if ($_FILES['picture']['size'] > 1000000) {
            echo 'Слишком большая картинка!';
        } else {
            $filename = $_FILES['picture']['name'];
            $source = $_FILES['picture']['tmp_name'];
            $target = 'gallery_img/big/' . $filename;
            move_uploaded_file($source, $target);
        }
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script
            src="https://code.jquery.com/jquery-1.4.3.min.js"
            integrity="sha256-+ACzmeXHpSVPxmu0BxF/44294FKHgOaMn3yH0pn4SGo="
            crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" media="screen"/>
    <script type="text/javascript">
        $(document).ready(function () {
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 500,
                speedOut: 500,
                hideOnOverlayClick: false,
                titlePosition: 'over'
            });
        }); </script>

</head>

<body>
<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php
        $dir = 'gallery_img/';
        $files = array_slice(scandir($dir . "/big"), 2);
        foreach ($files as $key => $value) {
            $path = $dir . "big/" . $value;
            $miniPath = $dir . 'small/' . $value;
            if (!file_exists($miniPath)) {
                create_thumbnail($path, $miniPath, 150, 100);
            }
            echo "<a rel='gallery' class='photo' href='$path'><img src='$miniPath'></a>";
        }
        ?>
    </div>
    <div class="uploader">
        <div><h3>Загрузить изображение</h3></div>
        <form enctype="multipart/form-data" action="" method="post">
            <input type="file" name="picture">
            <input type="submit" value="Загрузить">
        </form>
    </div>
</div>

</body>
