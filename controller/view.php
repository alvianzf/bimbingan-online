<?php

$page = @$_GET['page'];

if ($page == '' || $page == 'home')
{
	include 'view/main.php';
}else if ($page == 'mahasiswa')
{
	include 'view/mahasiswa.php';
}else if ($page == 'ganti password')
{
	include 'view/changepass.php';
} else if($page =='dosen')
{
	include 'view/dosen.php';
}else if($page =='revisi')
{
	include 'view/revisi.php';
}else if($page =='lihat revisi')
{
	include 'view/revisi-view.php';
} else if($page =='pengguna mahasiswa')
{
	include 'view/mhs-user.php';
} else if($page =='daftar bimbingan')
{
	include 'view/bimbingan-list.php';
} else if($page =='pengguna dosen')
{
	include 'view/dosen-user.php';
}else if($page =='pengguna')
{
	include 'view/user.php';
}else if($page =='tambah pengguna')
{
	include 'view/user-new.php';
}else if($page =='bimbingan')
{
	include 'view/bimbingan.php';
}else if($page =='riwayat')
{
	include 'view/history.php';
}else if($page =='pembimbing baru')
{
	include 'view/pembimbing-new.php';
}else if ($page == 'tambah mahasiswa') {
	# code...
	include 'view/mahasiswa-add.php';
}else if ($page == 'tambah dosen') {
	# code...
	include 'view/dosen-add.php';
}else if ($page == 'laporan bimbingan')
{
	include 'view/laporan.php';
}else if ($page == 'edit mahasiswa')
{
	include 'view/mahasiswa-edit.php';
}else if ($page == 'edit dosen')
{
	include 'view/dosen-edit.php';
}else if ($page == 'pembimbing') {
	# code...
	include 'view/pembimbing.php';
}
else
{
	echo '<h2>404 - Halaman tidak ditemukan</h2>';
}

?>