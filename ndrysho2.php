<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Sansita+One);

        /* CUT FROM HERE */

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,700);

        * {
            box-sizing: border-box;
            outline: 0;
            margin: 0;
            padding: 0;
        }

        body {
            background: #EEE;
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
        }

        .header {
            background-color: #333;
            height: 20vh;
            margin: 0;
            padding: 0;
        }

        .header h3,
        p {
            text-align: center;
            font-size: 24px;
            padding: 10px;
            color: #EEE;

        }

        a,
        li {
            transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
        }

        a {
            color: white;
            text-decoration: none;
        }

        li {
            list-style-type: none;
        }

        nav {
            width: 200px;
            height: 85vh;
            float: left;
            font-size: 18px;
            position: relative;
            background: #333;
            margin: 0 auto;
            padding: 10px 0;
            color: white;
            line-height: 30px;
        }

        nav ul li {
            position: relative;
            padding: 0 20px;

        }

        nav ul li:hover {
            background: teal;
            border-left: 5px solid rgb(0, 84, 84);
        }

        nav ul li:hover:before {
            content: '';
            border-color: transparent #EEE transparent transparent;
            right: 0;
            border-width: 10px;
            position: absolute;
            border-style: solid;
            top: 5px;
        }

        table {
            width: 70%;
            border: teal solid 2px;
            color: #333;
            border-collapse: collapse;
            margin: auto;
            margin-top: 20px;

        }

        th,
        td {
            text-align: center;
            border: solid teal 2px;
            padding: 6px;

        }

        h3 {
            padding: 10px;
        }

        /* TO HERE */


        .active {
            background: teal;
            border-left: 5px solid rgb(0, 84, 84);
        }

        .active:before {
            content: '';
            border-color: transparent #EEE transparent transparent;
            right: 0;
            border-width: 10px;
            position: absolute;
            border-style: solid;
            top: 5px;
        }

        @media (max-width: 768px) {

            nav {
                width: 100%;
                height: 25vh;
            }

            table {
                margin-top: 30vh;
                width: 95%;
            }
        }
    </style>
    <title>Document</title>
</head>

<body>

</body>

</html>
<div class="header">
    <h3>Biblioteka</h3>
    <p>Ndrysho Librin</p>
</div>

<!-- CUT FROM HERE -->
<nav role='navigation'>
    <ul>
        <li><a href="regjistro.php">Regjistro</a></li>
        <li><a href="shiko.php">Shiko</a></li>
        <li class="active"><a href="ndrysho.php">Ndrysho</a></li>
        <li><a href="fshij.php">Fshij</a></li>
    </ul>
</nav>









<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliotekaa";


$id = $_REQUEST['id'];
$emri_librit = $_REQUEST['emri_librit_tjeter'];
$autori_i_librit = $_REQUEST['autori_i_librit_tjeter'];
$viti_i_botimit = $_REQUEST['viti_i_botimit_tjeter'];
$shtepia_botuse = $_REQUEST['shtepia_botuse_tjeter'];
$nr_i_faqeve = $_REQUEST['nr_i_faqeve_tjeter'];
$sasia_e_librit = $_REQUEST['sasia_e_librit_tjeter'];


$conn = mysqli_connect($servername, $username, $password, $dbname);



if (!$conn) {
    die("Lidhja ka deshtuar" . mysqli_connect_error());
}

$sql = "UPDATE librat SET 

emri_librit='$emri_librit',
autori_i_librit='$autori_i_librit',
viti_i_botimit='$viti_i_botimit',
shtepia_botuse='$shtepia_botuse',
nr_i_faqeve='$nr_i_faqeve',
sasia_e_librit='$sasia_e_librit'

WHERE id='$id'

";





if (mysqli_query($conn, $sql)) {
    echo "<h3>Libri i ri u ndryshua me suskes</h3>";
} else {
    echo "Gabim" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliotekaa";




$conn = mysqli_connect($servername, $username, $password, $dbname);



if (!$conn) {
    die("Lidhja ka deshtuar" . mysqli_connect_error());
}

$sql = "SELECT * FROM librat";

$result = mysqli_query($conn, $sql);


echo "<table>";
echo "<tr>
<th>Id</th>
<th>Emri i Librit</th>
<th>Autori i Librit</th>
<th>Viti i Botimit</th>
<th>Shtepia Botuse</th>
<th>Numri i Faqeve</th>
<th>Sasia e Librit ne Stok</th>










</tr>";


if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        $emri_librit = $row['emri_librit'];
        $autori_i_librit = $row['autori_i_librit'];
        $viti_i_botimit = $row['viti_i_botimit'];
        $shtepia_botuse = $row['shtepia_botuse'];
        $nr_i_faqeve = $row['nr_i_faqeve'];
        $sasia_e_librit = $row['sasia_e_librit'];




        echo "<tr>

<td>$id</td>
<td>$emri_librit</td>
<td>$autori_i_librit</td>
<td>$viti_i_botimit</td>
<td>$shtepia_botuse</td>
<td>$nr_i_faqeve</td>
<td>$sasia_e_librit</td>








</tr>";
    }
} else {
    echo "Nuk ka libra";
}

echo "</table>";


mysqli_close($conn);


?>