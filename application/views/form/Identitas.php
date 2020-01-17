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
           </tr>
            <?php foreach ($identity[$i]['option'] as $key2 ): ?>
           <tr>
               <td></td>
               <td><?php echo $key2->OPTION; ?></td>
           </tr>
              <?php endforeach; ?>
         <?php $i++; ?>
        <?php } ?>
        </td>
      </tr>
  </table>
</center>
