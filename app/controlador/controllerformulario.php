<?php

class controllerformulario{


    

    // Metodo para comprobar el email
    public static function comprobarEmail($email){
        $correcto=false;
        $email=self::estandarizar($email);
        if(preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email)){
            $correcto=true;
        }
        return $correcto;
    }
    // Metodo para comprobar la repeticion de contraseñas
    public static function contraRepe($contra, $contrarepe){
        $iguales=false;
        $contra = self::estandarizar($contra);
        $contrarepe = self::estandarizar($contrarepe);
        if($contra==$contrarepe){
            $iguales=true;
        }
        return $iguales;
    }
    // Metodo para eliminar caracteres no deseados
    public static function estandarizar($dato){
        $dato = trim($dato); // Elimina espacios antes y después de los datos
        $dato = strip_tags($dato); //Retira las etiquetas HTML y PHP de un string
        $dato = stripslashes($dato); // Elimina backslashes \
        $dato = htmlspecialchars($dato); //Traduce caracteres especiales en entidades HTML
        return $dato;
    }
}?>