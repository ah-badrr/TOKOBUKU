<?php
$conn = mysqli_connect('localhost','root','bismillah','unibookstore');
$buku = mysqli_query($conn, "SELECT penerbit.nama AS np, buku.* FROM buku INNER JOIN penerbit ON buku.penerbit = penerbit.id");
$penerbit = mysqli_query($conn,"SELECT * FROM penerbit");