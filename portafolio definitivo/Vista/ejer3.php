<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <pre>
        class Personas{
        constructor(usuarios,cliente){
            this._usuarios=usuarios;
            this._cliente=cliente;
        }
        get usuarios(){
            return this._usuarios;
        }
        set usuarios(usuarios){
            this._usuarios=usuarios;
        }
        get cliente(){
            return this._cliente;
        }
        set cliente(cliente){
            this._cliente=cliente;
        }
        nombreCompleto(){
            return this._usuarios+' '+this._cliente; 
        }
        }

       class perfil extends Persona{
        constructor(usuarios,cliente,producto,id){
            super(usuarios,cliente);
            this._producto=producto;
            this._id=id;
        }
        get producto(){
            this._producto=producto;
        }
        set producto(producto){
            this._producto=producto;
        }

        get id(){
            return this._id;
        }
        set ficha(ficha){
            this._ficha=ficha;
        }

        setFicha(ficha){
            this._ficha=ficha;
        }
        }



        var ap=new perfil('Javier','Aguirre','game','1');
        var ap1=new perfil ('Tania','Arroyo','game','2');
     
                    
        
        </pre>
    
</body>
</html>