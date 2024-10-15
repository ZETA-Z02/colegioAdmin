<?php
class Controller
{
  public $view;
  public $model;

  function __construct()
  {
    #echo "<h1>Controlador Base</h1>";
    $this->view = new View();
  }

  function loadModel($model)
  {
    $url = 'models/' . $model . "model.php";

    if (file_exists($url)) {

      require $url;

      $modelName = $model . 'Model';
      $this->model = new $modelName();
    }
  }
  // Los parametros son
  //FILE=> el archivo subido
  //NOMBRE=> nombre del archivo, puede ser nombre del usuario o apellido lo que mejor convenga
  //ID=> un Identificador unico, Id de la base de datos o un numero especial

  public function File($file, $nombre, $identificador)
  {
      $temporal = $file['tmp_name'];
      $rutaCarpeta = "dumps/excel/Cot.:" . $nombre . $identificador;
      $fileExistente = file_exists($rutaCarpeta);
      //TAMAÑO Y TIPOS DE ARCHIVOS
      $tamanoMaximo = 4 * 1024 * 1024;
      $archivosPermitidos = ['jpg','jpeg','png','xls','xlsx','ods','doc','docx', 'odt', 'pdf'];
      $extensionArchivo = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
      $resultadoExtension = in_array($extensionArchivo, $archivosPermitidos);

      if ($fileExistente) {
          $rutaFile = $rutaCarpeta . "/" . $file['name'];
          $fileSubido = move_uploaded_file($temporal, $rutaFile);
          if ($fileSubido) {
              $rutaCompleto = constant('URL') . $rutaFile;
              return $rutaCompleto;
          } else {
              return false;
          }
      } else {
          if (!empty($file) && $file['error'] == 0 && $resultadoExtension && $tamanoMaximo >= $file['size']) {
              $result = mkdir('Cot.:' . $nombre . $identificador, 0777);
              $resultRename = rename('Cot.:' . $nombre . $identificador, "dumps/excel/Cot.:". $nombre.$identificador);
              $rutaFile = $rutaCarpeta . "/" . $file['name'];
              $fileSubido = move_uploaded_file($temporal, $rutaFile);
              if ($result && $resultRename && $fileSubido) {
                  $rutaCompleto = constant('URL') . $rutaFile;
                  //Devuelve la ruta completa para la base de datos
                  return $rutaCompleto;
              } else {
                  return false;
              }
          } else {
              //echo var_dump($file).'Error en subir el archivo Foto';
              return false;
          }
      }
  }
  protected function Foto($file, $nombre, $identificador)
  {
      $temporal = $file['tmp_name'];
      $rutaCarpeta = "dumps/img/" . $nombre . $identificador;
      $fileExistente = file_exists($rutaCarpeta);
      //TAMAÑO Y TIPOS DE ARCHIVOS
      $tamanoMaximo = 4 * 1024 * 1024;
      $archivosPermitidos = ['jpg','jpeg','png','xls','xlsx','ods','doc','docx', 'odt', 'pdf'];
      $extensionArchivo = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
      $resultadoExtension = in_array($extensionArchivo, $archivosPermitidos);

      if ($fileExistente) {
          $rutaFile = $rutaCarpeta . "/" . $file['name'];
          $fileSubido = move_uploaded_file($temporal, $rutaFile);
          if ($fileSubido) {
              $rutaCompleto = constant('URL') . $rutaFile;
              return $rutaCompleto;
          } else {
              return false;
          }
      } else {
          if (!empty($file) && $file['error'] == 0 && $resultadoExtension && $tamanoMaximo >= $file['size']) {
              $result = mkdir($nombre . $identificador, 0777);
              $resultRename = rename($nombre . $identificador, "dumps/img/". $nombre.$identificador);
              $rutaFile = $rutaCarpeta . "/" . $file['name'];
              $fileSubido = move_uploaded_file($temporal, $rutaFile);
              if ($result && $resultRename && $fileSubido) {
                  $rutaCompleto = constant('URL') . $rutaFile;
                  //Devuelve la ruta completa para la base de datos
                  return $rutaCompleto;
              } else {
                  return false;
              }
          } else {
              //echo var_dump($file).'Error en subir el archivo Foto';
              return false;
          }
      }
  }
}
