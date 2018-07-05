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

                </style>
            </link>
        </meta>
    </meta>
</head>

<body>

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
                    VIEW FILE
                </p>
            </div>
        </div>
    </section>

<?php
    $objConnect = mysql_connect("webservhost","muhammad_admin","attasit"); 
    $objDB = mysql_select_db("muhammad_admin");
    $strSQL = "SELECT * FROM pdf";
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
 
<br><br>
<center><table class="table is-hoverable is-bordered is-striped is-narrow"  border="1">

<tr>
<th width="700"> <div align="center"> FileName </div></th>
<th width="200"> <div align="center"> Delete </div></th>
</tr>

<?php
 while($objResult = mysql_fetch_array($objQuery))
 {
?>

<tr>
<td><center><a href="pdf/<?php echo $objResult["file_name"];?>" target="_blank"><?php echo $objResult["file_name"];?></a></center></td>
<td><center><a class="button is-danger is-rounded is-small">&emsp;&emsp;DELETE&emsp;&emsp;</a></center></td>
</tr>


<?php
 } 
?>

</div>
<?php
mysql_close($objConnect);
?>
</table>
</center>
<br><br>
</body>