<?php
include ("config.php");
//mysqli_set_charset($objCon,"utf8");
?>
<html>
<!DOCTYPE doctype html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="bulma/css/bulma.css" rel="stylesheet" type="text/css">
    <style>
        body{
            background-color: white;
        }

        p{
            font-size: 3rem;
        }

        .hero.is-large .hero-body {
            padding-bottom: 1rem;
            padding-top: 4rem;
        }

        div.smbut{
            padding-bottom:  10rem;
            padding-left: 22rem;
        }

        .input.is-hovered.op{
            width:80%
        }

        .textarea.is-hovered.txt{
            width:70%
        }

        div.drop1{
            padding-left: 10rem;
        }

        div.drop2{
            padding-left: 15rem;
        }

        #number{
            width: 8rem;
            height: 1.6rem;
            border-color: #cc99ff;
        }
    </style>
    </link>
    </meta>
    </meta>
</head>
<form name="form" method="post" action="get_input.php" enctype="multipart/form-data">
<nav aria-label="main navigation" class="navbar is-fixed-top" role="navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="home.html">
            <img src="logo2.png" style="height: 2.5rem; padding-left: 7.5rem;">
            </img>
        </a>
    </div>
</nav>

<section class="hero is-medium is-info is-bold">
    <div class="hero-body">
        <div class="container">
            <p>
                CREATE FORM
            </p>
        </div>
    </div>
</section>

<section class="hero is-light is-large">
    <div class="hero-body">
        <div class="container">

            <div class="field is-horizontal">
                <label class="label">
                    ชื่อไฟล์
                </label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input is-hovered" name="file_name" naplaceholder="หัวข้อ" type="text">
                        </input>
                    </p>
                </div>
            </div>
            <br><br>
        <div class="container">

            <div class="field is-horizontal">
                <label class="label">
                    หัวข้อ
                </label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input is-hovered" name="header" naplaceholder="หัวข้อ" type="text">
                        </input>
                    </p>
                </div>
            </div>
            <br><br>
            <div class="field is-horizontal">
                <label class="label">
                    คำอธิบาย
                </label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input is-hovered" name ="description" placeholder="คำอธิบาย" type="text">
                        </input>
                    </p>
                </div>
            </div>
            <br><br>
            <div class="field is-horizontal">
                <label class="label">
                    ตัวอย่าง
                </label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input is-hovered" name ="sample" placeholder="ตัวอย่าง" type="text">
                        </input>
                    </p>
                </div>
            </div>
            <br><br>

            <div class="field is-horizontal">
                <label class="label">
                    อุปกรณ์
                </label>
            </div><br>

            &emsp;&emsp;&emsp;&emsp;เครื่อง

            <div class="drop1"><div class="control">
                    <div class="select is-rounded is-info">
                        <select name="tool_1">
                            <?php
                            $sql = "SELECT detail FROM tool_1 ";
                            $result = mysqli_query($objCon, $sql);
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                            <option> <?php echo $row["detail"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div></div>

            <br><br>

            &emsp;&emsp;&emsp;&emsp;หัว

            <div class="drop1"><div class="control">
                    <div class="select is-rounded is-info">
                        <select name="tool_2">
                                <?php
                                $sql = "SELECT detail FROM tool_2 ";
                                $result = mysqli_query($objCon, $sql);
                                while($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <option> <?php echo $row["detail"] ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div></div>

            <br><br>

            &emsp;&emsp;&emsp;&emsp;แท่น

            <div class="drop1"><div class="control">
                    <div class="select is-rounded is-info">
                        <select name="tool_3">
                            <?php
                            $sql = "SELECT detail FROM tool_3 ";
                            $result = mysqli_query($objCon, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                                <option> <?php echo $row["detail"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div></div>

            <br><br>

            <div class="field is-horizontal">
                <label class="label">
                    การเตรียมตัวอย่าง
                </label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <textarea class="textarea is-hovered txt" name="prepare" type="text" placeholder="การเตรียมตัวอย่าง" wrap=hard></textarea>
                        </input>
                    </p>
                </div>
            </div>

            <br>

            &nbsp;&emsp;&emsp;&emsp;ภาพประกอบ

            &emsp;<input name="pic_1" type="file">

            <br><br>

            &nbsp;&emsp;&emsp;&emsp;คำอธิบายภาพประกอบ

            &emsp;&nbsp;<input name="pic_dic_1" class="input is-hovered is-small op" placeholder="คำอธิบายภาพประกอบ" type="text"></input>
            </div>
            <br><br><br>

            <div class="field is-horizontal">
                <label class="label">
                    วิธีการ
                </label>
            </div><br>

            &emsp;&emsp;&emsp;&emsp;ใช้การทดสอบแบบ <br><br>

        <div class="drop2"><div class="control">
                <div class="select is-rounded is-info">
                    <select name="how">
                        <?php
                        $sql = "SELECT detail FROM how ";
                        $result = mysqli_query($objCon, $sql);
                        while($row = mysqli_fetch_array($result)) {
                            ?>
                            <option> <?php echo $row["detail"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div></div>

            <br><br>

            &emsp;&emsp;&emsp;&emsp;ความเร็วก่อนทดสอบ<br><br>

        <div class="drop2">
                    <input id="number" name="speed_1" type="number" min="0">
        </div><br>

            <div class="drop2"><div class="control">
                    <div class="select is-rounded is-warning">
                        <select name="unit_1">
                            <?php
                            $sql = "SELECT detail FROM unit ";
                            $result = mysqli_query($objCon, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                                <option> <?php echo $row["detail"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div></div>


            <br><br>

            &emsp;&emsp;&emsp;&emsp;ความเร็วในการทดสอบ<br><br>

        <div class="drop2">
                    <input id="number" name="speed_1" type="number" min="0">
                </div><br>

            <div class="drop2"><div class="control">
                    <div class="select is-rounded is-warning">
                        <select name="unit_2">
                            <?php
                            $sql = "SELECT detail FROM unit ";
                            $result = mysqli_query($objCon, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                                <option> <?php echo $row["detail"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div></div>

            <br><br>

            &emsp;&emsp;&emsp;&emsp;ความเร็วหลังทดสอบ<br><br>

        <div class="drop2">
                    <input id="number" name="speed_1" type="number" min="0">
                </div><br>

            <div class="drop2"><div class="control">
                    <div class="select is-rounded is-warning">
                        <select name="unit_3">
                            <?php
                            $sql = "SELECT detail FROM unit ";
                            $result = mysqli_query($objCon, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                                <option> <?php echo $row["detail"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div></div>

            <br><br>

            &emsp;&emsp;&emsp;&emsp;วิธีการวัด<br><br>
            <textarea class="textarea is-hovered txt" name="how_wat" type="text" placeholder="วิธีการวัด" wrap=hard></textarea>

            <br>

            &nbsp;&emsp;&emsp;&emsp;ภาพประกอบ&emsp;

            <input name="pic_2" type="file">

            <br><br>

            &nbsp;&emsp;&emsp;&emsp;คำอธิบายภาพประกอบ &emsp;&nbsp;
            <input class="input is-hovered is-small op" name="pic_dic_2" placeholder="คำอธิบายภาพประกอบ" type="text"></input>

            <br><br><br>

            <div class="field is-horizontal">
                <label class="label">
                    การวิเคราะห์ผล
                </label>
            </div><br>

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <textarea class="textarea is-hovered txt" name="anay" type="text" placeholder="การวิเคราะห์ผล" wrap=hard></textarea>
                        </input>
                    </p>
                </div>
            </div>


            <br><br>

            &nbsp;&emsp;&emsp;&emsp;ภาพประกอบ 1&emsp;

            <input name="pic_3" type="file">

            <br><br>

            &nbsp;&emsp;&emsp;คำอธิบายภาพประกอบ 1&emsp;&nbsp;&nbsp;
            <input class="input is-hovered is-small op" name="pic_dic_3" placeholder="คำอธิบายภาพประกอบ" type="text"></input><br><br><br>

            &nbsp;&emsp;&emsp;&emsp;ภาพประกอบ 2&emsp;

            <input name="pic_4" type="file">

            <br><br>

            &nbsp;&emsp;&emsp;คำอธิบายภาพประกอบ 2&emsp;&nbsp;&nbsp;
            <input class="input is-hovered is-small op" name="pic_dic_4"placeholder="คำอธิบายภาพประกอบ" type="text"></input>

            <br><br><br>

            <div class="field is-horizontal">
                <label class="label">
                    เอกสารอ้างอิง<br><br>
                    <input name="ref" class="input is-hovered op" style="width:72rem;" placeholder="เอกสารอ้างอิง" type="text"></input>
                </label>
            </div><br>

            <br><br><br><br>

            <div class="smbut">
                    <input class="button is-info is-medium type="submit" value="submit" name="submit">
                &emsp;

                <a class="button is-danger is-medium is-outlined" href="home.html">
                    BACK
                </a>
            </div>

    </div>
</section>
</form>
</body>
</html>
