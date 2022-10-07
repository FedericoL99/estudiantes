function Verificar(){
    let num=document.getElementById("papa").value;
    if(num<0 || num>5){
        alert("Error PAPA debe ser entre 0 y 5");
    }
}