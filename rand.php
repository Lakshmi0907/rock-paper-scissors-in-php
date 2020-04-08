<?php
$i=1;
$s12=0;
$s21=0;
$s13=$s31=$s14=$s41=$s23=$s32=$s24=$s42=$s34=$s43=0;
while($i<=50){
    echo "<p style='color:crimson;font-size:30px'>------------------------------------------------------------------Round  ";
    echo $i;
    echo "----------------------------------------------</p>";
    $n12=$n21=$n13=$n31=$n14=$n41=$n23=$n32=$n24=$n42=$n34=$n43=0;
    $n1=rand(1,3);
    $n2=rand(1,3);
    $n3=rand(1,3);
    $n4=rand(1,3);
    echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player one choice:";echo $n1;echo "</p>";
    echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player two choice:";echo $n2;echo "</p>";
    echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player three choice:";echo $n3;echo "</p>";
    echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player four choice:";echo $n4;echo "</p>";
    if($n1==1){
        if($n2==2)
            $n21+=1;
        if($n3==2)
            $n31+=1;
        if($n4==2)
            $n41+=1;
        if($n2==3)
            $n12+=1;
        if($n3==3)
            $n13+=1;
        if($n4==3)
            $n14+=1;
	}
    if($n1==2){
        if($n2==1)
            $n12+=1;
        if($n3==1)
            $n13+=1;
        if($n4==1)
            $n14+=1;
        if($n2==3)
            $n21+=1;
        if($n3==3)
            $n31+=1;
        if($n4==3)
            $n41+=1;
	}
    if($n1==3){
        if($n2==2)
            $n12+=1;
        if($n3==2)
            $n13+=1;
        if($n4==2)
            $n14+=1;
        if($n2==1)
            $n21+=1;
        if($n3==1)
            $n31+=1;
        if($n4==1)
            $n41+=1;
	}
    if($n2==1){
        if($n3==2)
            $n32+=1;
        if($n4==2)
            $n42+=1;
        if($n3==3)
            $n23+=1;
        if($n4==3)
            $n24+=1;
	}
    if($n2==2){
        if($n3==1)
            $n23+=1;
        if($n4==1)
            $n24+=1;
        if($n3==3)
            $n32+=1;
        if($n4==3)
            $n42+=1;
	}
    if($n2==3){ 
        if($n3==2)
            $n23+=1;
        if($n4==2)
            $n24+=1;
        if($n3==1)
            $n32+=1;
        if($n4==1)
            $n42+=1;
	}
    if($n3==1){
        if($n4==2)
            $n43+=1;
        if($n4==3)
            $n34+=1;
	}
    if($n3==2){
        if($n4==1)
            $n34+=1;
        if($n4==3)
            $n43+=1;
	}
    if($n3==3){ 
        if($n4==2)
            $n34+=1;
        if($n4==1)
            $n43+=1;
	}
    $s12+=$n12;
    $s21+=$n21;
    $s13+=$n13;
    $s31+=$n31;
    $s14+=$n14;
    $s41+=$n41;
    $s23+=$n23;
    $s32+=$n32;
    $s24+=$n24;
    $s42+=$n42;
    $s34+=$n34;
    $s43+=$n43;
    if($n12>0){
    echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player one won on player two<br>";}
    if($n13>0){
    echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player one won on player three<br>";}
    if($n14>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player one won on player four<br>";}
    if($n21>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player two won on player one<br>";}
    if($n23>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player two won on player three<br>";}
    if($n24>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player two won on player four<br>";}
    if($n31>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player three won on player one<br>";}
    if($n32>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player three won on player two<br>";}
    if($n34>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player three won on player four<br>";}
    if($n41>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player four won on player one<br>";}
    if($n42>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player four won on player two<br>";}
    if($n43>0){echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>player four won on player three<br>";}
    $i+=1;
}
echo "<p style='color:crimson;font-size:30px'>**********************overal results**************************************</p>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>winnings of player one on player two is";echo $s12;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player one on player three is";echo $s13;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player one on player four is";echo $s14;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player two on player one is";echo $s21;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player two on player three is";echo $s23;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player two on player four is";echo $s24;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player three on player one is";echo $s31;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player three on player two is";echo $s32;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player three on player four is";echo $s34;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player four on player one is";echo $s41;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player four on player two is";echo $s42;echo "<br>";
echo "<p style='color:steelblue;margin-left:40px;font-size:15px'>         winnings of player four on player three is";echo $s43;echo "<br>";
?>
