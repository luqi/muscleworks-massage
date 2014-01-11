<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
$this->Html->css('style', null, array('inline' => false));

?>

<h1>PRICES</h1>


            <table class="table1">
                <thead>
                    <tr>
                        <th width="210" class="price_subheading"><h4>Massage</h4></th>
                        <th width="204" scope="col" abbr="Starter"><center><span class="STYLE10">INITIAL CONSULTATION</span></th>
                        <th width="198" scope="col" abbr="Medium"><center><span class="STYLE10">STANDARD CONSULTATION</span></th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
				<?php foreach ($priceTable as $price): ?> 
                    <tr>
                        <th bgcolor="#FFFFFF" scope="row"><center><span class="STYLE10"><?php echo $price['Price']['minutes'];?> MINUTES</span></th>
                        <td>$<?php echo $price['Price']['value'];?></td>
                        <td>$<?php echo $price['Price']['stdvalue'];?></td>
                    </tr>
					 <?php endforeach; ?> 
                
                </tbody>
            </table>
       <br><br>
	

	   
       <table class="table1">
          <thead>
            <tr>
              <th width="210" class="price_subheading"><h4>Corporate / Events</h4></th>
              <th width="204" scope="col" abbr="Starter"><center><span class="STYLE10">INITIAL CONSULTATION </span></th>
              <th width="198" scope="col" abbr="Medium"><center><span class="STYLE10">STANDARD CONSULTATION </span></th>
            </tr>
          </thead> 
           <tbody>
            <tr>
              <th bgcolor="#FFFFFF" scope="row"><center><span class="STYLE10">Price</span></th>
              <td><span class="STYLE9">TBA</span></td>
              <td><span class="STYLE9">TBA</span></td>
            </tr>
          </tbody>
        </table>
       
       
	   	   <?php
echo $corpmsg['Pagecontent']['content'];
?>

<p>&nbsp;</p>

 <table class="table1">
          <thead>
            <tr>
              <th width="210" class="price_subheading"><h4>Workcover</h4></th>
              <th width="204" scope="col" abbr="Starter"><center><span class="STYLE10">INITIAL CONSULTATION<h5>(M600)</h5></span></th>
              <th width="198" scope="col" abbr="Medium"><center><span class="STYLE10">STANDARD CONSULTATION<h5>(M602)</h5></span></th>
            </tr>
          </thead>
          <tfoot>
          </tfoot>
          <tbody>
            <tr>
              <th bgcolor="#FFFFFF" scope="row"><center><span class="STYLE10"><?php echo $priceTable2['Price']['minutes'];?> MINUTES</span></th>
              <td><span class="STYLE9">$<?php echo $priceTable2['Price']['stdvalue'];?></span></td>
              <td><span class="STYLE9">$55</span></td>
            </tr>
			 
          </tbody>
          </table>

       
       
       
       
       <p></p>
        <center>
        
                             
        <p>&nbsp;</p>
        </center>
        <center>

 	<?php
echo $content['Pagecontent']['content'];
?>


	
 </center>   

