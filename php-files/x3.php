<!DOCTYPE html>
     <html> 
     <head> 
  <title>chess in css grid</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
body {
  margin: 40px;
  background-color: #222;
  mix-blend-mode: difference; /* work in progress feat*/
}

.gridboard-wrapper {
  border: 4px solid #462921;
  width: 240px;
  margin: 0 auto;
  display: grid;
  grid-gap: 0;
  grid-template-columns: repeat(8, 30px);
  grid-template-rows: 0px repeat(8, 30px) 0px;
  grid-auto-flow: row;
   }

.block { 
      display: block;
      height: 30px;
      width: 30px;
      }

.light {
      background-color: #FFF; /* white */
      color:black; /* text */
      }

.dark {
      background-color: #000; /* black*/
      color:#fff; /* text*/
      }

</style>
</head>
<body> 

  <h3>Chess Board using Nested For Loop</h3>
  <h4> example div setup</h4>

<div class="gridboard-wrapper">
    <?php
      for($row=1;$row<=8;$row++) 
      {
       echo "<div>";
          for($col=1;$col<=8;$col++) 
          {
            $total=$row+$col;
            if($total%2==0)
            {
                  echo "<div class='block light'> </div>";
            }
		  else
		{
            echo "<div class='block dark'> </div>";
            }
          }
          echo "</div>";
      }
      ?>
</div>
</body>
</html>
