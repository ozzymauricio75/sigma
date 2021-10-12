<?php
/**
*
* Copyright (C) 2010 Sae Ltda
* Walter Andres Marquez Gutierrez <walteramg@gmail.com>
*
* Este archivo es parte de:
* SEM :: Software empresarial a la medida
*
* Este programa es software libre: usted puede redistribuirlo y/o
* modificarlo  bajo los terminos de la Licencia Publica General GNU
* publicada por la Fundacion para el Software Libre, ya sea la version 3
* de la Licencia, o (a su eleccion) cualquier version posterior.
*
* Este programa se distribuye con la esperanza de que sea util, pero
* SIN GARANTIA ALGUNA; ni siquiera la garantia implicita MERCANTIL o
* de APTITUD PARA UN PROPOSITO DETERMINADO. Consulte los detalles de
* la Licencia Publica General GNU para obtener una informacion mas
* detallada.
*
* Deberia haber recibido una copia de la Licencia Publica General GNU
* junto a este programa. En caso contrario, consulte:
* <http://www.gnu.org/licenses/>.
*
**/

// Definicion de datos propios de la aplicacion
$sem["nombreCliente"]    = "Grupo mayorista";
$sem["nitCliente"]       = "";
$sem["direccionCliente"] = "CR 31A No 14 28 Cristobal Colon(Cali, Valle)";
$sem["telefonoCliente"]  = "PBX 3229200 FAX 3229201";
$sem["nombre"]           = "S.E.M.";
$sem["descripcion"]      = "Software empresarial a la medida";
$sem["version"]          = "0.0.1";
$sem["url"]              = "http://localhost";
$sem["creador"]          = "SAE Ltda";
$sem["urlCreador"]       = "http://www.sociedadsae.com.co";
$sem["correoCreador"]    = "info@sociedadsae.com.co";

// Definicion de datos para el acceso a la base datos
$accesoBaseDatos["servidor"]         = "localhost";
$accesoBaseDatos["nombre"]           = "gruma";
$accesoBaseDatos["usuario"]          = "gruma";
$accesoBaseDatos["contrasena"]       = "Gruma/2013-.";
$accesoBaseDatos["prefijoTabla"]     = "sem";
$accesoBaseDatos["filasPorConsulta"] = 15;

// Definicion de otros datos globales
$datosGlobales["servidorPrincipal"]      = true;
$datosGlobales["usuarioMaestro"]         = "admin";
$datosGlobales["componenteInicioSesion"] = "MENUINSE";
$datosGlobales["componentePaginaInicio"] = "MENUPRIN";
$datosGlobales["variableComponente"]     = "componente";
$datosGlobales["idioma"]                 = "es";
$datosGlobales["zonaHorario"]            = "America/Bogota";
$datosGlobales["usuarioRemoto"]         = "sfierp";
$datosGlobales["claveUsuarioRemoto"]    = "sfierp123";
$datosGlobales["servidorRemoto"]        = "192.168.0.4";

// Definicion de rutas de los principales directorios
$rutasGlobales["modulos"]     = "../modulos";
$rutasGlobales["extensiones"] = $rutasGlobales["modulos"] ."/extensiones";
$rutasGlobales["idiomas"]     = "../idiomas";
$rutasGlobales["clases"]      = "../clases";
$rutasGlobales["plantillas"]  = "../plantillas";
$rutasGlobales["temporal"]    = "../temporal";
$rutasGlobales["javascript"]  = "javascript";
$rutasGlobales["imagenes"]    = "imagenes";
$rutasGlobales["estilos"]     = "css";
$rutasGlobales["graficosPhp"] = "../jpgraph/src";
$rutasGlobales["archivos"]    = "../archivos";
$rutasGlobales["temp"]        = $rutasGlobales["imagenes"]."/temp";
//$rutasGlobales["ordenesCompra"] = $rutasGlobales["archivos"]."/ordenes_compra";
$rutasGlobales["ordenesCompra"] = "/home/repositorio/ordenes_compra";
$rutasGlobales["propuestaPedidos"] = $rutasGlobales["archivos"]."/propuesta_pedidos";
$rutasGlobales["exportar"] = "/home/repositorio/sem";
$rutasGlobales["actualizar"] = "actualizar";

// Definicion de directorios por modulo o componente
$rutasComponente["idiomas"]    = "idiomas";
$rutasComponente["clases"]     = "clases";
$rutasComponente["javascript"] = "javascript";
$rutasComponente["sql"]        = "sql";

// Archivos de JavaScript
$rutasJavaScript["global"]        = $rutasGlobales["javascript"]."/global.js";
$rutasJavaScript["formaPago"]     = $rutasGlobales["javascript"]."/formasPago.js";
$rutasJavaScript["principal"]     = $rutasGlobales["javascript"]."/jquery.js";
$rutasJavaScript["interfaz"]      = $rutasGlobales["javascript"]."/jquery.ui.js";
$rutasJavaScript["tablas"]        = $rutasGlobales["javascript"]."/jquery.tablesorter.js";
$rutasJavaScript["marcafila"]     = $rutasGlobales["javascript"]."/jquery.tablehover.js";
$rutasJavaScript["formularios"]   = $rutasGlobales["javascript"]."/jquery.form.js";
$rutasJavaScript["menu"]          = $rutasGlobales["javascript"]."/jquery.menu.js";
$rutasJavaScript["md5"]           = $rutasGlobales["javascript"]."/jquery.md5.js";
$rutasJavaScript["tips"]          = $rutasGlobales["javascript"]."/jquery.tooltip.js";
$rutasJavaScript["bloqueador"]    = $rutasGlobales["javascript"]."/jquery.blockui.js";
$rutasJavaScript["completar"]     = $rutasGlobales["javascript"]."/jquery.autocomplete.js";
$rutasJavaScript["dimension"]     = $rutasGlobales["javascript"]."/jquery.dimensions.js";
$rutasJavaScript["arbolSimple"]   = $rutasGlobales["javascript"]."/jquery.treeview.js";
$rutasJavaScript["arbolMultiple"] = $rutasGlobales["javascript"]."/jquery.checkboxtree.js";
$rutasJavaScript["media"]         = $rutasGlobales["javascript"]."/jquery.media.js";
$rutasJavaScript["metadata"]      = $rutasGlobales["javascript"]."/jquery.metadata.js";
$rutasJavaScript["hotkeys"]       = $rutasGlobales["javascript"]."/jquery.hotkeys.js";
$rutasJavaScript["png"]           = $rutasGlobales["javascript"]."/jquery.fixpng.js";
$rutasJavaScript["javascript"]    = $rutasGlobales["javascript"]."/jquery.maskedinput-1.2.2.min.js";
$rutasJavaScript["idiomaFecha"]   = $rutasGlobales["javascript"]."/i18n/ui.datepicker-".$datosGlobales["idioma"].".js";
$rutasJavaScript["session"]       = $rutasGlobales["javascript"]."/jquery.sessionTimeout.js";

// Definicion de archivos globales
$archivosGlobales["cssGeneral"]   = $rutasGlobales["estilos"]."/celeste/global.css";
$archivosGlobales["cssExplorer6"] = $rutasGlobales["estilos"]."/celeste/explorer6.css";
$archivosGlobales["cssExplorer7"] = $rutasGlobales["estilos"]."/celeste/explorer7.css";
$archivosGlobales["esquemaSQL"]   = $rutasComponente["sql"]."/esquema.php";

// Definicion de rutas de imagenes
$imagenesGlobales["logoAplicacion"]      = $rutasGlobales["imagenes"]."/logo-aplicacion.png";
$imagenesGlobales["logoCliente"]         = $rutasGlobales["imagenes"]."/logo-cliente.png";
$imagenesGlobales["logoClienteFactura"]  = $rutasGlobales["imagenes"]."/logo-cliente-factura.jpg";
$imagenesGlobales["logoClienteReportes"] = $rutasGlobales["imagenes"]."/logo-cliente-reportes.jpg";
$imagenesGlobales["borrador"]            = $rutasGlobales["imagenes"]."/borrador.jpg";
$imagenesGlobales["pendiente"]           = $rutasGlobales["imagenes"]."/pendiente.jpg";
$imagenesGlobales["anulado"]             = $rutasGlobales["imagenes"]."/anulado.jpg";
$imagenesGlobales["inicioSesion"]        = $rutasGlobales["imagenes"]."/llaves.png";
$imagenesGlobales["cargando"]            = $rutasGlobales["imagenes"]."/cargando.png";
$imagenesGlobales["buscar"]              = $rutasGlobales["imagenes"]."/buscar.png";
$imagenesGlobales["restaurar"]           = $rutasGlobales["imagenes"]."/restaurar.png";
$imagenesGlobales["adicionar"]           = $rutasGlobales["imagenes"]."/adicionar.png";
$imagenesGlobales["consultar"]           = $rutasGlobales["imagenes"]."/consultar.png";
$imagenesGlobales["modificar"]           = $rutasGlobales["imagenes"]."/modificar.png";
$imagenesGlobales["eliminar"]            = $rutasGlobales["imagenes"]."/eliminar.png";
$imagenesGlobales["anular"]              = $rutasGlobales["imagenes"]."/anular.png";
$imagenesGlobales["enviar"]              = $rutasGlobales["imagenes"]."/enviar.png";
$imagenesGlobales["guardar"]             = $rutasGlobales["imagenes"]."/guardar.png";
$imagenesGlobales["aceptar"]             = $rutasGlobales["imagenes"]."/aceptar.png";
$imagenesGlobales["cancelar"]            = $rutasGlobales["imagenes"]."/cancelar.png";
$imagenesGlobales["regresar"]            = $rutasGlobales["imagenes"]."/regresar.png";
$imagenesGlobales["exportar"]            = $rutasGlobales["imagenes"]."/exportar.png";
$imagenesGlobales["anterior"]            = $rutasGlobales["imagenes"]."/anterior.png";
$imagenesGlobales["ultima"]              = $rutasGlobales["imagenes"]."/ultima.png";
$imagenesGlobales["siguiente"]           = $rutasGlobales["imagenes"]."/siguiente.png";
$imagenesGlobales["primera"]             = $rutasGlobales["imagenes"]."/primera.png";
$imagenesGlobales["requerido"]           = $rutasGlobales["imagenes"]."/requerido.png";
$imagenesGlobales["requerido_tabla"]     = $rutasGlobales["imagenes"]."/requerido_tabla.png";
$imagenesGlobales["requerido_campos"]    = $rutasGlobales["imagenes"]."/requerido_campos.png";
$imagenesGlobales["imprimir"]            = $rutasGlobales["imagenes"]."/imprimir.png";
$imagenesGlobales["articulos"]           = $rutasGlobales["archivos"]."/articulos";
$imagenesGlobales["referencias"]         = $rutasGlobales["archivos"]."/referencias";
$imagenesGlobales["usuarios"]            = $rutasGlobales["archivos"]."/usuarios";
$imagenesGlobales["temp"]                = $rutasGlobales["imagenes"]."/temp";

// Rutas
$plantillaGlobal["ruta"]         = $rutasGlobales["plantillas"]."/original.htm";
$plantillaGlobal["codificacion"] = "iso-8859-1";

// Definicion de parametros propios del lenguaje y/o del servidor web
ini_set("display_errors", "1");
ini_set("default_charset", $plantillaGlobal["codificacion"]);
ini_set("session.auto_start", "0");
ini_set("session.name", "ISP");
ini_set("session.save_path", $rutasGlobales["temporal"]."/sesiones");
ini_set("session.use_trans_sid", "0");
ini_set("session.use_only_cookies","1");
ini_set("session.gc_maxlifetime", "360000");

?>
