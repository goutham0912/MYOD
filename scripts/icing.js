window.onload = function(){
  let none = document.getElementById('gloss');
  let blueberry = document.getElementById('blueberry');
  let strawberry = document.getElementById('strawberry');
  let gapple = document.getElementById('gapple');
  let choco = document.getElementById('choco');
  none.onclick = function(){
    none.className = "btn btn-success";
    blueberry.className = "btn btn-primary";
    strawberry.className = "btn btn-primary";
    gapple.className = "btn btn-primary";
    choco.className = "btn btn-primary";
  };

  blueberry.onclick = function(){
    none.className = "btn btn-primary";
    blueberry.className = "btn btn-success";
    strawberry.className = "btn btn-primary";
    gapple.className = "btn btn-primary";
    choco.className = "btn btn-primary";
  };

  strawberry.onclick = function(){
    none.className = "btn btn-primary";
    blueberry.className = "btn btn-primary";
    strawberry.className = "btn btn-success";
    gapple.className = "btn btn-primary";
    choco.className = "btn btn-primary";
  };

  gapple.onclick = function(){
    none.className = "btn btn-primary";
    blueberry.className = "btn btn-primary";
    strawberry.className = "btn btn-primary";
    gapple.className = "btn btn-success";
    choco.className = "btn btn-primary";
  };

  choco.onclick = function(){
    none.className = "btn btn-primary";
    blueberry.className = "btn btn-primary";
    strawberry.className = "btn btn-primary";
    gapple.className = "btn btn-primary";
    choco.className = "btn btn-success";
  };

};
