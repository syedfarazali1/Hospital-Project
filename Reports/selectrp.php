

<?php
include "../connection.php";

$sql = "select * from `reports`";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);?>
<body>
<table class="table table-dark table-striped">
    <thead>
        <tr>

            <th >#</th>
            <th >REPORT_TITTLE</th>
            <th >Patient</th>
            <th >DATE_TIME</th>
            <th >DOCUMENTS</th>
            <th colspan="2">Action</th>
            

        </tr>
    </thead>
    <tbody>

        <?php
    while ($res = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <th >
                <?php echo $res['ID'];?>
            </th>
            <td> Dr
                <?php echo $res['REPORT_TITTLE'];?>
            </td>
              <td>
                <?php echo $res['Pat_ID'];?>
            </td>         <td>
                <?php echo $res['DATE_TIME'];?>
            </td>         <td>
             <a href="docfile/<?php echo $res['DOCUMENTS'];?>"><?php echo $res['DOCUMENTS'];?></a>   
            </td>        
          
            <td>
                <button class="btn-primary btn-sm" name= "delete"> <a class="text-white" href="deleterp.php?ID=<?php
            echo $res['ID'];?>"> Delete</a> </button>
           </td>
            <td>
                <button class="btn-primary"> <a class="text-white" href="docupd.php?ID=<?php
            echo $res['ID'];?>"> Update</a> </button>
            </td>
        </tr>

        <?php
    }


?>

    </tbody>
</table>


</body>