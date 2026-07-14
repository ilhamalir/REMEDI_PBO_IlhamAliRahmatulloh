<?php

abstract class Reservasi
{
    protected $idReservasi;
    protected $namaPelanggan;
    protected $tanggalBooking;
    protected $durasiJam;
    protected $tarifDasarPerJam;

    public function __construct($idReservasi, $namaPelanggan, $tanggalBooking, $durasiJam, $tarifDasarPerJam)
    {
        $this->idReservasi = $idReservasi;
        $this->namaPelanggan = $namaPelanggan;
        $this->tanggalBooking = $tanggalBooking;
        $this->durasiJam = $durasiJam;
        $this->tarifDasarPerJam = $tarifDasarPerJam;
    }

    abstract public function hitungTotalBiaya();

    abstract public function tampilkanSpesifikasiPaket();
}
?>