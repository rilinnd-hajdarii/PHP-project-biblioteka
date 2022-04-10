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

        form {
            margin-top: 5vh;
        }

        input {
            width: 40%;
            height: 40px;
            text-align: center;
            border: 1px solid teal;
            border-radius: 5px;
        }

        #buttoni {
            background-color: teal;
            color: #EEE;
            font-size: 18px;
        }

        #buttoni:hover {
            background-color: #333;
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

<center>

    <form action="ndrysho2.php" method="post">


        <div class="form-group" style="display: none;">
            <input type="text" placeholder="id" name="id" id="id" class="form-control" required autocomplete="off" value="<?php
                                                                                                                            echo $_REQUEST['id']
                                                                                                                            ?>">
        </div>

        <br>


        <div class="form-group">
            <input type="text" placeholder="Emri i Librit" name="emri_librit_tjeter" id="emri_librit_tjeter" class="form-control" required autocomplete="off" value="<?php
                                                                                                                                                                        echo $_REQUEST['emri_librit']
                                                                                                                                                                        ?>">
        </div>

        <br>

        <div class="form-group">
            <input type="text" placeholder="Autori i Librit" name="autori_i_librit_tjeter" id="autori_i_librit_tjeter" class="form-control" required autocomplete="off" value="<?php
                                                                                                                                                                                echo $_REQUEST['autori_i_librit']
                                                                                                                                                                                ?>">
        </div>

        <br>

        <div class="form-group">
            <input type="number" placeholder="Viti i Botimit" name="viti_i_botimit_tjeter" id="viti_i_botimit_tjeter" class="form-control" required autocomplete="off" value="<?php
                                                                                                                                                                                echo $_REQUEST['viti_i_botimit']
                                                                                                                                                                                ?>">
        </div>

        <br>

        <div class="form-group">
            <input type="text" placeholder="Shtepia Botuse" name="shtepia_botuse_tjeter" id="shtepia_botuse_tjeter" class="form-control" required autocomplete="off" value="<?php
                                                                                                                                                                            echo $_REQUEST['shtepia_botuse']
                                                                                                                                                                            ?>">
        </div>

        <br>

        <div class="form-group">
            <input type="number" placeholder="Nr i faqeve" name="nr_i_faqeve_tjeter" id="nr_i_faqeve_tjeter" class="form-control" required autocomplete="off" value="<?php
                                                                                                                                                                        echo $_REQUEST['nr_i_faqeve']
                                                                                                                                                                        ?>">
        </div>

        <br>

        <div class="form-group">
            <input type="number" placeholder="Sasia e Librit ne Stok" name="sasia_e_librit_tjeter" id="sasia_e_librit_tjeter" class="form-control" required autocomplete="off" value="<?php
                                                                                                                                                                                        echo $_REQUEST['sasia_e_librit']
                                                                                                                                                                                        ?>">
        </div>

        <br>

        <div class="form-group">
            <label for="">&nbsp;</label>
            <input type="submit" value="Ndrysho Librin" id="buttoni">
        </div>
    </form>




</center>




















































</body>

</html>