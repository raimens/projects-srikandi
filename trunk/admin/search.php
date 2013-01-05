<html>
<script type="text/javascript">
  function showfield(name){
    if(name=='Berita')
	document.getElementById('div1').style.display="block";
    else document.getElementById('div1').style.display="none";
	
	if(name=='Seniman'){
	document.getElementById('div1').style.display="block";
	document.getElementById('div2').style.display="block";
    }else {document.getElementById('div2').style.display="none";
    }}
    function hidefield() {
    document.getElementById('div1').style.display='none';
    }
    function hidefield2() {
    document.getElementById('div2').style.display='none';
    }
</script>

  <body onload ="hidefield2();hidefield();">
	<form method="post" action="../function/fungsisearchadmin.php">
	<fieldset>
	  <center><legend>Cari Kesenian</legend></center>
		<input type="text" name="input" placeholder="Masukkan keyword…">
		<label class="control-label" for="search">Apa yang kamu cari??</label>
		<select type="text" name="menu" onchange="showfield(this.options[this.selectedIndex].value)">
		  <option value="">Pilih yang kamu cari</option>
		  <option value="Seniman">Seniman</option>
		  <option value="Jadwal">Jadwal</option>
		  <option value="Berita">Berita</option>
		</select>
		<div id="div1">
		<label class="control-label" for="search">Cari menurut.....</label>
		<select type="text" name="jenis">
	      <option value="">Cari menurut</option>
		  <option value="Seni Tari">Seni Tari</option>
		  <option value="Seni Musik">Seni Musik</option>
		  <option value="Seni Rupa">Seni Rupa</option>
		  <option value="Drama">Drama</option>
		</select><br>
		</div>
		<div id="div2">
		<label class="control-label" for="search">Cari menurut daerah</label>
		<select type="text" name="daerah">
		  <option value="">Cari daerah</option>
		  <option value="Aceh">Aceh</option>
		  <option value="Sumatera Utara">Sumatera Utara</option>
		  <option value="Sumatera Barat">Sumatera Barat</option>
		  <option value="Riau">Riau</option>
		  <option value="Kepulauan Riau">Kepulauan Riau</option>
		  <option value="Jambi">Jambi</option>
		  <option value="Sumatera Selatan">Sumatera Selatan</option>
		  <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
		  <option value="Bengkulu">Bengkulu</option>
		  <option value="Bandar Lampung">Bandar Lampung</option>
		  <option value="DKI Jakarta">DKI Jakarta</option>
		  <option value="Banten">Banten</option>
		  <option value="Jawa Barat">Jawa Barat</option>
		  <option value="Jawa Tengah">Jawa Tengah</option>
		  <option value="DI Yogyakarta">DI Yogyakarta</option>
		  <option value="Jawa Timur">Jawa Timur</option>
		  <option value="Bali">Bali</option>
		  <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
		  <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
		  <option value="Kalimantan Barat">Kalimantan Barat</option>
		  <option value="Kalimantan Tengah">Kalimantan Tengah</option>
		  <option value="Kalimantan Selatan">Kalimantan Selatan</option>
		  <option value="Kalimantan Timur">Kalimantan Timur</option>
		  <option value="Kalimantan Utara">Kalimantan Utara</option>
		  <option value="Sulawesi Utara">Sulawesi Utara</option>
		  <option value="Gorontalo">Gorontalo</option>
		  <option value="Sulawesi Tengah">Sulawesi Tengah</option>
		  <option value="Sulawesi Barat">Sulawesi Barat</option>
		  <option value="Sulawesi Selatan">Sulawesi Selatan</option>
		  <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
		  <option value="Maluku">Maluku</option>
		  <option value="Maluku Utara">Maluku Utara</option>
		  <option value="Papua Barat">Papua Barat</option>
		  <option value="Papua">Papua</option>
		</select><br>
		</div>
		<br>
		<button type="submit" name="cari" class="btn">Search</button>
	  </fieldset>
	</form>