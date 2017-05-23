<?php
class usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;
    
    
    function VerificaUsuario(){
        $oConn = new Conexion();
        if($oConn->conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre'";
        
        $resultado = $db->query($sql);
        
        if($resultado->num_rows>=1)
            return true;
        else 
            return false;
        
        
    }
    
    function VerificaUsuarioClave(){
        $oConn = new Conexion();
        if($oConn->conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $clavemd5=md5($this->clave);
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre' and pwdusuario='$clavemd5'";
        
        echo $sql;
        
        $resultado = $db->query($sql);
        
        if($resultado->num_rows>=1)
            return true;
        else 
            return false;
        
        
    }
    
    
    
    
}
