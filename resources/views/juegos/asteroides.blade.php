<html>
  <head>

    {!! Html::script('asteroides/jquery-1.4.1.min.js') !!}    
    {!! Html::script('asteroides/vector_battle_regular.typeface.js') !!}    
    {!! Html::script('asteroides/ipad.js') !!}    
    {!! Html::script('asteroides/game.js') !!}  
    
    <style>
      #canvas { border:1px solid black; top:0px; left:0px; }
      .button { position:absolute; border:1px solid black; }
      #left-controls { position:absolute; left:1px; bottom:0px; display:none; }
      #right-controls { position:absolute; right:1px; bottom:0px; display:none; }
      #up { width:200px; height:100px; bottom:100px;}
      #left { width:100px; height:100px; bottom:0px;}
      #right { width:100px; height:100px; bottom:0px; left:100px; }
      #space { width:200px; height:200px; bottom:0px; right:0px; }
    </style>
  </head>
  <body>
    <div id="game-container">
      <canvas id="canvas" width="780" height="540"></canvas>
      <div id="left-controls">
        <div id="up" class='button'>THRUST</div>
        <div id="left" class='button'>LEFT</div>
        <div id="right" class='button'>RIGHT</div>
      </div>
      <div id="right-controls">
        <div id="space" class='button'>FIRE</div>
      </div>
    </div>
  </body>
</html>
