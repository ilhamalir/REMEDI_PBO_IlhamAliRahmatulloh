<?php

require_once "Reservasi.php";
require_once "koneksi.php";

class ReservasiReguler extends Reservasi
{
    protected $tipeBackground;
    protected $cetakFotoLembar;

    public function __construct(
        $idReservasi,
        $namaPelanggan,
        $tanggalBooking,
        $durasiJam,
        $tarifDasarPerJam,
        $tipeBackground,
        $cetakFotoLembar
    ){
        parent::__construct(
            $idReservasi,
            $namaPelanggan,
            $tanggalBooking,
            $durasiJam,
            $tarifDasarPerJam
        );

        $this->tipeBackground = $tipeBackground;
        $this->cetakFotoLembar = $cetakFotoLembar;
    }

    public function hitungTotalBiaya()
    {
        return 0;
    }

    public function tampilkanSpesifikasiPaket()
    {
        return "";
    }

    public function getDataReguler($koneksi)
    {
        $query = "SELECT * FROM tabel_reservasi
                  WHERE jenis_paket='Reguler'";

        return mysqli_query($koneksi, $query);
    }
}