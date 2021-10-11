<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <pre>
            
            // declaracion de variables
            var sumar=()=>{
            var n1 = document.getElementById('txtN1').value;
            var n2 = document.getElementById('txtN2').value;
            var suma = parseInt(n1) + parseInt(n2);
            alert('la suma de los digitos '+ n1 + ' y '+ n2 +' es '+suma);
            }

            var resta=()=>{
            var n1 = document.getElementById('txtN1').value;
            var n2 = document.getElementById('txtN2').value;
            var restar = parseInt(n1) - parseInt(n2);
            alert('la resta de los digitos '+ n1 + ' y '+ n2 +' es '+restar);
             }

            var mayor=()=>{
            var n1 = document.getElementById('txtN1').value;
            var n2 = document.getElementById('txtN2').value;

            if (n1>=n2) {
            alert(n1 + 'es mayor que '+n2);        
            } else {
            alert(n2 + 'es mayor que '+n1);
            }
             }

                var menor=()=>{
                    var n1 = document.getElementById('txtN1').value;
                    var n2 = document.getElementById('txtN2').value;

                    if (n1<=n2) {
                        alert(n1 + 'es menor que '+n2);        
                    } else {
                        alert(n2 + 'es menor que '+n1);
                    }
                }

                var mediana=()=>{
                    var strNum=prompt("Ingrese numeros separados con comas");
                    var nums=strNum.split(",");

                    for(i=0, length=nums.length;i<length;i++){
                        nums[i]=parseInt(nums[i]);
                    }
                }

                var OptMath=()=>{
                    var cond=document.getElementById('select');
                    var eval=cond.value;

                    if (eval=="suma") {
                        sumar();
                    }else{
                        if (eval=="resta") {
                            resta();
                        } else {
                            if (eval=="mayor") {
                                mayor();                
                            } else {
                                if (eval=="menor") {
                                    menor()
                                } else {

                                }

                            }

                        }
                    }

                }
 





        </pre>
    
</body>
</html>