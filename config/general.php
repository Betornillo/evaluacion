<?php
// Constantes
define('SITE_TITLE', 'BECA');
define('SITE_PATH', 'http://pruebas.quimica.unam.mx/beca/');

// Variables de sesión usadas
#$_SESSION["id_administrador"];
#$_SESSION["usuario_administrador"];
#$_SESSION["id_periodo"];
#$_SESSION["nombre_periodo"];
#$_SESSION["id_alumno"]
#$_SESSION["num_cuenta_alumno"]

// Desarrollo
// admin - 4dm1n_*!

// Funciones Generales
/**
 * Recibe un dato o conjunto de datos, si es vacío regresa null (para insertar correctamente null en la base de datos).
 * Adicionalmente limpia la cadena de espacios extras al inico y fin de la misma
 *
 * @param	string/array
 * @return	string/array/null
 */
function limpiarDato($aux) {
	if (is_array($aux)) {
		$aux = array_map(function($v) {
			return ($v === '') ? null : trim($v);
		}, $aux);
	} else {
		$aux = ($aux === '' ? null : trim($aux));
	}
	return $aux;
}

/**
 * Obtiene una fecha en formato dd/mm/yyyy o yyyy-mm-dd y lo convierte a yyyy-mm-dd o dd/mm/yyyy
 *
 * @param	string
 * @return	string
 */
function fechaMySQL($aux) {
	if ($aux != '' || $aux != null) {
		$auxSplit = str_split($aux); //convierte la fecha en arreglo
		if ($auxSplit[2] === '/') { //fecha dd/mm/yyyy
			$fecha = trim($aux);
			$fecha = str_replace('/','-', $fecha); //primero se reemplazan los / con - para poder usar la funcion date()
			$fecha = date("Y-m-d", strtotime($fecha)); //con date se puede cambiar el formato de fecha, siempre y cuando se reciba un dato válido
		} else if ($auxSplit[4] === '-') { //fecha yyyy-dd-mm
			$fecha = trim($aux);
			$fecha = date("d/m/Y", strtotime($fecha)); //con date se puede cambiar el formato de fecha, siempre y cuando se reciba un dato válido
		}
	} else {
		$fecha = null;
	}
	return $fecha;
}
