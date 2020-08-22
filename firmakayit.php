<?php
if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}
?> 
<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<link rel="stylesheet" type="text/css" href="images/style.css" />
<title>Php Stok Programı V1</title>
</head>

<body bgcolor="#3399FF">

<div align="center">
	<table border="0" width="990" cellpadding="0" height="526" style="border-collapse: collapse" bgcolor="#FFFFFF">
		<tr>
			<td width="396" height="66" align="center">
			<img border="0" src="images/logo.jpg" width="396" height="66"></td>
			<td width="66" height="66" align="center">
			<a href="firmakayit.php">
			<img border="0" src="images/firmaekle.jpg" width="66" height="66"></a></td>
			<td width="66" height="66" align="center">
			<a href="sat.php">
			<img border="0" src="images/sat.jpg" width="66" height="66"></a></td>
			<td width="66" height="66" align="center">
			<a href="al.php">
			<img border="0" src="images/al.jpg" width="66" height="66"></a></td>
			<td width="66" height="66" align="center"><a href="giris.html">
			<img border="0" src="images/giris.jpg" width="66" height="66" alt="Personel Girişi"></a></td>
			<td width="66" height="66" align="center">
			<a href="malzemekayit.php">
			<img border="0" src="images/malzeme.jpg" width="66" height="66" alt="Malzeme Kayıt Formu"></a></td>
			<td width="66" height="66" align="center">
			<a href="malzeme-listeleme.php">
			<img border="0" src="images/liste.jpg" width="66" height="66" alt="Malzeme Listeleme"></a></td>
			<td width="66" height="66" align="center">
			<a href="stok-yukselt.php">
			<img border="0" src="images/satis.jpg" width="66" height="66" alt="Stok Yükselt"></a></td>
			<td width="66" height="66" align="center">
			<a href="stok-azalt.php">
			<img border="0" src="images/alis.jpg" width="66" height="66" alt=" Stok Azalt"></a></td>
			<td width="66" height="66" align="center">
			<a href="cikis.php">
			<img border="0" src="images/cikis.jpg" width="66" height="66" alt="Personel Çıkışı"></a></td>
		</tr>
		<tr>
			<td width="796" colspan="10" align="center">
			<table border="0" width="990" cellspacing="0" cellpadding="0" height="459">
				<tr>
					<td width="120" height="60" align="center">
					<a href="stok-listele.php">
					<img border="0" src="images/stoklistele.jpg" width="120" height="60" alt="Stokta Olanları Listele"></a></td>
					<td width="870" rowspan="5" valign="top">
<div id="firma">
<form name="1" method="post" action="firmakaydet.php">
<div class="firma1"><SELECT NAME="kayittipi"  border="0">
<OPTION VALUE="bayi">Bayi
<OPTION VALUE="kullanici">Kullanıcı
</SELECT></div>
<div class="firma2"><input type="text" name="firmaadi"  size="25" border="0"></div>
<div class="firma2"><input type="text" name="yetkili"  size="25" border="0"></div>
<div class="firma2"><SELECT NAME="sektor"  border="0">
<option selected value="alisveris">Alışveriş
<option value="anahtarci">Anahtarcı
<option value="antikacilar">Antikacılar
<option value="av_balikcilik">Av & Balıkçılık
<option value="ayakkabicilik">Ayakkabıcılık
<option value="banka">Banka, finans
<option value="basin_yayin_sektoru">Basın Yayın Sektörü
<option value="beyaz esya">Beyaz Eşya
<option value="bijuteri_parfumeri">Bijuteri & Parfümeri
<option value="bilgisayar">Bilgisayar
<option value="Bisiklet_Motorsiklet">Bisiklet Motorsiklet
<option value="cep_telefonu">Cep Telefonu
<option value="cicekciler">Çiçekçiler
<option value="danismanlik">Danışmanlık Hizmetleri
<option value="dekorasyon">Dekorasyon
<option value="deri_urunleri_imalati">Deri Ürünleri & imalat
<option value="eczane">Eczaneler
<option value="eğitim hizmetleri">Eğitim  Hizmetleri
<option value="eglence">Eğlence
<option value="elektrik_elektronik">Elektrik & Elektronik
<option value="emlak">Emlak Ofisleri
<option value="fabrika">Fabrika, Tesis
<option value="fotograf">Fotoğraf
<option value="fuar_organizasyon">Fuar & Organizasyon
<option value="gida">Gıda Sektörü
<option value="guvenlik">Güvenlik
<option value="hirdavat">Hırdavat
<option value="isitma_sogutma">Isıtma & Soğutma
<option value="insaat">İnşaat
<option value="internethosting">İnternet &  Hosting
<option value="internet kafe">İnternet kafe
<option value="is_malzemeleri">İş Malzemeleri
<option value="izolasyon">İzolasyon
<option value="kargocular">Kargo Firmaları
<option value="kirtasiye_ofis">Kırtasiye & Ofis
<option value="klima_havalandirma">Klima Havalandırma
<option value="kozmetik">Kozmetik
<option value="kuyumculuk">Kuyumculuk
<option value="makine_sanayii">Makine Sanayii
<option value="metal_ham_madde">Metal & Ham Madde
<option value="mobilya_ve_aksesuarlari">Mobilya & Aksesuarları
<option value="mutfak">Mutfak, Banyol
<option value="organizasyon">Organizasyon
<option value="otomotiv_alim_satim">Oto - Alım & Satım
<option value="oto_kiralama">Oto Kiralama
<option value="otomotiv_sanayii">Otomotiv Sanayii
<option value="oyuncakcilar">Oyuncakçılar
<option value="petrol_kimya">Petrol & Kimya
<option value="restaurant_yemek">Restaurant & Yemek
<option value="saglik_ve_guzellik">Sağlık & Güzellik
<option value="seramik">Seramik
<option value="sigorta">Sigortacılık
<option value="spot">Spot ürünler
<option value="supermarket">Süpermarket
<option value="tarim_hayvancilik">Tarım & Hayvancılık
<option value="tasima_kara_hava">Taşıma - Kara & Hava
<option value="tekstil">Tekstil
<option value="telekom">Telekominkasyon
<option value="temizlik_malzemeleri">Temizlik Malzemeleri
<option value="tercumanlik_hizmetleri">Tercumanlık Hizmetleri
<option value="Toptan">Toptancılar
<option value="turizm_seyahat">Turizm & Seyahat
<option value="tup">Tüp-Su Dağıtımı
<option value="webtasarimprogramlama">Web Tasarım
<option value="yapi">Yapı malzemeleri
<option value="zuccaciye">Züccaciye</option>
</select></div>
<div class="firma2"><input type="text" name="email"  size="25" border="0"></div>
<div class="firma2"><input type="text" name="web"  size="25" border="0"></div>
<div class="firma2"><input type="text" name="tel"  size="25" border="0"></div>
<div class="firma2"><input type="text" name="fax"  size="25" border="0"></div>
<div class="firma2"><textarea name="adres" rows="3" cols="25"></textarea></div>
<div class="firma2">
<SELECT NAME="il"  border="0">
<OPTION value="İstanbul"selected>İstanbul
<OPTION value="Ankara">Ankara
<OPTION value="İzmir">İzmir
<OPTION value="Adana">Adana
<OPTION value="Adıyaman">Adıyaman
			  <OPTION value="Afyon">Afyon<OPTION 
              value="Ağrı">Ağrı<OPTION value="Aksaray">Aksaray<OPTION 
              value="Amasya">Amasya<OPTION value="Antalya">Antalya<OPTION 
              value="Ardahan">Ardahan<OPTION value="Artvin">Artvin<OPTION 
              value="Aydın">Aydın<OPTION value="Balıkesir">Balıkesir<OPTION 
              value="Bartın">Bartın<OPTION value="Batman">Batman<OPTION 
              value="Bayburt">Bayburt<OPTION value="Bilecik">Bilecik
              <OPTION 
              value="Bingöl">Bingöl<OPTION value="Bitlis">Bitlis<OPTION 
              value="Bolu">Bolu<OPTION value="Burdur">Burdur<OPTION 
              value="Bursa">Bursa<OPTION value="Çanakkale">Çanakkale<OPTION 
              value="Çankırı">Çankırı<OPTION value="Çorum">Çorum<OPTION 
              value="Denizli">Denizli<OPTION value="Diyarbakır">Diyarbakır<OPTION 
              value="Edirne">Edirne<OPTION value="Elazığ">Elazığ<OPTION 
              value="Erzincan">Erzincan<OPTION value="Erzurum">Erzurum<OPTION 
              value="Eskişehir">Eskişehir<OPTION value="Gaziantep">Gaziantep<OPTION 
              value="Giresun">Giresun<OPTION value="Gümüşhane">Gümüşhane<OPTION 
              value="Hakkari">Hakkari<OPTION value="Hatay">Hatay<OPTION 
              value="Iğdır">Iğdır<OPTION value="Isparta">Isparta<OPTION 
              value="İçel">İçel<OPTION value="K.Maraş">K.Maraş<OPTION 
              value="Karabük">Karabük<OPTION value="Karaman">Karaman<OPTION 
              value="Kars">Kars<OPTION value="Kastamonu">Kastamonu<OPTION 
              value="Kayseri">Kayseri<OPTION value="Kırıkkale">Kırıkkale<OPTION 
              value="Kırklareli">Kırklareli<OPTION value="Kırşehir">Kırşehir<OPTION 
              value="Kilis">Kilis<OPTION value="Kocaeli">Kocaeli<OPTION 
              value="Konya">Konya<OPTION value="Kütahya">Kütahya<OPTION 
              value="Malatya">Malatya<OPTION value="Manisa">Manisa<OPTION 
              value="Mardin">Mardin<OPTION value="Muğla">Muğla<OPTION 
              value="Muş">Muş<OPTION value="Nevşehir">Nevşehir<OPTION 
              value="Niğde">Niğde<OPTION value="Ordu">Ordu<OPTION 
              value="Osmaniye">Osmaniye<OPTION value="Rize">Rize<OPTION 
              value="Sakarya">Sakarya<OPTION value="Samsun">Samsun<OPTION 
              value="Siirt">Siirt<OPTION value="Sinop">Sinop<OPTION 
              value="Sivas">Sivas<OPTION value="Şanlıurfa">Şanlıurfa<OPTION 
              value="Şırnak">Şırnak<OPTION value="Tekirdağ">Tekirdağ<OPTION 
              value="Tokat">Tokat<OPTION value="Trabzon">Trabzon<OPTION 
              value="Tunceli">Tunceli<OPTION value="Uşak">Uşak<OPTION 
              value="Van">Van<OPTION value="Yalova">Yalova<OPTION 
              value="Yozgat">Yozgat<OPTION value="Zonguldak">Zonguldak
              <OPTION value="Diğer">Diğer</OPTION>
                      </SELECT></div>
<div class="firma2"><input type="text" name="ilce"  size="25"></div>
<div class="firma2"><input type="hidden" name="personel"  size="25" border="0" value="<? include("database.php"); echo"$_REQUEST[kullanici]";?>"></div>
<div class="firma2"><input type="text" name="vergidairesi"  size="25"></div>
<div class="firma2"><input type="text" name="vergino"  size="25"></div>
<input type="submit" class="kaydet" name="button" value="" class="gonder">
</div>
					</td>
				</tr>
				<tr>
					<td width="120" height="60" align="center">
					<a href="stok-biten.php">
					<img border="0" src="images/stokbiten.jpg" width="120" height="60" alt="Stokta Olmayanları Listele"></a></td>
				</tr>
				<tr>
					<td width="120" height="60" align="center">
					<a href="malzeme-listeleme.php">
					<img border="0" src="images/tumlistele.jpg" width="120" height="60" alt="Tümünü Listele"></a></td>
				</tr>
				<tr>
					<td width="120" align="center">
					<form name="arama" id="arama" action="arama.php" method="post">
					<input name="arama" id="arama" size="15" type="text">
					<input name="button" class="arama" type="submit" value="">
					</form>					
					</td>
				</tr>
				<tr>
					<td width="120" align="center">
					<a href="index.php">
					<img border="0" src="images/yanlogo.jpg" width="66" height="404" alt="Stok Takip Yazılımı Anasayfası"></a></td>
				</tr>
				<tr>
					<td width="120" height="20">
					<p align="center"><font face="Arial" size="1">
					<a href="http://www.cihankaraca.com.tr/stok/phpstokv1.rar" alt="Stok Takip Yazılımı V1.0">
					Php Stok Programı V1.0</a></font></td>
					<td width="870" height="20">
					<p align="center"><b><font face="Agency FB" size="2">2010 
					Copyright <a href="http://www.kraldizayn.com" alt="Web Tasarım Dizayn">
					Kraldizayn</a> 
					| <a href="http://www.cihankaraca.com.tr" alt="Cihan KARACA">
					Cihan KARACA</a> 
					Tüm Hakları Saklıdır.</font></b></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

</html>
<?php
if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}
?>