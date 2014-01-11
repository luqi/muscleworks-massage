<center>
<?php  $this->Html->css('global', null, array('inline' => false));
?>


<div >
    <table width="200" border="0" style="margin-bottom: 90px; margin-top:50px;">
        <tr>
            <td style="text-align: center;width: 500px;font-size:large;">Your password has been reset successfully.</td>
        </tr>
   <br><br><br>    
  </br></br></br> 
 <tr>

<br></br>

  <td colspan="2" style=" text-align: center; ">

<br></br>
Click <?php echo $this->Html->link(__('HERE'), array('controller' => 'pagecontents', 'action' => 'index'),array('style'=>'font-weight:bold')); ?> to Continue </td>
        </tr>
    </table>
</div>
</center>