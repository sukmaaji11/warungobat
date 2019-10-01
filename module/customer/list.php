<?php
    $queryAdmin = mysqli_query($koneksi, "SELECT * FROM customer");
    $no=1;
      
    if(mysqli_num_rows($queryAdmin) == 0)
    {
        echo "<h3>Saat ini belum ada data user yang dimasukan</h3>";
    }
    else
    {
        echo "<table class='table-list'>";
          
            echo "<tr class='baris-title'>
                    <th class='kolom-nomor'>No</th>
                    <th class='kiri'>Username</th>
                    <th class='kiri'>Nama Lengkap</th>
                    <th class='kiri'>Email</th>
                    <th class='tengah'>Alamat</th>
                    <th class='kiri'>Level</th>
                    <th class='tengah'h>Action</th>
                 </tr>";
  
            while($rowCustomer=mysqli_fetch_assoc($queryAdmin))
            {
                echo "<tr>
                        <td class='kolom-nomor'>$no</td>
                        <td>$rowCustomer[username]</td>
                        <td>$rowCustomer[nama_lengkap]</td>
                        <td>$rowCustomer[email]</td>
                        <td>$rowCustomer[alamat]</td>
                        <td>$rowCustomer[level]</td>
                        <td class='tengah'><a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=customer&action=form&id_customer=$rowCustomer[id_customer]"."'>Edit</a></td>
                     </tr>";
              
                $no++;
            }
          
        //AKHIR DARI TABLE
        echo "</table>";
    }
?>