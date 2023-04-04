<?php

    $a=5;
    $b=10;

    echo"Contoh operator aritmatika untuk a=5 dan b=10 <br> ";
    echo"Penjualan a+b =".($a+$b)."<br>";
    echo"Pengurangan b-a =".($b-$a)."<br>";
    echo"Perkalian a*b =".($a*$b)."<br>";
    echo"Pembagian a/b =".($a/$b)."<br>";
    echo"Modulus b%a =".($b%$a)."<br>";
    echo"Exponensial a**b =".($a**$b)."<br>";

    echo"<hr>Contoh operator asiggment untuk nilai awal x=8 <br>";
    $x=8;
    print("Nilai x= ".$x. "<br>");
    print("Nilai x+=3 =>" .($x+=3)."<br>");
    print("Nilai x-=3 =>" .($x-=3)."<br>");
    print("Nilai x*=3 =>" .($x*=3)."<br>");
    print("Nilai x/=3 =>" .($x/=3)."<br>");
    print("Nilai x%=3 =>" .($x%=3)."<br>");

    echo"<hr> Contoh Operator Comparison untuk a=5 dan b=10 <br>";
    echo"Equal a==b => ".($a==$b)."<br>";
    echo"not Equal a!=b => ".($a!=$b)."<br>";
    echo"Greater than a>b => ".($a>$b)."<br>";
    echo"Less than a<b => ".($a<$b)."<br>";
    echo"Greater than Equal a>=b => ".($a>=$b)."<br>";
    echo"Less than Equal a<=b => ".($a<=$b)."<br>";

?>