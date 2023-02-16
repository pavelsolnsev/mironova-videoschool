<?php
 
function priceFormat($price) {
    return number_format($price, 0, '', ' ');
}
 
function dateFormat($date) {
    $months = [
        "01" => "января",
        "02" => "февраля",
        "03" => "марта",
        "04" => "апреля",
        "05" => "мая",
        "06" => "июня",
        "07" => "июля",
        "08" => "августа",
        "09" => "сентября",
        "10" => "октября",
        "11" => "ноября",
        "12" => "декабря"
    ];
    $mouth = date("m", strtotime($date));
 
    return 'C ' . date("d", strtotime($date)) . ' ' . $months[$mouth];
}
 
function getCurrPrice($row) {
    $n = -1;
    if (is_array($row)) {
        foreach ($row as $price) {
            if (time() >= strtotime($price->DATE)) {
                $n++;
            }
        }
    }
    return $n;
}
 
 
// объявляем все переменные иначе при сборке посыпятся ворнинги
 
$PRICE_STANDARD = "";
$PRICE_STANDARD_NAME = "";
$PRICES_STANDARD = "";
$PRICE_STANDARD_INCREASING_DAY = "";
$PRICE_STANDARD_NEXT = "";
 
if (property_exists($JSONDATA, 'Prices') === true) {
    if ($JSONDATA->Prices != null) {
        foreach ($JSONDATA->Prices as $row) {
            $price = (array)$row->price;
            $countPrice = count($price);
            $curNum = getCurrPrice($price);
            $num = getCurrPrice($price) + 1;
 
            switch ($row->productId) {
 
                case 5320977: // Указываем product_id в зависимости от категории например, Standard
                    $PRICE_STANDARD = priceFormat($price[$curNum]->PRICE);
                    $PRICE_STANDARD_NAME = "Standard";
                    $PRICES_STANDARD = $price;
                    if (array_key_exists($num, $price)) {
                        $PRICE_STANDARD_NEXT = priceFormat($price[$num]->PRICE);
                    }
                    if (array_key_exists($num, $price)) {
                        $PRICE_STANDARD_INCREASING_DAY = dateFormat($price[$num]->DATE);
                    }
                    if ($PRICE_STANDARD_NEXT == 0) {
                        $PRICE_STANDARD_NEXT = '';
                        $PRICE_STANDARD_INCREASING_DAY = '';
                    }
                    break;
            }
        }
    }
}
 
 
?>