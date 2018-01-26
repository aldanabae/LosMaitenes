<?php

class productosModel extends Model {

  public function __construct() {
    parent::__construct();
  }

  public function getProducto($id) {
    return $this->where(array('table' => 'productos', 'where' => "ID='" . $id . "'"));
  }

  public function updateProducto($fields) {
    $id = $this->save('productos', $fields);
    return ($id) ? $id : false;
  }

  public function deleteProductos($ids) {
    return $this->delete('productos', "ID IN (" . implode(',', $ids) . ")");
  }

  public function deleteItemGaleria($id) {
    return $this->delete('archivo', "ID='" . $id . "'");
  }

  public function updateProductos($type, $ids) {
    return $this->update('productos', array('Publico' => $type), "ID IN (" . implode(',', $ids) . ")");
  }

  public function getSelectPos() {
    return $this->all(array('table' => 'productos',
                'campo' => 'ID,Nombre,Posicion',
                'where' => "(Publico='1')",
                'order' => 'Posicion'
    ));
  }

  public function updatePosiciones($ids) {
    $pos = 1;
    foreach ($ids as $id) {
      if ($id != 0) {
        $this->save('productos', array('ID' => $id, 'Posicion' => $pos));
      }
      $pos++;
    }
  }

}

