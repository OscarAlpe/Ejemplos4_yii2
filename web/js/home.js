/**
 * Este fichero de JS se carga desde Assets 
 */

window.addEventListener("load",()=>{
    setTimeout(()=>{
        $('#myModal').modal('show');
      setTimeout(()=>{
        $('#myModal').modal('hide');
      },5000);
   },2000);
});
