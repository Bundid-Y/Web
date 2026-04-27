<?php
function getKochCustomers()
{
    $apiUrl = "https://api-developer.koch-packaging-services.com/purchasing/mst_customer/get_detail";
    $token = "secrettoken123";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // 10 seconds timeout
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer " . $token
    ));
    $response = curl_exec($ch);

    $customers = [];
    if ($response) {
        $data = json_decode($response, true);
        if (isset($data['datas']) && is_array($data['datas'])) {
            foreach ($data['datas'] as $c) {
                $logo = isset($c['logo']) ? $c['logo'] : '';
                if (!empty($logo)) {
                    $customers[] = $c;
                }
            }
        }
    }
    return $customers;
}

$api_customers = getKochCustomers();
?>