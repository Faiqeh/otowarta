<?php

// SESSION
session_start();

// KONEKSI DATABASE
$c = mysqli_connect('localhost','root','','otowarta');



// =============== AUTENTIKASI ===============
// LOGIN
if(isset ($_POST['login'])){
    $user_email = $_POST ['user_email'];
    $user_password = $_POST ['user_password'];

    $select_users = mysqli_query($c, "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'");
    $count = mysqli_num_rows($select_users);

    if($count > 0){
        $r = mysqli_fetch_assoc($select_users);
        $_SESSION['log'] = $user_email;
        echo '
            <script>
                alert("Berhasil login!");
                window.location.href="dashboard.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Akun tidak ditemukan!");
                window.location.href="login.php";
            </script>
        ';
    };
}

// LOGOUT
if(isset ($_POST['logout'])){
    session_destroy();
    echo "<script>alert('Berhasil keluar!');document.location='login.php'</script>";
}



// =============== CATEGORY ===============
// CREATE CATEGORY
if(isset ($_POST['insertcategory'])){
    $category_name = $_POST ['category_name'];
    $insert = mysqli_query($c, "INSERT INTO category (category_name) VALUES ('$category_name')");

    if($insert) {
        echo '
            <script>
                alert("Berhasil menambah kategori!");
                window.location.href="category.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Gagal menambah kategori!");
                window.location.href="category.php";
            </script>
        ';
    }
}

// UPDATE CATEGORY
if(isset ($_POST['updatecategory'])){
    $category_id = $_POST ['category_id'];
    $category_name = $_POST ['category_name'];

    $edit = mysqli_query($c, "UPDATE category SET category_name='$category_name' WHERE category_id='$category_id'");

    if($edit) {
        echo '
            <script>
                alert("Berhasil mengubah kategori!");
                window.location.href="category.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Gagal mengubah kategori!");
                window.location.href="category.php";
            </script>
        ';
    }
}

// DELETE CATEGORY
if(isset($_POST['deletecategory'])) {
    $category_id = $_POST ['category_id'];
    $delete = mysqli_query($c, "DELETE FROM category WHERE category_id='$category_id'");

    if($delete) {
        echo '
            <script>
                alert("Berhasil menghapus kategori!");
                window.location.href="category.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Gagal menghapus kategori!");
                window.location.href="category.php";
            </script>
        ';
    }
}


// =============== NEWS ===============
// Create News
if(isset ($_POST['insertnews'])){
    // var_dump($_POST);
    // var_dump($_FILES);
    // die();

    $news_tittle = $_POST ['news_tittle'];
    $news_desc = $_POST ['news_desc'];
    $news_category = $_POST ['news_category'];
    $news_author = $_POST ['news_author'];

    $img_name = $_FILES['news_img']['name'];
    $img_dot = explode('.',$img_name);
    $img_ext = strtolower(end($img_dot));
    $img_size = $_FILES['news_img']['size'];
    $file_tmp = $_FILES['news_img']['tmp_name'];
    $news_img = md5(uniqid($img_name, true) . time()) . '.' . $img_ext;

    move_uploaded_file($file_tmp, '../assets/images/news/' . $news_img);

    $insert = mysqli_query($c, "INSERT INTO news (news_tittle, news_desc, news_img, news_category, news_author) VALUES ('$news_tittle', '$news_desc', '$news_img', '$news_category', '$news_author')");

    if($insert) {
        echo '
            <script>
                alert("Berhasil menambah berita!");
                window.location.href="news.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Gagal menambah berita!");
                window.location.href="news.php";
            </script>
        ';
    }
}

// Edit News
if(isset ($_POST['updatenews'])){
    // var_dump($_POST);
    // var_dump($_FILES);
    // die();
    
    $news_id = $_POST ['news_id'];
    $news_tittle = $_POST ['news_tittle'];
    $news_desc = $_POST ['news_desc'];
    $news_category = $_POST ['news_category'];

    $img_name = $_FILES["news_img"]["name"];
    $img_dot = explode('.',$img_name);
    $img_ext = strtolower(end($img_dot));
    $img_size = $_FILES["news_img"]["size"];
    $file_tmp = $_FILES["news_img"]["tmp_name"];
    $news_img = md5(uniqid($img_name, true) . time()) . '.' . $img_ext;

    if($img_size == 0){
        $edit = mysqli_query($c, "UPDATE news SET news_tittle='$news_tittle', news_desc='$news_desc', news_category='$news_category' WHERE news_id='$news_id'");

        if($edit) {
            echo '
                <script>
                    alert("Berhasil mengubah berita!");
                    window.location.href="news.php";
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Gagal mengubah berita!");
                    window.location.href="news.php";
                </script>
            ';
        }

    } else {

        $sqlshow = mysqli_query($c, "SELECT * FROM news WHERE news_id = '$news_id'");
        $result = mysqli_fetch_assoc($sqlshow);
        unlink("../assets/images/news/".$result['news_img']);

        move_uploaded_file($file_tmp, '../assets/images/news/' . $news_img);

        $edit = mysqli_query($c, "UPDATE news SET news_tittle='$news_tittle', news_desc='$news_desc', news_img='$news_img', news_category='$news_category' WHERE news_id='$news_id'");

        if($edit) {
            echo '
                <script>
                    alert("Berhasil mengubah berita!");
                    window.location.href="news.php";
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Gagal mengubah berita!");
                    window.location.href="news.php";
                </script>
            ';
        }
    }
}

// Delete News
if(isset($_POST['deletenews'])) {
    $news_id = $_POST ['news_id'];

    $sqlshow = mysqli_query($c, "SELECT * FROM news WHERE news_id = '$news_id'");
    $result = mysqli_fetch_assoc($sqlshow);
    unlink("../assets/images/news/".$result['news_img']);

    $delete = mysqli_query($c, "DELETE FROM news WHERE news_id='$news_id'");

    if($delete) {
        echo '
            <script>
                alert("Berhasil menghapus berita!");
                window.location.href="news.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Gagal menghapus berita!");
                window.location.href="news.php";
            </script>
        ';
    }
}


?>