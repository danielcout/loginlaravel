<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color:rgb(0,0,0);
    }

    div{
        background-color: rgb(79,79,79);
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color:#62E2DE;
    }


    input{
        background-color: whith;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 15px;
        color: black;
    }

    .ent{
        background-color: #62E2DE;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 15px;
        
    }

    
</style>


</head>


<body>

    <div>
    <form name="cliente" method = "POST" action = "">
        
              <h3>LOGIN<h3> 
             <input name="txtnome" type="text" size="40" maxlength="40" placeholder="NOME"> <br><br>
             <input name="txtsen" type="password" size="10" maxlength="3" required  placeholder="SENHA"  onkeypress="return blokletras(window.event.keyCode)" > <br><br>
            
           <input  type="submit" class="ent" name="btnentrar" value = "ENTRAR">   

</div>

        
</form>


</body>
</html>