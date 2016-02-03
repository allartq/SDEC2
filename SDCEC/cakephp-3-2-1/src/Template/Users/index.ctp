<a>Acheteur</a>
<?php
$url = $this->Url->Build(array('controller'=>'Artisants', 'action'=>'index'));
echo "<a href='$url'>Artisant</a>";
$url = $this->Url->Build(array('controller'=>'Users', 'action'=>'logout'));
echo "<a href='$url'>Deco</a>";
?>