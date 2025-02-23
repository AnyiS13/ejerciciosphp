<?php
    class Formulario{
        private $campo;
        public $codigo;
//METODO CONSTRUCTOR
        function __construct(){
            print "Esto es el constructor de la clase Formulario";
        }
//METODO MOSTRAR FORMULARIO
        function mostrarFormulario(){
            $this->codigo = '
                <form method="post" action="procesa.php">
                    <fieldset>
                        <label>Destino: 
                            <input type="text" name="destino">
                        </label>
                        <label>Asunto: 
                            <input type="text" name="asunto">
                        </label>
                        <label>Mensaje:
                            <textarea name="mensaje" cols="50" rows="20"></textarea>
                        </label>
                        <label>Remitente:
                            <input type="text" name="remitente">
                        </label>
                        <input type="submit" value="Enviar">
                    </fieldset>
                </form>
            ';
            return($this->codigo);
        }
//METODO ENVIAR CORREO
        function enviarCorreo($destino, $asunto, $mensaje, $remitente){
            $this->campo[0] = $destino;
            $this->campo[1] = $asunto;
            $this->campo[2] = $mensaje;
            $this->campo[3] = $remitente;
            return($this->campo);
        }
    }
?>