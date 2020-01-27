<center>
  <table border="0"  width="80%">
      <tr>
          <td>
              <b>I. Identitas Responden</b>
          </td>
      </tr>
      <tr>
        <td>
          <?php $i=0;
            foreach ($identityQuestion as $key){
           ?>
           <tr>
               <td><?php echo chr($i+65).". ".$key->QUESTION; ?></td>
               <?php if ($identity[$i]['count']==0) {?>
                <td><input type="text" name="identity<?php echo $i; ?>" value="<?php $this->input->post('identity'.$i) ?>" style="width:200px;"></input> </td>
           </tr>
                <?php } ?>
            <?php foreach ($identity[$i]['option'] as $key2 ): ?>
           <tr>
               <td></td>
               <td><?php echo form_radio('identity'.$i, $key2->OPTION, FALSE).$key2->OPTION; ?></td>
           </tr>
              <?php endforeach; ?>
              <?php if ($key->ID_IDENTITY_QUESTION == 8): ?>
                <td></td>
                <td><?php echo form_radio('identity'.$i, 'lainnya', FALSE)."Lainnya : "; ?> <textarea name="pekerjaanLainnya" width="20%" ></textarea></td>
              <?php endif; ?>
         <?php $i++; ?>
        <?php } ?>
        </td>
      </tr>
  </table>
  <?php echo form_hidden('jumlahIdentitas',$i); ?>
  <?php echo form_hidden('idForm',$this->uri->segment(3)) ?>
</center>
