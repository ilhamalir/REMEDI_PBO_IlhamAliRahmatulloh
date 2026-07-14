<?php

require_once "Reservasi.php";
require_once "koneksi.php";

class ReservasiPremium extends Reservasi
{
    protected $kuotaTalentOrang;
    protected $layananMakeup;

    public function __construct(
        $idReservasi,
        $namaPelanggan,
        $tanggalBooking,
        $durasiJam,
        $tarifDasarPerJam,
        $kuotaTalentOrang,
        $layananMakeup
    ){
        parent::__construct(
            $idReservasi,
            $namaPelanggan,
            $tanggalBooking,
            $durasiJam,
            $tarifDasarPerJam
        );

        $this->kuotaTalentOrang = $kuotaTalentOrang;
        $this->layananMakeup = $layananMakeup;
    }

    public function hitungTotalBiaya()
    {
        return 0;
    }

    public function tampilkanSpesifikasiPaket()
    {
        return "";
    }

    public function getDataPremium($koneksi)
    {
        $query = "SELECT * FROM tabel_reservasi
                  WHERE jenis_paket='Premium'";

        return mysqli_query($koneksi, $query);
    }
}