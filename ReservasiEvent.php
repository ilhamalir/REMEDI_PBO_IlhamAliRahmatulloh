<?php

require_once "Reservasi.php";
require_once "koneksi.php";

class ReservasiEvent extends Reservasi
{
    protected $namaLokasiLuar;
    protected $biayaTransportasiTim;

    public function __construct(
        $idReservasi,
        $namaPelanggan,
        $tanggalBooking,
        $durasiJam,
        $tarifDasarPerJam,
        $namaLokasiLuar,
        $biayaTransportasiTim
    ){
        parent::__construct(
            $idReservasi,
            $namaPelanggan,
            $tanggalBooking,
            $durasiJam,
            $tarifDasarPerJam
        );

        $this->namaLokasiLuar = $namaLokasiLuar;
        $this->biayaTransportasiTim = $biayaTransportasiTim;
    }

    public function hitungTotalBiaya()
    {
        return 0;
    }

    public function tampilkanSpesifikasiPaket()
    {
        return "";
    }

    public function getDataEvent($koneksi)
    {
        $query = "SELECT * FROM tabel_reservasi
                  WHERE jenis_paket='Event'";

        return mysqli_query($koneksi, $query);
    }
}