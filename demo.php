<?
    require_once('DataReturn.class.php');

    $param = array( // DataReturn 參數
                    'type'    => 'JSON', // 輸出的類型 JSON,XML,CALLBACK,ARRAY 默認為 JSON
                    'retcode' => '1000', // retcode 的值，默認為0
                    'msg'     => '',     // msg 的值，默認為空
                    'data'    => array(  // 要輸出的數據
                                    'id'     => '100',
                                    'name'   => 'fdipzone',
                                    'gender' => 1,
                                    'age'    => 28
                                 ),
                    'format'  => array(	// 輸出的數據key格式,默認為 retcode,msg,data
                                    'retcode' => 'status',
                                    'msg'     => 'info',
                                    'data'    => 'result'
                                 ),
                    'xmlroot'  => 'xmlroot',  // 當type=XML時,XML根節點名稱，默認為xmlroot
                    'callback' => 'callback'  /* 回調方法名稱
                                                   type=JSON時，默認為空，如不為空，則輸出callback({data});
                                                   type=CALLBACK時,默認為callback，自動調用頁面JS回調方法
                                              */
    );

    $obj = new DataReturn($param);  // 創建DataReturn類對象
    $obj->data_return();            // 按格式輸出數據
?>