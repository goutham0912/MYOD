window.onload = function(){
  let classic = document.getElementById('selection_classic');
  let gloss = document.getElementById('selection_gloss');
  classic.onclick = function(){
    classic.className = "btn btn-success";
    gloss.className = "btn btn-primary";
  };

gloss.onclick = function(){
    gloss.className = "btn btn-success";
    classic.className = "btn btn-primary";
  };
};
