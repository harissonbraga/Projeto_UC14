<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>CSS - Saguão Principal</title>
    </head>
    <body overflow: hidden;>
        <?php
           
        ?>

        <h1></h1>
        
           
            <div id="dentro"><h1  style="color:white">Clínica Odontológica</h1></div>
           
            <div id="dentro2"></div>
			
			
         <input  type="button" href='chatSaguao' class="MeuInput"  value="Sala de Bate-Papo"
         onclick="window.location='../home.php';" />
		 
		 <input  type="button" class="MeuInput2" value="Cadastro de Produtos"
		 onclick="window.location='../telasCadastro/index.php';"/>
			
		<input  type="button" class="MeuInput3" value="Sair"
		onclick="window.location='../index.php';" />
           
		   <div id="dentro3"></div>
		<h2>login here</h2>
             <div id="dentro4"></div>
			 
			 <div id="div_referencial">

<br>


<a href="General_Message/General_Message.php"><img src="img/chat.png" class="navimg img-responsive">
<span class="nav-writting"></span> </a>
</div>
		 <div id="div_referencial2">
<br>


<a href="General_Message/General_Message.php"><img src="img/send-file.png" class="navimg img-responsive">
<span class="nav-writting"></span> </a>
</div>

<div id="div_referencial3">
<br>


<a href="General_Message/General_Message.php"><img src="img/logout.png" class="navimg img-responsive">
<span class="nav-writting"></span> </a>
</div>

<div id="div_mensagem">
<h1 style="background-color: transparent;color: black;"></h1>

<div id="div_referencialimagem2">

<div id="div_referencialimagem">
  <?php

session_start();

if(!empty($_SESSION['name'])){
  echo "Olá ".$_SESSION['name'].", seja bem vindo(a)";
  
  
}else{
  $_SESSION['uname'] = "Chat e estoque";
  header("Location: login.php");  
  
}
?>



</div>

<span class="nav-writting"><br></span> </a>
<br>

        
        
        <style>
          
        #div_referencialimagem3{
        width:auto;
        height:0px;
        border-style:  transparent;
        border-color:  #90b4c2;
        border-width: 1px;

        position: absolute;
        top: -840px;
        left: -595px;
    }
        #div_referencialimagem2{
        width:auto;
        height:0px;
        border-style:  solid;
        border-color:  gray;
        border-width: 867px;

        position: absolute;
        top: -8px;
        left: 215px;
    }
    #div_referencialimagem{
        border-style:  transparent;
        border-color: red;
border-width: 30px;

position: absolute;
 top: -560px;
  left: -850px;
    }

        #div_msg {


border-style: transparent;
position: absolute;
  top: 97px;
  left: 15px;
}
		#div_referencial {

width:80px;
heigth:800px;
border-color: red;
border-width: 300px;

border-style: transparent;
position: absolute;
  top: 97px;
  left: 15px;
}

#div_referencial2 {

width:80px;
heigth:800px;
border-color: red;
border-width: 300px;

border-style: transparent;
position: absolute;
  top: 140px;
  left: 13px;
}
#div_referencial3 {

width:80px;
heigth:800px;
border-color: red;
border-width: 300px;

border-style: transparent;
position: absolute;
  top: 185px;
  left: 17px;
}
         
            #dentro{
                width: auto; height: 62px;
                background-image: 
                    linear-gradient(to right, blue, white); 
                margin-left: 0px;
				position: relative; top: -40px; left: auto right: auto;
				border-width: 2px;
				border-style: solid;
				border-color: #436EEE;
				
				
				
            }
			#dentro2{
                width: 220px; height: 55px;
              background-image: linear-gradient(to left, white, #9C9C9C, #B5B5B5);
                margin-left: 0px;
				position: relative; top: -40px; left: auto right: auto;
				
				
				
            }
INPUT.MeuInput {
     width: 220px;
     height: 45px;
     font-family: verdana;
     background-color: #B5B5B5;
	 position: relative; top: -40px; left: auto right: auto;
}
INPUT.MeuInput2 {
     width: 220px;
     height: 45px;
     font-family: verdana;
     background-color: #B5B5B5;
	 position: relative; top: 4px; left: -224px; right: auto;
	 
}
INPUT.MeuInput3  {
     width: 220px;
     height: 45px;
     font-family: verdana;
     background-color: #B5B5B5;
	 position: relative; top: 47px; left: -448px; right: auto;
	 
}
#dentro3{
                width: 220px; height: 1550px;
                background-image: linear-gradient(to left, white, #9C9C9C, #B5B5B5);
                margin-left: 0px;
				position: relative; top: 46px; left: auto right: auto;
}
#dentro4{
                width: auto; height: 1550;
               
                background-image: 
                    radial-gradient( white, #E8E8E8 );
                color: yellow;
            
				position: relative; top: -690px; left: 220px; right: auto;
}
#div_mensagem{
                width: 210px; height: 25px;
                background-color: transparent; 
                border-width: 4px;
                border-color: transparent;
                border-style: solid;    
            
                position: relative; top: -1753px; left: 3px; right: auto;
}
        </style>     
    </body>
</html>