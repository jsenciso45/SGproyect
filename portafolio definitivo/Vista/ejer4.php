<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <pre>
        var n1,n2,n3,t,mayor;
        n1 = parseInt(prompt("Número 1"));
        n2 = parseInt(prompt("Número 2"));
        n3 = parseInt(prompt("Número 3"));

        if (n1 > n2) {
            t = n1;
        }else{
            t = n2;
        }

        if (t > n3) {
            mayor = t;
        }else{
            mayor = n3;
        }

        document.write("El mayor es "+mayor);

        </pre>
    
</body>
</html>