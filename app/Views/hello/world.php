<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
   
    <!DOCTYPE html>
<html lang="en">

<body>	
	<div class="container text-center">
		<div class="jumbotron ">
            <h1>Wellcome  <?php echo session()->get('username'); ?> </h1>
            <br/>
			<h4>SEPUTAR OTOMOTIF</h4> 
			<p>
               <br/>
				Hallo Sahabat Seputar Otomotif <br/>
				Selamat datang di toko kami <br/>
				Having Fun <?php echo session()->get('username'); ?> <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                Hubungi Kami Di Nomor Ini Jika Ada Pertanyaan <br/>
                081294816427</div>
                
			</p> 
		</div>
	</div>
</body>

</html>
<?= $this->endSection() ?>