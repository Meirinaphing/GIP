<?php
function randomString($length = 5) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str  .= $characters[$rand];
    }
    return $str;
}
$rdm1 = randomString();

include '../conn.php';
 $nama_pelamar = $_POST['nama_pelamar'];

 $Foto_Pelamar_nm = $_FILES['Foto_Pelamar']['name'];
 $Foto_Pelamar_err = $_FILES['Foto_Pelamar']['error'];

	$move = move_uploaded_file($_FILES['Foto_Pelamar']['tmp_name'],'../fotopelamar/'.$rdm1.$Foto_Pelamar_nm );
	$Foto_Pelamar="fotopelamar/".$rdm1.$Foto_Pelamar_nm;

 $tempatlahir = $_POST['tempatlahir'];
 $tanggallahir = $_POST['tanggallahir'];
 $p_tgl = explode("/", $tanggallahir);
 $i_tgllahir = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $noktp = $_POST['noktp'];
 $alamatktp = $_POST['alamatktp'];
 $jabatanygdilamar = $_POST['jabatanygdilamar'];
 $jk_pelamar = $_POST['jk_pelamar'];
 $stat_pelamar = $_POST['stat_pelamar'];
 $kebangsaan_pelamar = $_POST['kebangsaan_pelamar'];
 $notlpn_pelamar = $_POST['notlpn_pelamar'];
 $kotalain = $_POST['kotalain'];
 $ingin_gaji = $_POST['ingin_gaji'];
 $keluarga_di_p = $_POST['keluarga_di_p'];
 $melamar_disini = $_POST['melamar_disini'];
 $pelanggaran_polisi = $_POST['pelanggaran_polisi'];
 $kepemilikan_p_lain = $_POST['kepemilikan_p_lain'];
 $mulai_kerja = $_POST['mulai_kerja'];
 $email = $_POST['email'];

$sql_p = "INSERT INTO `pelamar` (`idpelamar`, `namapelamar`, `fotopelamar`, `tempatlahir`, `tgllahir`, `noktp`, `alamat`, `jabatandilamar`, `jkpelamar`, `statuspelamar`, `kebangsaan`, `notlpn`, `ditempatkan`, `ingingaji`, `adakeluarga`, `pernahlamar`, `pelanggaran`, `perusahaanlain`, `mulaikerja`, `email`, `status`) VALUES (NULL, '$nama_pelamar', '$Foto_Pelamar', '$tempatlahir', '$i_tgllahir', '$noktp', '$alamatktp', '$jabatanygdilamar', '$jk_pelamar', '$stat_pelamar', '$kebangsaan_pelamar', '$notlpn_pelamar', '$kotalain', '$ingin_gaji', '$keluarga_di_p', '$melamar_disini', '$pelanggaran_polisi', '$kepemilikan_p_lain', '$mulai_kerja', '$email','barudaftar')";
$query_p = $conn->query($sql_p);

$sql_crid = "select * from pelamar order by idpelamar desc limit 1";
$query_crid = $conn->query($sql_crid);
 foreach ($query_crid as $cr) {
 $idpelamar = $cr['idpelamar'];
}


 $namasd = $_POST['namasd'];
 $jurusansd = $_POST['jurusansd'];
 $ipksd = $_POST['ipksd'];
 $p_masuksd = $_POST['masuksd'];
 $p_tgl = explode("/", $p_masuksd);
 	$masuksd = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaisd = $_POST['selesaisd'];
 $p_tgl = explode("/", $p_selesaisd);
 	$selesaisd = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $namasmp = $_POST['namasmp'];
 $jurusansmp = $_POST['jurusansmp'];
 $ipksmp = $_POST['ipksmp'];
 $p_masuksmp = $_POST['masuksmp'];
 $p_tgl = explode("/", $p_masuksmp);
 	$masuksmp = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaismp = $_POST['selesaismp'];
 $p_tgl = explode("/", $p_selesaismp);
 	$slesaismp = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $namsma = $_POST['namsma'];
 $jurusansma = $_POST['jurusansma'];
 $ipksma = $_POST['ipksma'];
 $p_masuksma = $_POST['masuksma'];
 $p_tgl = explode("/", $p_masuksma);
 	$masuksma = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaisma = $_POST['selesaisma'];
 $p_tgl = explode("/", $p_selesaisma);
 	$slesaisma = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $namauni = $_POST['namauni'];
 $jurusanuni = $_POST['jurusanuni'];
 $ipkuni = $_POST['ipkuni'];
 $p_masukuni = $_POST['masukuni'];
 $p_tgl = explode("/", $p_masukuni);
 	$masukuni = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $p_selesaiuni = $_POST['selesaiuni'];
 $p_tgl = explode("/", $p_selesaiuni);
 	$slesaiuni = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 
$sql_p_p = "INSERT INTO `pelamar_pendidikan` (`idpelamar`, `namasd`, `jurusansd`, `ipksd`, `tglmasuksd`, `tglselesaisd`, `namasmp`, `jurusansmp`, `ipksmp`, `tglmasuksmp`, `tglselesaismp`, `namasma`, `jurusansma`, `ipksma`, `tglmasuksma`, `tglselesaisma`, `namauniversiatas`, `jurusanuniversiatas`, `tglmasukuniversiatas`, `tglselesaiuniversiatas`, `ipkuniversiatas`) VALUES ('$idpelamar', '$namasd', '$jurusansd', '$ipksd', '$masuksd', '$selesaisd', '$namasmp', '$jurusansmp', '$ipksmp', '$masuksmp', '$selesaismp', '$namasma', '$jurusansma', '$ipksma', '$masuksma', '$selesaisma', '$namauni', '$jurusanuni', '$ipkuni', '$masukuni', '$selesaiuni')";

$query_p_p = $conn->query($sql_p_p);




 // jlh kerabat 
 $jlh_kerabat = $_POST['jlh_kerabat'];
 $n=1;
 while ($n<=$jlh_kerabat) {
	 $kerabat_nama[$n] = $_POST['kerabat_nama'.$n];
	 $kerabat_tlp[$n] = $_POST['kerabat_tlp'.$n];
	 $kerabat_posisi[$n] = $_POST['kerabat_posisi'.$n];
	 $kerabat_perusahaan[$n] = $_POST['kerabat_perusahaan'.$n];
	 $kerabat_hubungan[$n] = $_POST['kerabat_hubungan'.$n];

	 $sql_kerabat ="INSERT INTO `pelamar_kerabat` (`idkerabat`, `idpelamar`, `nama_k`, `telp_k`, `posisi_k`, `perusahaan_k`, `hubungan_k`) VALUES (NULL, '$idpelamar', '$kerabat_nama[$n]', '$kerabat_tlp[$n]', '$kerabat_posisi[$n]', '$kerabat_perusahaan[$n]', '$kerabat_hubungan[$n]')";	
	 $query_kerabat = $conn->query($sql_kerabat);
 $n++;
 }



// jumlah nama penting 
 $jlh_nama = $_POST['jlh_nama'];
 $n=1;
 while ($n<=$jlh_nama) {
 	$no_penting_nama[$n] = $_POST['no_penting_nama'.$n];
 	$no_penting_hubungan[$n] = $_POST['no_penting_hubungan'.$n];
 	$no_penting_telepon[$n] = $_POST['no_penting_telepon'.$n];
 	$sql_nama= "INSERT INTO `pelamar_nama` (`idnama`, `idpelamar`, `nama_penting`, `hubungan_penting`, `telp_penting`) VALUES (NULL, '$idpelamar', '$no_penting_nama[$n]', '$no_penting_hubungan[$n]', '$no_penting_telepon[$n]')";
	 $query_nama = $conn->query($sql_nama);
 $n++;
 }


// saudara 
 $jlh_saudara = $_POST['jlh_saudara'];
 $n=1;
	 $namaayah = $_POST['namaayah'];
	 $usiaayah = $_POST['usiaayah'];
	 $pendidikanayah = $_POST['pendidikanayah'];
	 $keteranganayah = $_POST['keteranganayah'];
	     $sql_saudara_ayh = "INSERT INTO `pelamar_saudara` (`nosaudara`, `idpelamar`, `nama_s`, `umur_s`, `pendidikan_s`, `keterangan_s`) VALUES (NULL,'$idpelamar', '$namaayah', '$usiaayah', '$pendidikanayah', '$keteranganayah')";
		 $query_saudara_ayh = $conn->query($sql_saudara_ayh);

	 $namaibu = $_POST['namaibu'];
	 $usiaibu = $_POST['usiaibu'];
	 $pendidikanibu = $_POST['pendidikanibu'];
	 $keteranganibu = $_POST['keteranganibu'];
	     $sql_saudara_ibu= "INSERT INTO `pelamar_saudara` (`nosaudara`, `idpelamar`, `nama_s`, `umur_s`, `pendidikan_s`, `keterangan_s`) VALUES (NULL,'$idpelamar', '$namaibu', '$usiaibu', '$pendidikanibu', '$keteranganibu')";
		 $query_saudara_ibu = $conn->query($sql_saudara_ibu);

 while ($n<=$jlh_saudara){
	 $namasaudara[$n] = $_POST['namasaudara'.$n];
	 $umursaudara[$n] = $_POST['umursaudara'.$n];
	 $pendidikansaudara[$n] = $_POST['pendidikansaudara'.$n];
	 $keterangansaudara[$n] = $_POST['keterangansaudara'.$n];

	 	 $sql_saudara= "INSERT INTO `pelamar_saudara` (`nosaudara`, `idpelamar`, `nama_s`, `umur_s`, `pendidikan_s`, `keterangan_s`) VALUES (NULL,'$idpelamar' , '$namasaudara[$n]', '$umursaudara[$n]', '$pendidikansaudara[$n]', '$keterangansaudara[$n]')";
		 $query_saudara = $conn->query($sql_saudara);

 $n++;
 }

 



 // pelatihan 
 $jlh_pelatihan = $_POST['jlh_pelatihan'];
	$n=1;
 while ($n<=$jlh_pelatihan){

 $nama_pelatihan[$n] = $_POST['nama_pelatihan'.$n];
 $penyelenggara_pelatihan[$n] = $_POST['penyelenggara_pelatihan'.$n];
 $p_tanggal_pelatihan[$n] = $_POST['tanggal_pelatihan'.$n];
 $p_tgl = explode("/", $p_tanggal_pelatihan[$n]);
 	$tanggal_pelatihan[$n] = $p_tgl[2].'-'.$p_tgl[1].'-'.$p_tgl[0];
 $keterangan_pelatihan[$n] = $_POST['keterangan_pelatihan'.$n];

	 	 $sql_pelatihan= "INSERT INTO `pelamar_pelatihan` (`nopelatihan`, `idpelamar`, `nama_pelatihan`, `penyelenggaraan_pelatihan`, `tgl_pelatihan`, `keterangan_pelatihan`) VALUES (NULL, '$idpelamar', '$nama_pelatihan[$n]', '$penyelenggara_pelatihan[$n]', '$tanggal_pelatihan[$n]', '$keterangan_pelatihan[$n]')";
		 $query_pelatihan = $conn->query($sql_pelatihan);
		 $n++;
		}


// jumlah bahasa 

    $jlh_bahasa = $_POST['jlh_bahasa'];
 $n=1;
 while ($n<=$jlh_bahasa){
 	if($n==1){
 		$nama_bahasa[$n] = "Inggris";
 	}else{
 		$nama_bahasa[$n] = $_POST['nama_bahasa'.$n];
 	}
 	    $bhs[$n] = $_POST['bhs'.$n];
 		$mns[$n] = $_POST['mns'.$n];

 		$sql_bahasa= "INSERT INTO `pelamar_bahasa` (`nobahasa`, `idpelamar`, `nama_bahasa`, `lisan`, `menulis`) VALUES (NULL, '$idpelamar', '$nama_bahasa[$n]', '$bhs[$n]', '$mns[$n]')";
		 $query_bahasa = $conn->query($sql_bahasa);
 
    $n++;

}


//pengalaman kerja 
 
 $jlh_pengalaman = $_POST['jlh_pengalaman'];
 $n=1;

 while ($n<=$jlh_pengalaman){

	 $pengalaman_nama_p_[$n] = $_POST['pengalaman_nama_p_'.$n];
	 $pengalaman_bergerak_di_[$n] = $_POST['pengalaman_bergerak_di_'.$n];
	 $pengalaman_jabatan_p_[$n] = $_POST['pengalaman_jabatan_p_'.$n];
	 $pengalaman_gaji_p_[$n] = $_POST['pengalaman_gaji_p_'.$n];
	 $p_pengalaman_mulai_k_[$n] = $_POST['pengalaman_mulai_k_'.$n];
 		$p_tgl_m = explode("/", $p_pengalaman_mulai_k_[$n]);
 		$pengalaman_mulai_k_[$n] = $p_tgl_m[1].'-'.$p_tgl_m[0].'-01';
	 $p_pengalaman_keluar_p_[$n] = $_POST['pengalaman_keluar_p_'.$n];
 		$p_tgl_k = explode("/", $p_pengalaman_keluar_p_[$n]);
 		$pengalaman_keluar_p_[$n] = $p_tgl_k[1].'-'.$p_tgl_k[0].'-01';

	 $pengalaman_alasan_berhenti_[$n] = $_POST['pengalaman_alasan_berhenti_'.$n];
	 $pengalaman_gambaran_p_[$n] = $_POST['pengalaman_gambaran_p_'.$n];

	echo $sql_pengalaman= "INSERT INTO `pelamar_pengalaman` (`nopengalaman`, `idpelamar`, `pengalaman_nama`, `pengalaman_bererak`, `pengalaman_jabatang`, `pengalaman_gaji`, `pengalaman_mulai`, `pengalaman_keluar`, `pengalaman_alasan_berhenti`, `pengalaman_gambaran_pekerjaan`) VALUES (NULL, '$idpelamar', '$pengalaman_nama_p_[$n]', '$pengalaman_bergerak_di_[$n]', '$pengalaman_jabatan_p_[$n]', '$pengalaman_gaji_p_[$n]', '$pengalaman_mulai_k_[$n]', '$pengalaman_keluar_p_[$n]', '$pengalaman_alasan_berhenti_[$n]', '$pengalaman_gambaran_p_[$n]')";

	$query_pengalaman = $conn->query($sql_pengalaman);

$n++;
}

// penyakit
 $jantung = $_POST['jantung'];
 if(isset($jantung)){
	$t_jantung = $_POST['t_jantung'];
 	$n_jantung = $_POST['n_jantung'];

 	$sql_jantung= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'Jantung', '$t_jantung', '$n_jantung')";

	$query_jantung = $conn->query($sql_jantung);
 	

 }

 $hipertensi = $_POST['hipertensi'];
 if(isset($hipertensi)){
	$t_hipertensi = $_POST['t_hipertensi'];
 	$n_hipertensi = $_POST['n_hipertensi'];

 	$sql_hipertensi= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'Hipertensi', '$t_hipertensi', '$n_hipertensi')";

	$query_hipertensi = $conn->query($sql_hipertensi);
 }

 $diabetes = $_POST['diabetes'];
 if(isset($diabetes)){
 	$t_diabetes = $_POST['t_diabetes'];
 	$n_diabetes = $_POST['n_diabetes'];
 	$sql_diabetes= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'Diabetes', '$t_diabetes', '$n_diabetes')";

	$query_diabetes = $conn->query($sql_diabetes);
 }

 $hepatitis = $_POST['hepatitis'];
 if(isset($hepatitis)){
 	$t_hepatitis = $_POST['t_hepatitis'];
	$n_hepatitis = $_POST['n_hepatitis'];
 	$sql_hepatitis = "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'Hepatitis', '$t_hepatitis', '$n_hepatitis')";

	$query_hepatitis = $conn->query($sql_hepatitis);
 }

 $kanker = $_POST['kanker'];
 if(isset($kanker)){
 	$t_kanker = $_POST['t_kanker'];
 	$n_kanker = $_POST['n_kanker'];
 	$sql_kanker= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'Kanker', '$t_kanker', '$n_kanker')";

	$query_kanker = $conn->query($sql_kanker);
 }

 $tbc = $_POST['tbc'];
 if(isset($tbc)){
	$t_tbc = $_POST['t_tbc'];
    $n_tbc = $_POST['n_tbc'];
 	$sql_tbc= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'TBC', '$t_tbc', '$n_tbc')";

	$query_tbc = $conn->query($sql_tbc);
 }

 $asma = $_POST['asma'];
 if(isset($asma)){
 	$t_asma = $_POST['t_asma'];
 	$n_asma = $_POST['n_asma'];
 	$sql_asma= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'Asma', '$t_asma', '$n_asma')";

	$query_asma = $conn->query($sql_asma);
 }

 $aids = $_POST['aids'];
 if(isset($aids)){
 	$t_aids = $_POST['t_aids'];
 	$n_aids = $_POST['n_aids'];

 	$sql_aids= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', 'Aids', '$t_aids', '$n_aids')";

	$query_aids = $conn->query($sql_aids);
 }

 $lainnya = $_POST['lainnya'];
 if(isset($lainnya)){
 	$t_lainnya = $_POST['t_lainnya'];
 	$n_lainnya = $_POST['n_lainnya'];

 	$sql_lainnya= "INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES (NULL, '$idpelamar', '$lainnya', '$t_lainnya', '$n_lainnya')";

	$query_lainnya = $conn->query($sql_lainnya);
 }

 ?>