<form action="" method="post">
	<div class="row">
		<label>Input</label>
		<input type="text" name="input" value="<?=isset($_POST['input']) ? $_POST['input'] : ''?>"/>
        <input type="submit" name="submit" value="Go"/>
	</div>
</form>
<?php
    if (isset($_POST['submit'])) {
        echo '<h1>Hasil Input</h1>';
        $input = @$_POST['input'];
        for ($i=1; $i <=$input ; $i++) { // membuat perulangan vertikal
            if ($i%2==1) { // membuat ganjil genap dengan modulus
                if (($i+1)%4==0) { // sesuai keterangan soal pada poin 3 yang mana S=4n-1
                    for ($y=1; $y <=$input ; $y++) { 
                        if ($y==$input-1) echo "&emsp;"; // &emsp; merupakan salah satu format spasi di html
                        else echo "@";
                    }
                }
                else {
                    for ($y=1; $y <=$input ; $y++) { 
                        if ($y==2)echo "&emsp;";
                        else echo "@";
                    }
                }
                
            }else {
                for ($y=1; $y <= $input ; $y++) { 
                    if ($y==1 || $y==$input) echo "@";
                    else echo "&emsp;";
                }
            }
            echo "<br>";
        }
    }
?>