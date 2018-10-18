<html>
<head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="chatbot.js"></script>
    <link rel="stylesheet" href="chatbot.css" type="text/css">
    
</head>
<body>
<div class="top" id="top">
    <div class="topimage" id="topimage">
        <img id="agent-avatar" src="https://console.dialogflow.com/api-client/assets/img/logo-short.png" srcset="https://console.dialogflow.com/api-client/assets/img/logo-short.png 2x, https://console.dialogflow.com/api-client/assets/img/logo-short.png 1x">
    </div>  
   <div class="toptext">
            <div class="toptextname">Estágio Responsável</div>
            <div class="toptextdescription">Tire suas dúvidas sobre vagas de estágio, legislação e como se candidatar</div>
   </div>
</div>   
<div class="topstrip" id="topstrip">Powered by <a href="https://www.miningbusinessdata.com" style="color:#d3d3d3"> MiningBusinessData</a>&nbsp;&nbsp;&nbsp;
</div>
<div class="topbar" id="chat-text">
</div>
<form>
    <span style="width:100%;">
        <input class="inputbox"
               placeholder="Escreva algo e pressione a tecla 'Enter'..." id="message" name="date" value="">
    </span>
    <input name="submit" type="hidden" value="Submit">
</form>
<?php
$sessionID = uniqid('',true);
include('starter.php');
?>
<span style="display: none;" id="sessionId">
        <?php
        echo $sessionID;
        ?>
    </span>
</body>
</html>
