<?php
  $pasta='arquivos'
  if(js_dir($pasta))
  {
   $diretorio=dir($pasta);
   
   while($arquivo=$diretorio->read()) !==false)
   {
    echo'<a href='.$pasta.$arquivo.'>'.$arquivo.'</a><br/>;
	}
     $diretorio->close();
   {
    echo'a pasta não existe'
	}
	?>