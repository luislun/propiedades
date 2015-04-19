<?php
$startRow = 0;
$matrices = [
    [ 0, 1, 2 ],
    [ 3, 4, 5 ],
    [ 6, 7, 8 ]
];
$totalRows = count( $matrices );

$keyMatrices = 0;
foreach( $matrices[ 0 ] as $key => $value ){
    echo $matrices[ 0 ][ $key ];
    if( isset( $matrices[ $keyMatrices + 1 ][ $key -1 ] ) ){
        echo ', ';
        echo $matrices[ $keyMatrices + 1 ][ $key -1 ];
        if( isset( $matrices[ $keyMatrices + 2 ][ $key -2 ] ) ){
            echo ', ';
            echo $matrices[ $keyMatrices + 2 ][ $key -2 ];
        }
    }

    echo ', <br/>';
}

$keyMatrices = $totalRows -1;
foreach( $matrices[ $keyMatrices ] as $key => $value ){
    echo $matrices[ $keyMatrices ][ $key ];

    if( isset( $matrices[ $keyMatrices - 1 ][ $key +1 ] ) ){
        echo ', ';
        echo $matrices[ $keyMatrices - 1 ][ $key +1 ];
        if( isset( $matrices[ $keyMatrices -2 ][ $key +2 ] ) ){
            echo ', ';
            echo $matrices[ $keyMatrices - 2 ][ $key +2 ];
        }
    }

    echo ', <br/>';
}

$keyMatrices = $totalRows -1;
foreach( $matrices[ $keyMatrices ] as $key => $value ){
    echo $matrices[ $keyMatrices ][ $key ];

    if( isset( $matrices[ $keyMatrices - 1 ][ $key +1 ] ) ){
        echo ', ';
        echo $matrices[ $keyMatrices - 1 ][ $key +1 ];
        if( isset( $matrices[ $keyMatrices -2 ][ $key +2 ] ) ){
            echo ', ';
            echo $matrices[ $keyMatrices - 2 ][ $key +2 ];
        }
    }

    echo ', <br/>';
}
