<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("countries.xml");
$x=$xmlDoc->getElementsByTagName('country');
$hint="";
if (isset($_POST['search'])) 
{
  $Name = $_POST['search'];
  if (strlen($Name)>0) 
  {
    for($i=0; $i<($x->length); $i++) 
    {
      $y=$x->item($i)->getElementsByTagName('name');
      if ($y->item(0)->nodeType==1) 
      {
        echo '<ul class="list-group">';
        if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$Name)) 
        {
          $a = $y->item(0)->childNodes->item(0)->nodeValue;
?>
 <li class="list-group-item" onclick='fillxml("<?php echo $a;?>")'><?php echo $a;?></li>
<?php
        }
      }
    }
  }
}
?>
</ul>