<?php
include '../conn.php';
 $nama_pelamar = $_GET['nama_pelamar'];
 $Foto_Pelamar = $_GET['Foto_Pelamar'];
 $tempatlahir = $_GET['tempatlahir'];
 $tanggallahir = $_GET['tanggallahir'];
 $p_tgl = explode("/", $tanggallahir);
 $i_tgllahir = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $noktp = $_GET['noktp'];
 $alamatktp = $_GET['alamatktp'];
 $jabatanygdilamar = $_GET['jabatanygdilamar'];
 $jk_pelamar = $_GET['jk_pelamar'];
 $stat_pelamar = $_GET['stat_pelamar'];
 $kebangsaan_pelamar = $_GET['kebangsaan_pelamar'];
 $notlpn_pelamar = $_GET['notlpn_pelamar'];
 $kotalain = $_GET['kotalain'];
 $ingin_gaji = $_GET['ingin_gaji'];
 $keluarga_di_p = $_GET['keluarga_di_p'];
 $melamar_disini = $_GET['melamar_disini'];
 $pelanggaran_polisi = $_GET['pelanggaran_polisi'];
 $kepemilikan_p_lain = $_GET['kepemilikan_p_lain'];
 $mulai_kerja = $_GET['mulai_kerja'];
 $email = $_GET['email'];

$sql_p = "INSERT INTO `pelamar` (`idpelamar`, `namapelamar`, `fotopelamar`, `tempatlahir`, `tgllahir`, `noktp`, `alamat`, `jabatandilamar`, `jkpelamar`, `statuspelamar`, `kebangsaan`, `notlpn`, `ditempatkan`, `ingingaji`, `adakeluarga`, `pernahlamar`, `pelanggaran`, `perusahaanlain`, `mulaikerja`, `email`) VALUES (NULL, '$nama_pelamar', '$Fotopelamar', '$tempatlahir', '$i_tgllahir', '$noktp', '$alamatktp', '$jabatanygdilamar', '$jk_pelamar', '$stat_pelamar', '$kebangsaan_pelamar', '$notlpn_pelamar', '$kotalain', '$ingin_gaji', '$keluarga_di_p', '$melamar_disini', '$pelanggaran_polisi', '$kepemilikan_p_lain', '$mulai_kerja', '$email')";
$query_p = $conn->query($sql_p);

$sql_crid = "select * from pelamar order by idpelamar desc limit 1";
$query_crid = $conn->query($sql_crid);
 foreach ($query_crid as $cr) {
 $idpelamar = $cr['idpelamar'];
}


 $namasd = $_GET['namasd'];
 $jurusansd = $_GET['jurusansd'];
 $ipksd = $_GET['ipksd'];
 $p_masuksd = $_GET['masuksd'];
 $p_tgl = explode("/", $p_masuksd);
 	$masuksd = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaisd = $_GET['selesaisd'];
 $p_tgl = explode("/", $p_selesaisd);
 	$selesaisd = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $namasmp = $_GET['namasmp'];
 $jurusansmp = $_GET['jurusansmp'];
 $ipksmp = $_GET['ipksmp'];
 $p_masuksmp = $_GET['masuksmp'];
 $p_tgl = explode("/", $p_masuksmp);
 	$masuksmp = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaismp = $_GET['selesaismp'];
 $p_tgl = explode("/", $p_selesaismp);
 	$slesaismp = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $namsma = $_GET['namsma'];
 $jurusansma = $_GET['jurusansma'];
 $ipksma = $_GET['ipksma'];
 $p_masuksma = $_GET['masuksma'];
 $p_tgl = explode("/", $p_masuksma);
 	$masuksma = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaisma = $_GET['selesaisma'];
 $p_tgl = explode("/", $p_selesaisma);
 	$slesaisma = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $namauni = $_GET['namauni'];
 $jurusanuni = $_GET['jurusanuni'];
 $ipkuni = $_GET['ipkuni'];
 $p_masukuni = $_GET['masukuni'];
 $p_tgl = explode("/", $p_masukuni);
 	$masukuni = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaiuni = $_GET['selesaiuni'];
 $p_tgl = explode("/", $p_selesaiuni);
 	$slesaiuni = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 
$sql_p_p = "INSERT INTO `pelamar_pendidikan` (`idpelamar`, `namasd`, `jurusansd`, `ipksd`, `tglmasuksd`, `tglselesaisd`, `namasmp`, `jurusansmp`, `ipksmp`, `tglmasuksmp`, `tglselesaismp`, `namasma`, `jurusansma`, `ipksma`, `tglmasuksma`, `tglselesaisma`, `namauniversiatas`, `jurusanuniversiatas`, `tglmasukuniversiatas`, `tglselesaiuniversiatas`, `ipkuniversiatas`) VALUES ('$idpelamar', '$namasd', '$jurusansd', '$ipksd', '$masuksd', '$selesaisd', '$namasmp', '$jurusansmp', '$ipksmp', '$masuksmp', '$selesaismp', '$namasma', '$jurusansma', '$ipksma', '$masuksma', '$selesaisma', '$namauni', '$jurusanuni', '$ipkuni', '$masukuni', '$selesaiuni')";

$query_p_p = $conn->query($sql_p_p);




 // jlh kerabat 
 $jlh_kerabat = $_GET['jlh_kerabat'];
 $n=1;
 while ($n<=$jlh_kerabat) {
	 $kerabat_nama[$n] = $_GET['kerabat_nama'.$n];
	 $kerabat_tlp[$n] = $_GET['kerabat_tlp'.$n];
	 $kerabat_posisi[$n] = $_GET['kerabat_posisi'.$n];
	 $kerabat_perusahaan[$n] = $_GET['kerabat_perusahaan'.$n];
	 $kerabat_hubungan[$n] = $_GET['kerabat_hubungan'.$n];

	 $sql_kerabat ="INSERT INTO `pelamar_kerabat` (`idkerabat`, `idpelamar`, `nama_k`, `telp_k`, `posisi_k`, `perusahaan_k`, `hubungan_k`) VALUES (NULL, '$idpelamar', '$kerabat_nama[$n]', '$kerabat_tlp[$n]', '$kerabat_posisi[$n]', '$kerabat_perusahaan[$n]', '$kerabat_hubungan[$n]')";	
	 $query_kerabat = $conn->query($sql_kerabat);
 $n++;
 }



// jumlah nama penting 
 $jlh_nama = $_GET['jlh_nama'];
 $n=1;
 while ($n<=$jlh_nama) {
 	$no_penting_nama[$n] = $_GET['no_penting_nama'.$n];
 	$no_penting_hubungan[$n] = $_GET['no_penting_hubungan'.$n];
 	$no_penting_telepon[$n] = $_GET['no_penting_telepon'.$n];
 	$sql_nama= "INSERT INTO `pelamar_nama` (`idnama`, `idpelamar`, `nama_penting`, `hubungan_penting`, `telp_penting`) VALUES (NULL, '$idpelamar', '$no_penting_nama[$n]', '$no_penting_hubungan[$n]', '$no_penting_telepon[$n]')";
	 $query_nama = $conn->query($sql_nama);
 $n++;
 }


// saudara 
 $jlh_saudara = $_GET['jlh_saudara'];
 $n=1;
	 $namaayah = $_GET['namaayah'];
	 $usiaayah = $_GET['usiaayah'];
	 $pendidikanayah = $_GET['pendidikanayah'];
	 $keteranganayah = $_GET['keteranganayah'];
	     $sql_saudara_ayh = "INSERT INTO `pelamar_saudara` (`nosaudara`, `idpelamar`, `nama_s`, `umur_s`, `pendidikan_s`, `keterangan_s`) VALUES (NULL,'$idpelamar', '$namaayah', '$usiaayah', '$pendidikanayah', '$keteranganayah')";
		 $query_saudara_ayh = $conn->query($sql_saudara_ayh);

	 $namaibu = $_GET['namaibu'];
	 $usiaibu = $_GET['usiaibu'];
	 $pendidikanibu = $_GET['pendidikanibu'];
	 $keteranganibu = $_GET['keteranganibu'];
	     $sql_saudara_ibu= "INSERT INTO `pelamar_saudara` (`nosaudara`, `idpelamar`, `nama_s`, `umur_s`, `pendidikan_s`, `keterangan_s`) VALUES (NULL,'$idpelamar', '$namaibu', '$usiaibu', '$pendidikanibu', '$keteranganibu')";
		 $query_saudara_ibu = $conn->query($sql_saudara_ibu);

 while ($n<=$jlh_saudara){
	 $namasaudara[$n] = $_GET['namasaudara'.$n];
	 $umursaudara[$n] = $_GET['umursaudara'.$n];
	 $pendidikansaudara[$n] = $_GET['pendidikansaudara'.$n];
	 $keterangansaudara[$n] = $_GET['keterangansaudara'.$n];

	 	 $sql_saudara= "INSERT INTO `pelamar_saudara` (`nosaudara`, `idpelamar`, `nama_s`, `umur_s`, `pendidikan_s`, `keterangan_s`) VALUES (NULL,'$idpelamar' , '$namasaudara[$n]', '$umursaudara[$n]', '$pendidikansaudara[$n]', '$keterangansaudara[$n]')";
		 $query_saudara = $conn->query($sql_saudara);

 $n++;
 }

 



 // pelatihan 
 $jlh_pelatihan = $_GET['jlh_pelatihan'];
	$n=1;
 while ($n<=$jlh_pelatihan){

 $nama_pelatihan[$n] = $_GET['nama_pelatihan'.$n];
 $penyelenggara_pelatihan[$n] = $_GET['penyelenggara_pelatihan'.$n];
 $p_tanggal_pelatihan[$n] = $_GET['tanggal_pelatihan'.$n];
 $p_tgl = explode("/", $p_tanggal_pelatihan[$n]);
 	$tanggal_pelatihan[$n] = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $keterangan_pelatihan[$n] = $_GET['keterangan_pelatihan'.$n];

	 	 $sql_pelatihan= "INSERT INTO `pelamar_pelatihan` (`nopelatihan`, `idpelamar`, `nama_pelatihan`, `penyelenggaraan_pelatihan`, `tgl_pelatihan`, `keterangan_pelatihan`) VALUES (NULL, '$idpelamar', '$nama_pelatihan[$n]', '$penyelenggara_pelatihan[$n]', '$tanggal_pelatihan[$n]', '$keterangan_pelatihan[$n]')";
		 $query_pelatihan = $conn->query($sql_pelatihan);
		 $n++;
		}


// jumlah bahasa 

    $jlh_bahasa = $_GET['jlh_bahasa'];
 $n=1;
 while ($n<=$jlh_bahasa){
 	if($n==1){
 		$nama_bahasa[$n] = "Inggris";
 	}else{
 		$nama_bahasa[$n] = $_GET['nama_bahasa'.$n];
 	}
 	    $bhs[$n] = $_GET['bhs'.$n];
 		$mns[$n] = $_GET['mns'.$n];

 		$sql_bahasa= "INSERT INTO `pelamar_bahasa` (`nobahasa`, `idpelamar`, `nama_bahasa`, `lisan`, `menulis`) VALUES (NULL, '$idpelamar', '$nama_bahasa[$n]', '$bhs[$n]', '$mns[$n]')";
		 $query_bahasa = $conn->query($sql_bahasa);
 
    $n++;

}


//pengalaman kerja 
 $jlh_pengalaman = $_GET['jlh_pengalaman'];
 
 $pengalaman_nama_p_1 = $_GET['pengalaman_nama_p_1'];
 $pengalaman_bergerak_di_1 = $_GET['pengalaman_bergerak_di_1'];
 $pengalaman_jabatan_p_1 = $_GET['pengalaman_jabatan_p_1'];
 $pengalaman_gaji_p_1 = $_GET['pengalaman_gaji_p_1'];
 $pengalaman_mulai_k_1 = $_GET['pengalaman_mulai_k_1'];
 $pengalaman_keluar_p_1 = $_GET['pengalaman_keluar_p_1'];
 $pengalaman_alasan_berhenti_1 = $_GET['pengalaman_alasan_berhenti_1'];
 $pengalaman_gambaran_p_1 = $_GET['pengalaman_gambaran_p_1'];

?>
// penyakit

 $jantung = $_GET['jantung'];
 $t_jantung = $_GET['t_jantung'];
 $n_jantung = $_GET['n_jantung'];
 
 $hipertensi = $_GET['hipertensi'];
 $t_hipertensi = $_GET['t_hipertensi'];
 $n_hipertensi = $_GET['n_hipertensi'];
 
 $diabetes = $_GET['diabetes'];
 $t_diabetes = $_GET['t_diabetes'];
 $n_diabetes = $_GET['n_diabetes'];
 
 $hepatitis = $_GET['hepatitis'];
 $t_hepatitis = $_GET['t_hepatitis'];
 $n_hepatitis = $_GET['n_hepatitis'];
 
 $kanker = $_GET['kanker'];
 $t_kanker = $_GET['t_kanker'];
 $n_kanker = $_GET['n_kanker'];
 
 $tbc = $_GET['tbc'];
 $t_tbc = $_GET['t_tbc'];
 $n_tbc = $_GET['n_tbc'];
 
 $asma = $_GET['asma'];
 $t_asma = $_GET['t_asma'];
 $n_asma = $_GET['n_asma'];
 
 $aids = $_GET['aids'];
 $t_aids = $_GET['t_aids'];
 $n_aids = $_GET['n_aids'];
 
 $lainnya = $_GET['lainnya'];
 $t_lainnya = $_GET['t_lainnya'];
 $n_lainnya = $_GET['n_lainnya'];


 