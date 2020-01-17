<center>
  <table border="1"  width="80%">

          <?php
            $i=0;
            foreach ($additionalIdentityQuestion as $key):
           ?>
           <tr>
               <td><?php echo $key->QUESTION; ?></td>
               <?php if ($additionalIdentityOption[$i]['count']==0) {?>
                <td><textarea name="location" width="100%" ></textarea> </td>
           </tr>
             <?php } ?>
           <?php foreach ($additionalIdentityOption[$i]['option'] as $key2 ): ?>
            <tr>
              <td></td>
              <td><?php echo $key2->OPTION ?></td>
            </tr>
             <?php endforeach; ?>
        <?php
         $i++;
        endforeach; ?>
  </table>
</center>
