<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=ekonsel.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 <h1>Table Siswa</h1>
 <table border="1px" width="100%">
 
      <thead>
 
                    <th>NO</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Dari jam ke</th>
                      <th>Ket</th>
 
      </thead>
 
      <tbody>
 
      <?php foreach ($isi->result() as $kunci) : ?>
                    <!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
                    <tbody>
                    <tr>
                      <td>
                        <?php echo $kunci->id ?>
                      </td>
                      <td>
                        <?php echo $kunci->nama ?>
                      </td>
                      <td>
                        <?php echo $kunci->kelas ?>
                      </td>
                      <td>
                        <?php echo $kunci->darijam ?>
                      </td>
                      <td>
                        <?php echo $kunci->ket ?>
                      </td>
                      </tr>
                    </tbody>
                    <?php endforeach ?>
 
      </tbody>
 
 </table>

 <h1>Table Guru</h1>
 <table border="1px" width="100%">
 
      <thead>
 
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Dari jam ke</th>
                    <th>Keterangan</th>
 
      </thead>
 
      <tbody>
 
      <?php foreach ($isi2->result() as $kunci2) : ?>
                    <!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
                    <tbody>
                    <tr>
                    <td>
                        <?php echo $kunci2->id ?>
                      </td>
                      <td>
                        <?php echo $kunci2->nama ?>
                      </td>
                      <td>
                        <?php echo $kunci2->darijam ?>
                      </td>
                      <td>
                        <?php echo $kunci2->keterangan ?>
                      </td>
                      </tr>
                    </tbody>
                    <?php endforeach ?>
 
      </tbody>
 
 </table>