<?php $this->load->view('print/headjs.php');?>

<body>
<div id="content" class="container_12 clearfix">
<div id="content-main" class="grid_7">

<link href="<?=base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
<div>
<table width="100%">

<tr> <img src="<?=base_url()?>assets/images/logo/<?=$desa['logo']?>" alt="" class="logo"></tr>

<div class="header">
<h4 class="kop">PEMERINTAH KABUPATEN <?=strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
<h4 class="kop">KECAMATAN <?=strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
<h4 class="kop">DESA <?=strtoupper(unpenetration($desa['nama_desa']))?></h4>
<h5 class="kop2"><?=unpenetration(($desa['alamat_kantor']))?> </h5>

<div style="text-align: center;">
<hr /></div></div>


<div align="center"><u><h4 class="kop">SURAT KETERANGAN JUAL BELI</h4></u></div>
<div align="center"><h4 class="kop">Nomor : <?=$input['nomor']?></h4></div>
</table>
<div class="clear"></div>

<table width="100%">

<td class="indentasi">Yang bertanda tangan dibawah ini <?echo $input['jabatan']?> <?echo unpenetration($desa['nama_desa'])?>, Kecamatan <?echo unpenetration($desa['nama_kecamatan'])?>,
Kabupaten <?=unpenetration($desa['nama_kabupaten'])?>, Provinsi <?echo unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya bahwa:  </td></tr>
</table>

<div id="isi3">
<table width="100%">
<tr></tr>
<tr><td width="30%">Nama Lengkap</td><td width="3%">:</td><td width="64%"><? echo unpenetration($data['nama'])?></td></tr>
<tr><td>Tempat dan Tgl. Lahir (Umur)</td><td>:</td><td><?echo ($data['tempatlahir'])?>, <?echo tgl_indo($data['tanggallahir'])?> (<?echo $data['umur']?> Tahun)</td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><?echo $data['sex']?></td></tr>
<tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td>RW. <? echo $data['rw']?>, RT. <?echo $data['rt']?>, Dusun <? echo unpenetration(ununderscore($data['dusun']))?>, Desa <? echo unpenetration($desa['nama_desa'])?>, Kec. <? echo unpenetration($desa['nama_kecamatan'])?>, Kab. <? echo unpenetration($desa['nama_kabupaten'])?></td></tr>
<tr><td>Pekerjaan</td><td>:</td><td><? echo $data['pekerjaan']?></td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td colspan="3">Yang bersangkutan hendak menjual <?echo $input['barang']?>.
<?echo $input['jenis']?> tersebut tidak dalam sengketa dengan pihak lain sehingga dapat dijual kepada pihak kedua yaitu:</td><td width="3%"></td><td width="64%"></td></tr>
<tr><td>Nama</td><td>:</td><td><? echo unpenetration($input['nama'])?></td></tr>
<tr><td>Tempat dan Tanggal Lahir<td>:</td><td><?echo ($input['tempatlahir'])?>, <?echo tgl_indo(tgl_indo_in($input['tanggallahir']))?> </td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><?echo $input['sex']?></td></tr>
<tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td><?echo $input['alamat']?></td></tr>
<tr><td>Pekerjaan</td><td>:</td><td><?echo $input['pekerjaan']?></td></tr>
<tr><td>Keterangan</td><td>:</td><td><?echo $input['keterangan']?></td></tr>
</table>
<table width="100%">
<tr></tr>
<tr></tr>

<tr><td class="indentasi">Demikian surat keterangan ini dibuat dengan sesungguhnya agar dapat dipergunakan sebagaimana mestinya.</td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</table>
<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td width="23%" align="center">Mengetahui,</td><td width="30%"></td><td  align="center"><?=unpenetration($desa['nama_desa'])?>, <?=$tanggal_sekarang?></td></tr>
<tr><td width="23%" align="center">Ketua Adat <?=unpenetration($desa['nama_desa'])?></td><td width="30%"></td><td align="center"><?=unpenetration($input['jabatan'])?> <?=unpenetration($desa['nama_desa'])?></td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td  align="center">( <?=unpenetration($input['ketua_adat'])?> )<td></td><td align="center">( <?=unpenetration($pamong['pamong_nama'])?> )</td></tr>
</table>  </div></div>
<div id="aside">
</div>
</div>
</body>
</html>