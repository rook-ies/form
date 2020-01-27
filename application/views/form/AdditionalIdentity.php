<center>
  <table border="1"  width="80%">

          <?php
            $i=0;
            foreach ($additionalIdentityQuestion as $key):
           ?>
           <tr>
               <td><?php echo $key->QUESTION; ?></td>
               <?php if ($additionalIdentityOption[$i]['count']==0) {?>
                <td><textarea name="additionalIdentityAnswer<?php echo $i; ?>" width="100%" ></textarea> </td>
           </tr>
             <?php } ?>
           <?php foreach ($additionalIdentityOption[$i]['option'] as $key2 ): ?>
            <tr>
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
</center>
