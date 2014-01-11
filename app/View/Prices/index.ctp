<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
$this->Html->css('style', null, array('inline' => false));

?>


<h1>GIFT VOUCHER</h1>

<p>Massage is a gift that keeps on giving. By purchasing a gift voucher the intended recipient has the choice to select the service they prefer upon booking an appointment. </p>
<br>
        
          <h2>MASSAGE PRICES</h2>
	 <table class="table1">
                <thead>
                    <tr>
                        <th width="210"></th>
                        <th width="198" scope="col" abbr="Medium"><center><span class="STYLE10">PRICE</span></th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
				<?php foreach ($priceTable as $price): ?> 
                    <tr>
                        <th bgcolor="#FFFFFF" scope="row"><center><span class="STYLE10"><?php echo $price['Price']['minutes'];?> MINUTES</span></th>
                        <td>$<?php echo $price['Price']['stdvalue'];?></td>
                    </tr>
					 <?php endforeach; ?> 
                
                </tbody>
            </table>   
        
 <br><br><br>	
 <?php echo $this->Html->image('buy-now-button.jpg', array('id'=>'buy_now', 'width'=>'20%', 'url'=>array('controller'=>'vouchers', 'action'=>'gvinformation'))); ?>    
        <br>

        
        

