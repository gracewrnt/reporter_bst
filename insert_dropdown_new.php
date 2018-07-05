<?php
include ("config.php");

?>
<html lang = "th">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="bulma/css/bulma.css" rel="stylesheet" type="text/css">
    <script defer="" src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <style>
    body{
      background-color: white;
    }

    p{
      font-size: 3rem;
    }

    .hero.is-large .hero-body{
    padding-bottom: 5rem;
    padding-top: 5rem;
    background-color:white; 
    }

    div.field{
        width: 80%;
    }

        div.canvas1{
        border-radius: 2rem;
        border:0.2rem solid #0dc9f7;
        background-color: white;
        margin: 2rem 1rem;
        text-align: left;
        padding: 3.5rem 3.5rem 2rem;
    }

    label.label{
        font-size: 1.5rem;
    }

    div.method{
        padding-left: 10rem;
    }

    </style>
    </link>
    </meta>
    </meta>
</head>

<body>
<nav aria-label="main navigation" class="navbar is-fixed-top" role="navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="home.html">
                <img src="logo2.png" style="height: 2rem; padding-left: 7.5rem;">
                </img>
            </a>
        </div>
</nav>

<section class="hero is-medium is-info is-bold">
        <div class="hero-body">
            <div class="container">
                <p>
                    EDIT SELECTOR
                </p>
            </div>
        </div>
</section>


<div class="hero-body">
<div class="container">
<br><br><br>
<div class="field is-horizontal">
                    <label class="label">EDIT TOOL</label>
</div>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="showMenu"><center><a class="button is-info is-focused is-rounded is-medium">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;เครื่อง&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></center></div>
<div class="menu" style="display: none;"><br>
<div class="canvas1">
<form name="form" method="post" action="insert_back.php" enctype="multipart/form-data">
<table class="table is-hoverable is-bordered is-striped is-narrow" border="1">
        <thead>
        <tr>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Detail</center></th>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Delete</center></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM tool_1 ORDER BY detail";
        $result = mysqli_query($objCon, $sql);
        $x = 0;
        while($row = mysqli_fetch_array($result)) {
            $GLOBALS['x']++;
        ?>
        <td>
            <thscope="row"><center><?php echo $GLOBALS['x']?></center></th>
            <td><center><?php echo $row["detail"] ?></center></td>
            <td><center><?php echo $row["id"] ?></center></td>
            <td><center><button type="submit" value="<?php echo $row["id"] ?>" name = "id_tool_1" class="btn btn-danger">Delete</button></center></td>
        </tr>
<?php } ?>
        </tbody>
    </table>
    Name :<br><br>
    <div class="field">
        <div class="control">
        <input class="input is-info" type="text" name="Name_tool_1" placeholder="ชื่ออุปกรณ์">
        </div>
    </div><br><center>
    <input class="button is-info is-focused is-small is-rounded" name="submit" type="submit"></input><center><br><br>


</div>
</form>
</div><!--canvas-->
</div>



<br><br><br>

<div class="showMenu"><center><a class="button is-info is-focused is-rounded is-medium">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;หัว&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></center></div>
<div class="menu" style="display: none;"><br>
<div class="canvas1">
<form name="form" method="post" action="insert_back.php" enctype="multipart/form-data">
    <table class="table is-hoverable is-bordered is-striped is-narrow" border="1">
        <thead>
        <tr>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Detail</center></th>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Delete</center></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM tool_2 ORDER BY detail";
        $result = mysqli_query($objCon, $sql);
        $x = 0;
        while($row = mysqli_fetch_array($result)) {
            $GLOBALS['x']++;
            ?>
            <td>
                <thscope="row"><center><?php echo $GLOBALS['x']?></center></th>
            <td><center><?php echo $row["detail"] ?></center></td>
            <td><center><?php echo $row["id"] ?></center></td>
            <td><center><button type="submit" value="<?php echo $row["id"] ?>" name = "id_tool_2" class="btn btn-danger">Delete</button></center></td>
        </tr>
<?php } ?>
        </tbody>
    </table>
    Name :<br><br>
    <div class="field">
        <div class="control">
        <input class="input is-info" type="text" placeholder="ชื่ออุปกรณ์" name="Name_tool_2">
        </div>
    </div><br>
    <center><input class="button is-info is-focused is-small is-rounded" type="submit"></input></center><br><br>

</div>
</form>
</div><!--canvas-->
</div>



<br><br><br>

<div class="showMenu"><center><a class="button is-info is-focused is-rounded is-medium">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;แท่น&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></center></div>
<div class="menu" style="display: none;"><br>
<div class="canvas1">
<form name="form" method="post" action="insert_back.php" enctype="multipart/form-data">
    <table class="table is-hoverable is-bordered is-striped is-narrow" border="1">
        <thead>
        <tr>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Detail</center></th>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Delete</center></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM tool_3 ORDER BY detail ";
        $result = mysqli_query($objCon, $sql);
        $x = 0;
        while($row = mysqli_fetch_array($result)) {
            $GLOBALS['x']++;
            ?>
            <td>
                <thscope="row"><center><?php echo $GLOBALS['x']?></center></th>
            <td><center><?php echo $row["detail"] ?></center></td>
            <td><center><?php echo $row["id"] ?></center></td>
            <td><center><button type="submit" value="<?php echo $row["id"] ?>" name = "id_tool_3" class="btn btn-danger">Delete</button></center></td>
        </tr>
<?php } ?>
        </tbody>
    </table>
    Name :<br><br>
    <div class="field">
        <div class="control">
        <input class="input is-info" type="text" placeholder="ชื่ออุปกรณ์" name="Name_tool_3" >
        </div>
    </div><br>
    <center><input class="button is-info is-focused is-small is-rounded" type="submit"></input></center><br><br>
</div>
</form>
</div><!--canvas-->
</div>

<br><br><br>

<div class="field is-horizontal">
        <div class="method"><label class="label">EDIT METHOD</label></div>
</div><br><br>

<div class="showMenu"><center><a class="button is-info is-focused is-rounded is-medium">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;วิธีการ&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></center></div>
<div class="menu" style="display: none;"><br>
<div class="canvas1">
<form name="form" method="post" action="insert_back.php" enctype="multipart/form-data">
<table class="table is-hoverable is-bordered is-striped is-narrow" border="1">
        <thead>
        <tr>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Detail</center></th>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Delete</center></th>
        </tr>
        </thead>
        <tbody>        <?php
        $sql = "SELECT * FROM how ORDER BY detail";
        $result = mysqli_query($objCon, $sql);
        $x = 0;
        while($row = mysqli_fetch_array($result)) {
            $GLOBALS['x']++;
            ?>
            <td>
                <thscope="row"><center><?php echo $GLOBALS['x']?></center></th>
            <td><center><?php echo $row["detail"] ?></center></td>
            <td><center><?php echo $row["id"] ?></center></td>
            <td><center><button type="submit" value="<?php echo $row["id"] ?>" name = "id_how" class="btn btn-danger">Delete</button></center></td>
        </tr>
<?php } ?>
        </tbody>
    </table>
    Name :<br><br>
    <div class="field">
        <div class="control">
        <input class="input is-info" type="text" name="Name_how" placeholder="ชื่อวิธีการ">
        </div>
    </div><br>
    <center><input class="button is-info is-focused is-small is-rounded" type="submit"></input></center><br><br>

</div>
</form>
</div><!--canvas-->
</div>


<br><br><br>

<div class="showMenu"><center><a class="button is-info is-focused is-rounded is-medium">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;หน่วย&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></center></div>
<div class="menu" style="display: none;"><br>
<div class="canvas1">
<form name="form" method="post" action="insert_back.php" enctype="multipart/form-data">
<table class="table is-hoverable is-bordered is-striped is-narrow" border="1">
        <thead>
        <tr>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Detail</center></th>
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Delete</center></th>
        </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM unit ORDER BY detail";
        $result = mysqli_query($objCon, $sql);
        $x = 0;
        while($row = mysqli_fetch_array($result)) {
            $GLOBALS['x']++;
            ?>
            <td>
                <thscope="row"><center><?php echo $GLOBALS['x']?></center></th>
            <td><center><?php echo $row["detail"] ?></center></td>
            <td><center><?php echo $row["id"] ?></center></td>
            <td><center><button type="submit" value="<?php echo $row["id"] ?>" name = "id_unit" class="btn btn-danger">Delete</button></center></td>
        </tr>
<?php } ?>
        </tbody>
    </table>
    Name :<br><br>
    <div class="field">
        <div class="control">
        <input class="input is-info" type="text" name="Name_unit" placeholder="ชื่อวิธีการ">
        </div>
    </div><br>
    <center><input class="button is-info is-focused is-small is-rounded" type="submit"></input><center><br><br>
</div>
</form>
</div><!--canvas-->
</div>


</div>
</div>
</section>
<script>
    $(function () {
        $(".showMenu").click(function () {
            $(this).next(".menu").fadeToggle(400);
        });
    });

</script>
</body>
</html>