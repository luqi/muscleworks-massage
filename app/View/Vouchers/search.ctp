<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<div id="demo"> 
    <table  class="display">

        <tr>
            <th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
            <th><?php echo $this->Paginator->sort('from_name', 'From'); ?></th>
            <th><?php echo $this->Paginator->sort('from_email', 'Email'); ?></th>
            <th><?php echo $this->Paginator->sort('to_name', 'To'); ?></th>

            <th><?php echo $this->Paginator->sort('date_purchase', 'Date'); ?></th>
            <th><?php echo $this->Paginator->sort('price', 'Price'); ?></th>
            <th><?php echo $this->Paginator->sort('status', 'Status'); ?></th>
            <th><?php echo $this->Paginator->sort('payment', 'Payment Status'); ?></th>
            <th><?php echo $this->Paginator->sort('payment_method', 'Payment Method'); ?></th>
            <th>View</th>

            <th>Edit</th>

        </tr>

        <?php foreach ($as as $voucher): ?>
            <tr>
                <td><?php echo h($voucher['Voucher']['id']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_name']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_email']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['to_name']); ?>&nbsp;</td>                    
                <td><?php echo date('d-m-Y', strtotime(h($voucher['Voucher']['date_purchase']))); ?>&nbsp;</td>
                <td><?php echo '$', h($voucher['Voucher']['price']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['status']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['payment']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['payment_method']); ?>&nbsp;</td>
                <td><?php echo $this->Html->image("view.png", array('url' => array("controller" => "vouchers", "action" => "view", $voucher["Voucher"]["id"]))); ?></td>
                <td><?php echo $this->Html->image('edit.png', array('url' => array('action' => 'edit', $voucher['Voucher']['id']))); ?></td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table> 

</div>
<div class="paging">
    <?php
    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
</div>
<br><br><br><br>
<?php 
$urlGo = array('controller'=>'vouchers','action'=>'index');
echo $this->Form->button('Go back', array('onclick' => "location.href='".$this->Html->url($urlGo)."'"));
?>
        
        <?php 
        if($count==0)
        {
            echo "no result(s) found";
        }
?>