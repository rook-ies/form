<center>
  <table border="0"  width="80%">
      <tr>
          <td colspan="3">
              <b>I. Identitas Responden</b>
          </td>
      </tr>
          <?php
            $i=0;
            foreach ($additionalIdentityQuestion as $key):
           ?>
           <tr>
               <td><?php echo chr($i+65)?></td>
               <td><?php echo $key->QUESTION; ?></td>
               <?php if ($additionalIdentityOption[$i]['count']==0) {?>
                <td><textarea name="additionalIdentityAnswer<?php echo $i; ?>" width="100%" ></textarea> </td>
           </tr>
             <?php } ?>
           <?php foreach ($additionalIdentityOption[$i]['option'] as $key2 ): ?>
            <tr>
              <td></td>
              <td></td>
              <?php if($key2->ID_INPUT_TYPE == 3) {?>
                <td><?php echo form_radio('additionalIdentityAnswer'.$i, 'lainnya', FALSE).$key2->OPTION ?><textarea name="additionalLainnya" width="100%" ></textarea></td>
              <?php }
              else{ ?>
              <td><?php echo form_radio('additionalIdentityAnswer'.$i, $key2->OPTION, FALSE).$key2->OPTION ?></td>
            <?php } ?>
            </tr>
             <?php endforeach; ?>
        <?php
                 echo form_hidden('idAdditionalQuestion'.$i,$key->ID_ADDITIONAL_IDENTITY_QUESTION);
         $i++;
        endforeach; ?>
  </table>
  <?php echo form_hidden('jumlahIdentitasTambahan',$i); ?>
  <?php echo form_hidden('idForm',$this->uri->segment(3)) ?>
</center>
