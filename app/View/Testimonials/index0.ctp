<?php
// in your view file
$this->Html->css('global', null, array('inline' => false));
?>


<h1>Testimonial</h1>
<table>
    <tr>
        <th>Services</th>
    </tr>

<?php foreach ($testimonials as $testimonial): ?> 
<tr>
<td>
<?php echo $this->Html->link($testimonial['Testimonial']['Service'], array('controller' => 'testimonials', 'action' => 'view0', $testimonial['Testimonial']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
<?php unset($testimonial); ?> 
</table>