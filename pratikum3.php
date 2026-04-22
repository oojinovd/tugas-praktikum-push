<?php
class Produk {
    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {
    final public function prosesTransaksi() {
        echo "Transaksi diproses";
    }
}

$p1 = new Produk("Laptop", 7000000);
$p2 = new Produk("Mouse", 200000);
$p3 = new Produk("Keyboard", 300000);

$p1->tambahProduk();
$p2->tambahProduk();
$p3->tambahProduk();

echo "Total Produk: " . Produk::$jumlahProduk . "<br>";

$t = new Transaksi();
$t->prosesTransaksi();
?>
