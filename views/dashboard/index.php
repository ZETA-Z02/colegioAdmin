<?php require("views/header.php");?>
<h1>Hola estoy en el dashboard</h1>
<button class="button">button</button>

<table>
    <thead>
        <tr>
            <th>idlogin</th>
            <th>username</th>
            <th>passwd</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($this->data)){
            echo "<tr>
                    <td>".$row['idlogin']."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['passwd']."</td>
                  </tr>";
        }
        ?>
    </tbody>
</table>