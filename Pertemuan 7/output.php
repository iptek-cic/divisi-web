			<?php
				if(isset($_POST['simpan'])) { //Pembuka if
					$nama = $_POST['namasaya'];
					$prodi = $_POST['pstudi'];
					$semester = $_POST['semester'];
					$alamat = $_POST['alamat'];
			?>v
			<fieldset>
				<legend>OUTPUT DATA</legend>
				<table border="1" width="100%" cellspacing="0">
					<tr>
						<td>Nama</td>
						<td><?php echo $nama; ?> </td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td><?php echo $prodi; ?></td>
					</tr>
					<tr>
						<td>Semester</td>
						<td><?php echo $semester; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?php echo $alamat; ?></td>
					</tr>
				</table>
			</fieldset>  
			<?php } //ini penutup IF ?>