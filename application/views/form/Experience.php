<center>
  <table border="0"  width="80%">
      <tr>
          <td>
              <b>III. Pengalaman Tidak Menyenangkan</b>
          </td>
      </tr>
      <tr>
        <td>
          a.	Dalam 1 tahun terakhir menggunakan pelayanan Puskesmas, apakah Anda pernah mengalami pengalaman yang tidak menyenangkan?
        </td>
      </tr>
      <tr>
        <td><?php echo form_radio("pengalaman", 'iya', FALSE); ?>Ya</td>
      </tr>
      <tr>
        <td><?php echo form_radio("pengalaman", 'tidak', FALSE); ?>Tidak</td>
      </tr>
      <tr>
        <td>b.	Mohon sebutkan pengalaman tidak menyenangkan yang pernah Anda alami beserta lokasi dan waktu kejadiannya</td>
      </tr>
      <tr>
        <td> Pengalaman tidak menyenangkan </td>
      </tr>
      <tr>
        <td><textarea name="pengalamanTidakMenyenangkan" style="width:40%;"></textarea>  </td>
      </tr>
      <tr>
        <td> Location </td>
      </tr>
      <tr>
        <td><textarea name="location" style="width:20%;"></textarea></td>
      </tr>
      <tr>
        <td> Waktu </td>
      </tr>
      <tr>
        <td><input type="date" name="waktu" placeholder="DD-MM-YYYY"></td>
      </tr>
  </table>
</center>
