<?php


$notes = array(17,18,19,20) ;

// print_r($notes) ;

/*for ($i=0;$i<count($notes);$i++)
{
    $j=$i+1;
    echo "La note n° $j est: ".$notes[$i]."<BR>";
}*/

/*$j=1;
for ($i=count($notes);$i>0;$i--)
{
    echo "La note n° $j est: ".$notes[$i-1]."<BR>";
    $j++;
}*/

/*$i=0;
while ($i<count($notes))
{
    $j=$i+1 ;
    echo "La note n° $j est: ".$notes[$i]."<BR>";
    $i++;
}*/

foreach ($notes as $i=>$note){
    $j=$i+1 ;
    echo "La note n° $j est: ".$note."<BR>";
}