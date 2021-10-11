<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <pre>
            
        function llenarVector(vector, tam) {
        for (let i = 0; i < tam; i++) {
        vector.push(Math.round(Math.random() * 10));
        }
        return vector;
        }
    
        var llenar = (vector, tam) => {
        for (let i = 0; i < tam; i++) {
        vector.push(Math.round(Math.random() * 10));
        }
        return vector;
        };
        v = new Array();
        
        console.log(llenar(v,2));
    
        var suma = (vector) => {
        var s = 0;
        for (let i = 0; i < vector.length; i++) {
        s = s + vector[i];
        
        }
        return s;
    
        }
        console.log("la Suma de los vectores es: " + suma(v));

        </pre>
    
</body>
</html>