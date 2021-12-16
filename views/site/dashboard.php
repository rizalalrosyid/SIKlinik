<?php

/* @var $this yii\web\View */

$this->title = 'SIKlinik';
use yii\helpers\Url;
use dosamigos\highcharts\HighCharts;

?>
<div class="site-index">

    <div class="text-center">
        <div class="container">
            <h1 class="display-6" style="font-weight: 700;">DASHBOARD</h1>
            <div class="grafik">
            <?php
                foreach($data as $values){
                    $a[0]= ($values['nama_obat']);
                    $c[]= ($values['nama_obat']);
                    $b[]= array('type'=> 'column', 'name' =>$values['nama_obat'], 'data' => array((int)$values['jml']));
                }
                echo
                HighCharts::widget([
                    'clientOptions' => [
                        'chart'=>[
                            'type'=>'bar'
                        ],
                        'title' => ['text' => 'Data Obat yang sering digunakan'],
                        'xAxis' => [
                            'categories' => ['Jenis Obat']
                        ],
                        'yAxis' => [
                            'title' => ['text' => 'Jumlah Penggunaan']
                        ],
                        'series' => $b
                    ]
                ]);
            ?>
            </div>


        </div>
    </div>
</div>
