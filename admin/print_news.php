<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZenTickets</title>
        <link rel="icon" type="image/x-icon" href="../../assets/img/utility/zentickets4.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
        
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <?php
            ob_start();

            require '../functions.php';

            $select_news = mysqli_query($c, "SELECT * FROM news JOIN category ON category.category_id=news_category JOIN users ON users.user_id=news_author ORDER BY news_date ASC");
            $i = 1;
        ?>

        <h2 class="text-center fw-bold mb-3">Data Berita</h2>

        <table>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Publikasi</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Penulis</th>
            </tr>

            <?php foreach($select_news as $data): ?>
            <tr>
                <td><?=$i++;?></td>
                <td><?=date("d M Y (H:i)", strtotime($data['news_date']));?></td>
                <td><img src="../assets/images/news/<?=$data['news_img'];?>" style="width:120px;"></td>
                <td><?=$data['news_tittle'];?></td>
                <td><?=$data['category_name'];?></td>
                <td><?=$data['user_name'];?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>

<?php
    require '../assets/mpdf/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8',
        'format' => 'A4',
        'margin_top' => 25,
        'margin_bottom' => 25,
        'margin_left' => 25,
        'margin_right' => 25
    ]);

    $html = ob_get_contents();
    ob_end_clean();
    $mpdf->WriteHTML(utf8_encode($html));

    $content = $mpdf->Output("databerita.pdf", "D");
?>