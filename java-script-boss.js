
SCROLL_ROLANTE_DIOGO_NEVES_DEV = 0;
function SCROLL_ROLANTE_DIOGO_NEVES_DEV_F(element) 
{

setTimeout(function (elementHTML) 
{


  {

  elementHTML = document.querySelector(element);
  if(element=='.iframe-localizacao')
  {
    elementHTML = elementHTML.offsetTop - 250;

  }
  else
  {
    elementHTML = elementHTML.offsetTop-90;

  }
  var scrollThis = document.getElementsByTagName('html') [0].scrollTop;
  var cal = (elementHTML - scrollThis);
  if (cal < 0)
  
  {

    cal = cal * - 1;
  }
  soma = 12;
  if (cal <= soma)
  
  {

    soma = cal;
  }
  if (elementHTML + soma > scrollThis)
  
  {

    document.getElementsByTagName('html') [0].scrollTop = (scrollThis + soma);
    SCROLL_ROLANTE_DIOGO_NEVES_DEV_F(element)
  } 
  else if (elementHTML - soma < scrollThis)
  
  {

    document.getElementsByTagName('html') [0].scrollTop = (scrollThis - soma);
    SCROLL_ROLANTE_DIOGO_NEVES_DEV_F(element);
  }
}
}, 1);
}
