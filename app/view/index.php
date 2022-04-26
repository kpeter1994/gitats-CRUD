<?php
namespace app\view;
echo "<div class='bg-primary py-3 mb-3'>
<div class='container'>
<h1 class='text-center text-white display-1'>Készleten lévő gitárok</h1>
</div>
</div>
<div class='container'>
<table id='Table_ID' class='table table-bordered '>
<thead>
 <tr>
        <th>Id</th>
        <th>Gyártó</th>
        <th>Típus</th>
        <th>Kategoria id</th>
        <th>Húrok száma</th>
        <th>Ár</th>
        <th>Raktár mennyiság</th>
        <th>Állapot</th>
        <th>Művelet</th>
    </tr>
</thead>";
echo    "<tbody>";
foreach ($guitars as $guitar){
    echo "<tr>
        <td>$guitar->id</td>
        <td>$guitar->gyarto</td>
        <td>$guitar->tipus</td>
        <td>$guitar->kategoria_id</td>
        <td>$guitar->hurok_szama</td>
        <td>$guitar->ar</td>
        <td>$guitar->raktar_mennyiseg</td>
        <td>";
    $guitar->allapot ? print 'Akrív' : print 'Passzív';
        echo "</td>
      
        <td><a class='btn btn-warning mx-1' href='?action=update&id=$guitar->id'>Szerkeszt</a><a class='btn btn-danger mx-1' href='?action=delete&id=$guitar->id'>Törlés</a> </td>
        </tr>";
}
echo "</tbody></table>
    <a class='btn btn-success' href='?action=create'>Új típus felvítele</a>
    </div>";
?>

