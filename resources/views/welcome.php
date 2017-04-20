<!DOCTYPE html>
<html lang="en">
<head>
    <script>document.write('<base href="' + document.location + '" />');</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lumen-Angular4</title>

     
    <!-- 1. Load libraries -->
    <!-- Polyfill(s) for older browsers -->
    <script src="js/core-js/client/shim.min.js"></script> 
    <script src="js/zone.js/dist/zone.js"></script> 
    <script src="js/reflect-metadata/Reflect.js"></script> 
    <script src="js/systemjs/dist/system.src.js"></script> 

    <script src="systemjs.config.js"></script> 

    <script>
        System.import('app').catch(function(err){ console.error(err); });
    </script>

   
</head>
<body>
    <my-app>Loading...</my-app>
</body>
</html>
