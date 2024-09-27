<!-- 
    <table border="2px solid">
        <tr>
            <th>SR</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <th>1</th>
            <th>shaikh</th>
            <th>fvfv@hbdsvjns</th>
        </tr>
        <tr>
            <th>2</th>
            <th>m fj</th>
            <th>djdsj@ff</th>
        </tr>
        <tr>
            <th>3</th>
            <th>svn sv</th>
            <th>ndssdvh@ccj</th>
        </tr>
    </table> -->


    <?php
    $user = [
        [1,"anil","anil@mail@vjf"],
        [2,"shaikh","shaikh@mail@vjf"],
        [3,"sohel","sohel@mail@vjf"],
        [4,"anush","snu@mail@vjf"],
    ];

      echo "<table border=1>";
    for($i =0; $i< count($user); $i++){
        echo "<tr>";
        for($j=0; $j< count($user[$i]); $j++){
            echo "<td>";
         echo $user[$i][$j];

         echo "</td>";
        
        }
        echo "</tr>";
    }

 echo "</table>";


    ?>
