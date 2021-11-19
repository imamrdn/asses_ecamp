<?php 

for ($i=1; $i <= 50; $i++) { 
    if ($i % 3 != 0 && $i % 5 != 0){
        echo $i . "<br>";
    } else if ($i % 3 == 0){
        echo "Foo<br>";
    } else if ($i % 5 == 0) {
        echo "Bar<br>";
    } 
    
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "FooBar<br>";
    }
}

?>