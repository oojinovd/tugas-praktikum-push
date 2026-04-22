<?php
class Matematika {
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

$a = $_POST['a'] ?? 0;
$b = $_POST['b'] ?? 0;
$s = $_POST['sisi'] ?? 0;
?>

<form method="POST">
A: <input type="number" name="a"><br>
B: <input type="number" name="b"><br>
Sisi: <input type="number" name="sisi"><br>
<button type="submit">Hitung</button>
</form>

<?php
if($_POST){
    echo "Tambah: " . Matematika::tambah($a, $b) . "<br>";
    echo "Kurang: " . Matematika::kurang($a, $b) . "<br>";
    echo "Luas Persegi: " . Matematika::luasPersegi($s);
}
?>
