<?php

/**
 * 
 * @return \Hosts
 */
function model_hosts() {
    return new Hosts();
}

/**
 * @table hosts
 * @property integer $id PK
 * @property string $nome apelido
 * @property string $endereco endereço
 * @property int $ativo endereço
 */
class Hosts extends Model {
    public function on_error($error) {
        c($this);
    }
}
