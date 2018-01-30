<?php

class distribuidoresModel extends Model {

  public function __construct() {
    parent::__construct();
  }

  public function getDistribuidor($id) {
    return $this->where(array('table' => 'distribuidores', 'where' => "ID='" . $id . "'"));
  }

  public function updateDistribuidor($fields) {
    $id = $this->save('distribuidores', $fields);
    return ($id) ? $id : false;
  }

  public function deleteDistribuidores($ids) {
    return $this->delete('distribuidores', "ID IN (" . implode(',', $ids) . ")");
  }

  public function deleteItemGaleria($id) {
    return $this->delete('archivo', "ID='" . $id . "'");
  }

  public function updateDistribuidores($type, $ids) {
    return $this->update('distribuidores', array('Publico' => $type), "ID IN (" . implode(',', $ids) . ")");
  }

  public function getSelectPos() {
    return $this->all(array('table' => 'distribuidores',
                'campo' => 'ID,Nombre,Posicion',
                'where' => "Publico='1'",
                'order' => 'Posicion'
    ));
  }

  public function updatePosiciones($ids) {
    $pos = 1;
    foreach ($ids as $id) {
      if ($id != 0) {
        $this->save('distribuidores', array('ID' => $id, 'Posicion' => $pos));
      }
      $pos++;
    }
  }

}

