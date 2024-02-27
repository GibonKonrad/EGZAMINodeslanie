<?php
$conn=mysqli_connect('localhost','root','','ee09') or die("zle podlaczenie");
$nr=$_POST['nr'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$q="INSERT INTO ratownicy (ratownicy.nrKaretki, ratownicy.ratownik1, ratownicy.ratownik2,ratownicy.ratownik3) 
VALUES($nr,'$p1','$p2','$p3')";
mysqli_query($conn, $q);
echo"Do bazy zostało wysłane zapytanie: ".$q;
mysqli_close($conn);

?>